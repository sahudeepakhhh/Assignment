function showFilms(films){
    var demo = [];	
	for(var i=0; i < films.length; i++){ 
		$.ajax({
	        url: films[i],
	        type: 'get',
	        dataType: 'json',
	        async: false,
	        success: function(data) {
	            demo.push(data.title);
	        } 
	   });   
	}
	if(demo) return demo; 
}
function getActor(number){
	var demo = null;
	$("#data_container").attr("number",number);
    var url = "https://swapi.co/api/people/"+ number;
	$.ajax({
        url: url,
        type: 'get',
        dataType: 'json',
        async: false,
        success: function(data) {
            demo = data;
        } 
	 });   
	 if(demo) return demo;   	
}

$("#add").click(function(){
	$("#data_container").html("Fetching Info...");
	//$("#show_films").html("");
    var randomNumber =  Math.floor((Math.random() * 80 ) + 1);

    var actor = getActor(randomNumber);
    if(actor){
    	actor.id = randomNumber;
    }else{
    	alert("Error");
    	return;
    }
    
    
    var output = "";
	output += '<p>ActorId :'+ " "+actor.id +'</p>';
	output += '<p>Name :'+ " "+actor.name +'</p>';;
	output += "<p>Films</p>";
    output += "<ul>";
    
    
    var films = showFilms(actor.films);
    
    for(var i=0;i< films.length;i++){
       output += "<li>"+films[i]+"</li>";
    }
    output += "</ul>";
    
    $("#data_container").html(output);

});
$("#pull").click(function(){
    //$("#data_container")
    $.ajax({
    	   headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },	
           url:"/get",
           type: 'get',
           success: function(data,status) {
              console.log(data);
              $("#data_display").html(data.message);          
           },
           error: function (jqXHR, exception) {
		        var msg = '';
		        if (jqXHR.status === 0) {
		            msg = 'Not connect.\n Verify Network.';
		        } else if (jqXHR.status == 404) {
		            msg = 'Requested page not found. [404]';
		        } else if (jqXHR.status == 500) {
		            msg = 'Internal Server Error [500].';
		        } else if (exception === 'parsererror') {
		            msg = 'Requested JSON parse failed.';
		        } else if (exception === 'timeout') {
		            msg = 'Time out error.';
		        } else if (exception === 'abort') {
		            msg = 'Ajax request aborted.';
		        } else {
		            msg = 'Uncaught Error.\n' + jqXHR.responseText;
		        }
		        console.log(msg);
		    }     
	    }); 
});

$("#save").click(function(){
    var id = $("#data_container").attr("number");
    if(id == undefined || id == ""){
    	alert("No Data To Save, First Fetch the data then try to save");
    }else{
    	var actor = getActor(id);
    	var films = showFilms(actor.films);
    	actor.id = id;
    	film_title = [];

    	for(var i=0;i< films.length;i++){
          film_title.push(films[i]);
        }
        actor.film_name = film_title;
        
    	$.ajax({
    	   headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },	
           url:"/save",
           type: 'post',
           data: { data : actor },
           success: function(data) {
              console.log(data);
              //$("#data_container").html(data.message);
              if(data.message == "success"){
              	alert("Data Saved successfully!!");
              }else if(data.message == "error"){
              	alert("This User Already Exist,Click the Pull Button for viewing the same..");
              }else{
              	//$("#data_container").html(data);
              	alert("Unknown Error, Try Again!!");
             
              }
              
           },
           error: function (jqXHR, exception) {
		        var msg = '';
		        if (jqXHR.status === 0) {
		            msg = 'Not connect.\n Verify Network.';
		        } else if (jqXHR.status == 404) {
		            msg = 'Requested page not found. [404]';
		        } else if (jqXHR.status == 500) {
		            msg = 'Internal Server Error [500].';
		        } else if (exception === 'parsererror') {
		            msg = 'Requested JSON parse failed.';
		        } else if (exception === 'timeout') {
		            msg = 'Time out error.';
		        } else if (exception === 'abort') {
		            msg = 'Ajax request aborted.';
		        } else {
		            msg = 'Uncaught Error.\n' + jqXHR.responseText;
		        }
		        console.log(msg);
		    }     
	    }); 
    }
});