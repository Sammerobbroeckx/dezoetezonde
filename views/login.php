<?php
	if (isset($_POST['mail']))
	{
		if (Login($_POST['mail'],$_POST['paswoord']))
		{
			echo '<meta http-equiv="refresh" content="0; url=?pagina=admin" />';
		}
	}
?>


<form method="post" action="?pagina=login">
	<input type="text" name="mail" placeholder="naam@mail.com" required></input><br>
	<input type="password" name="paswoord" placeholder="wachtwoord" required></input><br>
	<input type="submit" value="Log in"></input><br>
</form>