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
	</head>
	<body>
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
					
						<li><a href="?pagina=home"><p class="navbartext">Home</p></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class="navbartext">Gerechten<b class="caret"></p></b></a>
							
							<ul class="dropdown-menu">
								<li><a href="?pagina=ontbijt"><p class="navbardropdowntext">ontbijten</p></a></li>
								<li><a href="?pagina=broodjes"><p class="navbardropdowntext">broodjes en omeletten</p></a></li>
								<li><a href="?pagina=hap"><p class="navbardropdowntext">de kleine hap</p></a></li>
								<li><a href="?pagina=belgisch"><p class="navbardropdowntext">van Belgische makelij</p></a></li>
								<li><a href="?pagina=soep"><p class="navbardropdowntext">soepen</p></a></li>
								<li><a href="?pagina=salade"><p class="navbardropdowntext">salades en pasta's</p></a></li>
								<li><a href="?pagina=dessert"><p class="navbardropdowntext">desserts</p></a></li>
							</ul>
						</li>
						<li><a href="#contact" data-toggle="modal"><p class="navbartext">Contact</p></a></li>
						<li><a href="#login" data-toggle="modal"><p class="navbartext">Login</p></a></li>
						
					</ul>
				
				</div>
			</div>
		</div>
		
		<div class="container-fluid">