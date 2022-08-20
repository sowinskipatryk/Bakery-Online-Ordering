<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Piekarnia Ferdek - Składanie zamówienia</title>
</head>
<body>
	<div style="padding: 20px 0px 0px 20px;">
	<h2 class="pb-2">Piekarnia Ferdek - Formularz zamówienia online</h2>
	<form action="order.php" method="post">
		<h5 class="pt-4">Ilość chlebów (3,80zł/szt.):</h5>
		<input type="number" class="form-control" style="width:20%;" name="il_chlebow" value=0 required>
		<h5 class="pt-4">Ilość bułek (0,70zł/szt.):</h5>
		<input type="number" class="form-control" style="width:20%;" name="il_bulek" value=0 required>
		<h5 class="pt-4">Ilość pączków (2,70zł/szt.):</h5>
		<input type="number" class="form-control" style="width:20%;" name="il_paczkow" value=0 required>
		<h5 class="pt-4">Ilość drożdżówek (3,30zł/szt.):</h5>
		<input type="number" class="form-control mb-3" style="width:20%;" name="il_drozdzowek" value=0 required>
		<input type="submit" class="btn btn-primary mt-4" value="Złóż zamówienie">
	</form>
	</div>
</body>
</html>
