<?php
	// function CountEvents()
	// {
		// global $link;
		
		// if ($result=mysqli_query($link, "SELECT * FROM evenement"))
		// {
			// $rowcount=mysqli_num_rows($result);
			// return $rowcount;
		// }
	// }
	
	//geeft een array terug van alle bestaande evenementen
	// function GetEventArray()
	// {
		// global $link;
		
		// $array;
		// $teller = 0;
		
		// $result = mysqli_query($link, "SELECT * FROM evenement");

		// if (mysqli_num_rows($result) > 0) 
		// {
			// while($row = mysqli_fetch_assoc($result)) 
			// {
				// $array[$teller][0] = $row["IDEvenement"];
				// $array[$teller][1] = $row["Naam"];
				// $array[$teller][2] = $row["Organisator"];
				// $array[$teller][3] = $row["MinLeeftijd"];
				// $array[$teller][4] = $row["MaxAanwezigen"];
				// $teller++;
			// }
		// }	
		// return $array;
	// }
	
	function Login($mail,$paswoord)
	{
		global $link;
		
		$mail = mysqli_real_escape_string($link, $mail);	
		$password = mysqli_real_escape_string($link, $paswoord);
		$password = hash("sha512", $password);
		
		$result = mysqli_query($link, "SELECT * FROM user WHERE mail='".$mail."'");
		
		$row = mysqli_fetch_assoc($result);
		
		if($mail == $row['mail'] && $password == $row['paswoord'])
		{
			unset($_SESSION['user']);
			$_SESSION['user'] = 1000;
		}
		else
		{
			unset($_SESSION['fout']);
			$_SESSION['fout'] = 'Login is fout!';
			exit();
		}
		mysqli_close($link);
		return true;
	}
?>