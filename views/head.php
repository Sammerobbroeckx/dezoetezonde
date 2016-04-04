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
				<a href="?pagina=home" class="navbar-brand">De Zoete Zonde</a>
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				
				<div class="collapse navbar-collapse navHeaderCollapse">
				
					<ul class="nav navbar-nav navbar-right">
					
						<li><a href="?pagina=home">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerechten<b class="caret"></b></a>
							
							<ul class="dropdown-menu">
								<li><a href="?pagina=ontbijt">ontbijten</a></li>
								<li><a href="?pagina=broodjes">broodjes en omeletten</a></li>
								<li><a href="?pagina=hap">de kleine hap</a></li>
								<li><a href="?pagina=belgisch">van Belgische makelij</a></li>
								<li><a href="?pagina=soep">soepen</a></li>
								<li><a href="?pagina=salade">salades en pasta's</a></li>
								<li><a href="?pagina=dessert">desserts</a></li>
							</ul>
						</li>
						<li><a href="#contact" data-toggle="modal">Contact</a></li>
						<li><a href="#login" data-toggle="modal">Login</a></li>
						
					</ul>
				
				</div>
			</div>
		</div>
		
		<div class="container-fluid">