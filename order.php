<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Piekarnia Fredek - Podsumowanie zamówienia</title>
</head>
<body>
<?php

	$il_chlebow = $_POST['il_chlebow'];
	$il_bulek = $_POST['il_bulek'];
	$il_paczkow = $_POST['il_paczkow'];
	$il_drozdzowek = $_POST['il_drozdzowek'];
	
	$koszt_chlebow = number_format(3.80*$il_chlebow, 2);
	$koszt_bulek = number_format(0.70*$il_bulek, 2);
	$koszt_paczkow = number_format(2.70*$il_paczkow, 2);
	$koszt_drozdzowek = number_format(3.30*$il_drozdzowek, 2);
	
	$razem = number_format($koszt_chlebow + $koszt_bulek + $koszt_paczkow + $koszt_drozdzowek, 2);
	
echo<<<END

<h2>Piekarnia Fredek - Podsumowanie zamówienia</h2>

<table border="1" cellspacing="0" cellpadding="10">
<tr>
	<td>Wyrób</td>
	<td>Cena jedn.</td>
	<td>Ilość</td>
	<td>Razem</td>
</tr>
<tr>
	<td>Chleb</td>
	<td>3.80 zł</td>
	<td>$il_chlebow szt.</td>
	<td>$koszt_chlebow zł</td>
</tr>
<tr>
	<td>Bułka</td>
	<td>0.70 zł</td>
	<td>$il_bulek szt.</td>
	<td>$koszt_bulek zł</td>
</tr>
<tr>
	<td>Pączek</td>
	<td>2.70 zł</td>
	<td>$il_paczkow szt.</td>
	<td>$koszt_paczkow zł</td>
</tr>
<tr>
	<td>Drożdżówka</td>
	<td>3.30 zł</td>
	<td>$il_drozdzowek szt.</td>
	<td>$koszt_drozdzowek zł</td>
</tr>
</table>

<h3> Razem: $razem zł <h3> 

END;

?>

<form action="confirmation.php">
<input type="submit" value="Potwierdź zamówienie">
</form>

</body>
</html>
