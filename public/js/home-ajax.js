function showFilms(films,film){
	$("#film").html("<h1>Films</h1>");
	$("#"+film).html("");
	for(var i=0; i < films.length; i++){ 
		$.get(films[i], function(data, status){
           $("#"+film).append("<p>" + data.title + "</p><br>");
    	});
    }
}

function getActor(number){
	
	var demo = "";
	$("#data_container").attr("number",number);
	var url = "https://swapi.co/api/people/"+ number;
    $.get(url, function(data, status){
        console.log(data);
        demo +=  data;

    },"json");
    
    if(demo != ""){
    	return demo;
    }else{
    	return "error";
    }
    
     
       
}

$("#add").click(function(){
	$("#show_data").html("Fetching Info...");
	$("#show_films").html("");
    var randomNumber =  Math.floor((Math.random() * 80 ) + 1);

    var results = getActor(randomNumber);
    
    console.log(results);

    return;
    var output = "";
    output += "<h1>Actor</h1><hr>";
	output += '<table class="table table-bordered"><thead>';
	output += '<tr><th>ID</th><th>Name</th><th>BirthYear</th><th>Gender</th><th>EyeColor</th><th>HairColor</th><th>Mass</th></tr></thead>';
	output += '<tbody><tr><td>'+ actor.id +'</td>';
	output += '<td>'+ actor.name +'</td>';
	output += '<td>'+ actor.birth_year +'</td>';
	output += '<td>'+ actor.gender +'</td>';
	output += '<td>'+ actor.eye_color +'</td>';
	output += '<td>'+ actor.hair_color +'</td>';
	output += '<td>'+ actor.mass +'</td><tbody></table>';
    
    $("#show_data").html(output);
    showFilms(actor.films,"show_films");
       
});
$("#pull").click(function(){
    $("#data_container").html("Showing All Films");
});
$("#save").click(function(){
    var id = $("#data_container").attr("number");
    if(id == undefined || id == ""){
    	alert("No Data To Save, First Fetch the data then try to save");
    }else{
    	$("#data_container").html(id);
    }
});