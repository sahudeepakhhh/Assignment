<!DOCTYPE html>
<html>
<head>
	<title>Laravel Application on Star War</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css\home.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    	
     <div class="container" style="margin-top: 50px;">
     	
 	     @yield('content')
        
     </div> 
 <script type="text/javascript" src="js\home-ajax.js"></script>
</body>
</html>