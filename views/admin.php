<?php
	include_once("views/adminHead.php");
	
	if(isset($_POST["nieuw"]))
	{
		if(VoegGerechtToe($_POST["omschrijving"], $_POST["prijs"], $_POST["nieuw"]))
		{
			echo "SUCCESVOL!";
		}
	}
	
	if(isset($_POST["id"]) && isset($_GET["gerecht"]))
	{
		if(VerwijderGerecht($_GET["gerecht"], $_POST["id"]))
		{
			echo "SUCCESVOL!";
		}
		else
		{
			echo "FOUT";
		}
	}
?>

<form method="POST" action="?pagina=admin">
	<select name="nieuw" required>
		<option value="ontbijt" selected>ontbijten</option>
		<option value="broodjes">broodjes en omeletten</option>
		<option value="kleineHap">de kleine hap</option>
		<option value="makelij">van Belgische makelij</option>
		<option value="soepen">soepen</option>
		<option value="salades">salades en pasta's</option>
		<option value="dessert">desserten</option>
	</select>
	
	<input type="text" name="omschrijving" placeholder="omschrijving van het product" required></input>
	<input type="number" name="prijs" placeholder="prijs van het product" required></input>
	<input type="submit" value="Voeg Toeg!"></input>
</form>

<h3>Een gerecht verwijderen</h3>
<br>
<h4>ontbijten</h4>
<?php
	echo maakTabelForm(GetOntbijt(), "ontbijt");
?>
<h4>broodjes en omeletten</h4>
<?php
	echo maakTabelForm(GetBroodjes(), "broodjes");
?>
<h4>de kleine hap</h4>
<?php
	echo maakTabelForm(GetKleineHapjes(), "kleinehap");
?>
<h4>van Belgische makelij</h4>
<?php
	echo maakTabelForm(GetMakelij(), "makelij");
?>
<h4>soepen</h4>
<?php
	echo maakTabelForm(GetSoepen(), "soepen");
?>
<h4>salades en pasta's</h4>
<?php
	echo maakTabelForm(GetSaladesEnPastas(), "salades");
?>
<h4>desserten</h4>
<?php
	echo maakTabelForm(GetDessert(), "dessert");
?>