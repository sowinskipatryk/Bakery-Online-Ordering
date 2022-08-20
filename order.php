<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Piekarnia Ferdek - Podsumowanie zamówienia</title>
</head>
<body>
<div style="padding: 20px 0px 0px 20px;">
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

<h2 class="pb-3">Piekarnia Ferdek - Podsumowanie zamówienia</h2>

<table border="1" cellspacing="0" cellpadding="10" class="table mt-4" style="width:30%;">
<tr class="table-primary">
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

<h3 class="pt-3"> Razem: $razem zł <h3> 

END;

?>

<form action="confirmation.php">
<input type="submit" value="Potwierdź zamówienie" class="btn btn-primary mt-4">
</form>
</div>

</body>
</html>
