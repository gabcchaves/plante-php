<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Comprar</title>
		<link rel="stylesheet" href="css/global.css">
		<link rel="stylesheet" href="css/purchase.css">
	</head>

	<body>
		<?php include "header.php"; ?>

		<div class="container-content">
			<form action="modules/purchase.php" method="POST">
				<h3>Local de entrega</h3>
				<hr>
				<input name="city" type="text" placeholder="Cidade">
				<input name="state" type="text" placeholder="Estado">
				<input name="district" type="text" placeholder="Bairro">
				<input name="street" type="text" placeholder="Rua">
				<input name="number" type="number" placeholder="Nº">

				<h3>Pagamento</h3>
				<hr>
				<label for="ticket">Boleto</label>
				<input id="ticket" type="radio">
				<label for="pix">Pix</label>
				<input id="pix" type="radio">
		
				<input type="submit" value="Confirmar">
			</form>
		</div>

		<?php include "footer.php"; ?>
	</body>
</html>
