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
	
	//geeft een array terug van alle soepen
	function GetSoepen()
	{
		global $link;
			
		$array;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM soepen");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDsoepen"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle salades en pasta's
	function GetSaladesEnPastas()
	{
		global $link;
			
		$array;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM salades");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDsalades"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle ontbijten
	function GetOntbijt()
	{
		global $link;
			
		$array;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM ontbijt");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDontbijt"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle belgische makelij
	function GetMakelij()
	{
		global $link;
			
		$array;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM makelij");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDmakelij"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle broodjes
	function GetBroodjes()
	{
		global $link;
			
		$array;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM broodjes");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDbroodjes"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//geeft een array terug van alle kleine hapjes
	function GetKleineHapjes()
	{
		global $link;
			
		$array;
		$teller = 0;
			
		$result = mysqli_query($link, "SELECT * FROM kleinehap");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDkleineHap"];
				$array[$teller][1] = $row["omschrijving"];
				$array[$teller][2] = $row["prijs"];
				$teller++;
			}
		}	
		return $array;
	}
	
	//functie om in te loggen
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
			return true;
		}
		else
		{
			unset($_SESSION['fout']);
			$_SESSION['fout'] = 'Login is fout!';
			return false;
		}
		mysqli_close($link);
	}
?>