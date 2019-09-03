<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actors;
use App\films;
use Response;

class HomeController extends Controller
{   
	public function index(){
		$actor = actors::all();
		$films = actors::find(7)->films;
        
		return view('home',compact('films'));
	}
	public function Pull(){
		return Response::json(['message' => "Hello"]);
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
        	   $film->name = $film_name[$i];
               $film->id = $id;
               $film->save();
	        }

	        
	        return Response::json(['message' => 'success','actor'=>$actor,'movie' => $film]);
        }else{
        	return Response::json(['message' => 'error']);
        }
        
    }
}
