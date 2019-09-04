@extends('layouts\app')

@section('content')
  <div id="startWarFormContainer"></div>
      <form name="starWarForm">
        <button type="button" class="btn btn-primary" name="add" id="add">Pull Actor/Films</button>
        <button type="button" class="btn btn-primary" name="save" id="save">Save Data</button><hr>
        <div id="data_container">
         
        </div>
        <div id="data_display">
             <table class="table table-hover table-striped" id="table">
                <thead>
                  <tr>
                    
                    <th>Number</th>
                    <th>Actor</th>
                    <th>Films</th>
                  </tr>
                </thead>
                <tbody id="table-body">
                 @for ($i = 0; $i < count($data); $i++)
                    <tr>
                      
                      <td>{{ $data[$i]["id"]}}</td>
                      <td>{{ $data[$i]["name"]}}</td>
                      <td><ol>
                     @for ($j = 0; $j < count($data[$i]["films"]); $j++)
                       <li><a href='/film/{{$data[$i]["films"][$j]->movie}}'> {{ $data[$i]["films"][$j]->movie}}</a></li>
                     @endfor
                      </ol></td>
                    </tr>
                  @endfor
                </tbody>  
              </table>
        </div>
      </form>
   </div>    
@endsection    