<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Piekarnia Fredek - Składanie zamówienia</title>
</head>
<body>
	<h2>Piekarnia Fredek - Formularz zamówienia online</h2>
	<form action="order.php" method="post">
		<h4>Ilość chlebów (3,80zł/szt.):</h4>
		<input type="number" name="il_chlebow" value=0 required>
		<h4>Ilość bułek (0,70zł/szt.):</h4>
		<input type="number" name="il_bulek" value=0 required>
		<h4>Ilość pączków (2,70zł/szt.):</h4>
		<input type="number" name="il_paczkow" value=0 required>
		<h4>Ilość drożdżówek (3,30zł/szt.):</h4>
		<input type="number" name="il_drozdzowek" value=0 required>
		<br /><br />
		<input type="submit" value="Wyślij zamówienie">
	</form>
</body>
</html>