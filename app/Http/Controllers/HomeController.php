<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actors;
use App\films;
use Response;
use DB;

class HomeController extends Controller
{   
	public function index(){
		$actors = actors::all();
		$data = [];
		$info = [];
		foreach ($actors as $actor) {
	       
	       $info["id"] = $actor->id;
	       $info["name"] = $actor->name;
	       $info["number"] = $actor->num;
		   $info["films"] = DB::select("SELECT movie FROM `films` WHERE fid = '$actor->id' ");
		   //dd($films[0]->movie);
		   $data[] = $info;
           $info = [];
		}
       
        //dd($data);
  
		return view('home',compact('data'));
	}
	

    public function Save(Request $request){
        
        $name = $request->data["name"];
        $id = $request->data["id"];
        $film_name = $request->data["film_name"];
        
        $find_id = actors::where("id",$id)->first();
        
        if($find_id == null){
        	$actor = new actors();
	        $actor->name = $name;
	        $actor->id = $id;
	        $actor->save();

	        for($i=0;$i < count($film_name);$i++) {
        	   $film = new films();
        	   $film->movie = $film_name[$i];
               $film->fid = $id;
               $film->save();
	        }
             

	        return Response::json(['message' => 'success','actor'=>$actor,'movies' => $film]);
        }else{
        	return Response::json(['message' => 'error']);
        }
        
    }

    public function Film($name){
      $actors = [];	
      $output = "";
      $films = DB::select("SELECT fid FROM `films` WHERE movie = '$name'");
      for($i = 0;$i < count($films); $i++){
      	$id = $films[$i]->fid;
      	//print_r($id);
      	$actors[] = DB::select("SELECT name ,id FROM `actors` WHERE id = $id ");
      }
      $output .= '<div style="margin:50px;padding:10px;border:1px solid grey;backgroud-color:#EEE;">';
  
      if(count($actors) > 0){
         $output .= "Find the Listed Actors From The Database of Movie ::"." " . $name;
         $output .= "<h2>List Of Actors:</h2>";
         for($i = 0;$i < count($actors); $i++){
         	$output .= "<h4>".($actors[$i][0]->name)."</h4>";
         }
      }else{
      	    $output .= "Sorry No Actors Found in Database with Movie name ::"." ". $name;
      }
      $output .= "<br><a href='/'>Go Home!</a>";
      $output .='</div>';

      echo $output;
    }
}
