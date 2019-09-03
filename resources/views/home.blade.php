@extends('layouts\app')

@section('content')
  <div id="startWarFormContainer"></div>
      <form name="starWarForm">
        <button type="button" class="btn btn-primary" name="add" id="add">Fetch People</button>
        <button type="button" class="btn btn-primary" name="pull" id="pull">Pull Films</button>
        <button type="button" class="btn btn-primary" name="save" id="save">Save Data</button><hr>
        <div id="data_container">
          {{$actor}}
        </div>
        <div id="data_display">
          
       
        </div>
      </form>
   </div>    
@endsection    