@extends('layouts\app')

@section('content')
  <div id="startWarFormContainer"></div>
      <form name="starWarForm" action="">
        <button type="button" class="btn btn-primary" name="add" id="add">Fetch People</button>
        <button type="button" class="btn btn-primary" name="pull" id="pull">Pull Films</button>
        <button type="button" class="btn btn-primary" name="save" id="save">Save Data</button><hr>
        <div id="data_container">
            <div id="show_data"></div>
            <label id="film"></label><br>
            <div id="show_films"></div>
        </div>
        
      </form>
   </div>    
@endsection    