<?php
if (isset($_GET["id"])) {
	include_once "modules/connect.php";

	$result = mysqli_query(
		$connection,
		"SELECT name, description, price, quantity, imagesource FROM plants
		WHERE id=".$_GET["id"]
	);

	if ($row = $result->fetch_array()) {
		$name = $row["name"];
		$description = $row["description"];
		$price = $row["price"];
		$quantity = $row["quantity"];
		$imagesource = $row["imagesource"];
	}
} else {
	ob_start();
	header("Location: index.php");
	ob_end();
	die();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?= $name ?></title>
		<link rel="stylesheet" href="css/global.css">
		<link rel="stylesheet" href="css/plant.css">
	</head>

	<body>
		<?php include "header.php"; ?>

		<div class="container-content">
			<div class="preview-plant">
				<img src=<?= $imagesource ?>>
			</div>
			<div class="info-plant">
				<h3><?= $name ?></h3>
				<p><?= $description ?></p>
				<p>Quantidade em estoque: <strong><?= $quantity ?></strong></p>
				<p>Preço: <strong><?= $price ?></strong</p>
				<form action="purchase.php" method="POST">
					<input type="number" placeholder="Qtd." onkeypress="return isNumberKey(event)">
					<input class="css-btn-dark" type="submit" value="Adicionar ao carrinho">
				</form>
			</div>
		</div>

		<?php include "footer.php"; ?>
	</body>
</html>
