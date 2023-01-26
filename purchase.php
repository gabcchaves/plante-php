<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Comprar</title>
		<link rel="stylesheet" href="css/global.css">
		<link rel="stylesheet" href="css/purchase.css">
	</head>

	<body>
		<?php include "header.php"; ?>

		<form>
			<h3>Local de entrega</h3>
			<hr>
			<input type="text" placeholder="Cidade">
			<input type="text" placeholder="Estado">
			<input type="text" placeholder="Bairro">
			<input type="text" placeholder="Rua">
			<input type="number" placeholder="Nº">

			<h3>Pagamento</h3>
			<hr>
			<label for="ticket">Boleto</label>
			<input id="ticket" type="radio">
			<label for="pix">Pix</label>
			<input id="pix" type="radio">
	
			<input type="submit" value="Confirmar">
		</form>

		<?php include "footer.php"; ?>
	</body>
</html>
