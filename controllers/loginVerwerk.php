<?php
	session_start();
	include_once('linkdb.php');
	
	$mail = mysqli_real_escape_string($link, $_POST['mail']);	
	$password = mysqli_real_escape_string($link, $_POST['paswoord']);
	$password = hash("sha512", $password);
	
	$result = mysqli_query($link, "SELECT * FROM user WHERE mail='".$mail."'");
	
	$row = mysqli_fetch_assoc($result);
	
	if($mail == $row['mail'] && $password == $row['paswoord'])
	{
		unset($_SESSION['user']);
		$_SESSION['user'] = 1000;
		$_SESSION['ID']=$row['userID'];
		header('Location: ../inTeStellen.php');
		exit();
	}
	else
	{
		unset($_SESSION['fout']);
		$_SESSION['fout'] = 'Login is fout!';
		header('Location: ../index.php');
		exit();
	}
mysqli_close($link);
?>