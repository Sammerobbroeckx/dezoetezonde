<?php
	session_start();
	include_once('controllers/linkdb.php');
	include_once('controllers/SqlFuncties.php');
?>
<!DOCTYPE html>
<html>
	<head>
		
		<title>De Zoete Zonde</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
        <!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" type="image/png" href="img/favicon.png">
        
        <!--Leaflet-->
        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
        <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
	</head>
	<body>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
				<a href="?pagina=home" class="navbar-brand"><p class="navbartext">De Zoete Zonde</p></a>
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				
				<div class="collapse navbar-collapse navHeaderCollapse">
				
					<ul class="nav navbar-nav navbar-right">
					
						<li><a href="?pagina=home"><p class="navbartext">HOME</p></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdowntext"><p class="navbartext">GERECHTEN<b class="caret"></p></b></a>
							
							<ul class="dropdown-menu">
								<li><a href="?pagina=ontbijt"><p class="navbardropdowntext">ONTBIJT</p></a></li>
								<li><a href="?pagina=broodjes"><p class="navbardropdowntext">BROODJES EN OMELETTEN</p></a></li>
								<li><a href="?pagina=hap"><p class="navbardropdowntext">DE KLEINE HAP</p></a></li>
								<li><a href="?pagina=belgisch"><p class="navbardropdowntext">VAN BELGISCHE MAKELIJ</p></a></li>
								<li><a href="?pagina=soep"><p class="navbardropdowntext">SOEPEN</p></a></li>
								<li><a href="?pagina=salade"><p class="navbardropdowntext">SALADES EN PASTA'S</p></a></li>
								<li><a href="?pagina=dessert"><p class="navbardropdowntext">DESSERTS</p></a></li>
							</ul>
						</li>
						<li><a href="?pagina=contact" data-toggle="modal"><p class="navbartext">CONTACT</p></a></li>
                        <li><a href="?pagina=info"><p class="navbartext">INFO</p></a></li>
						<li><a href="#login" data-toggle="modal"><p class="navbartext">LOGIN</p></a></li>					
					</ul>
				
				</div>
			</div>
		</div>
		
		<div class="container-fluid">