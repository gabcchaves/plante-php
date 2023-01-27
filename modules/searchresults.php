<?php
include_once "connect.php";

if (isset($_POST["name"])) {
	$sql = "SELECT id, name, description, price, category, imagesource FROM plants WHERE name='{$_POST["name"]}'";
	$result = $connection->query($sql);
	while ($row = $result->fetch_array()) {
		$id = $row["id"];
		$name = $row["name"];
		$description = $row["description"];
		$price = $row["price"];
		$imagesource = $row["imagesource"];

		echo "<div class='card-plant'>
			<img src='" . $imagesource . "' alt='Imagem.'>"
			. "<strong>" . $name . "</strong>"
			. "<p>" . $description . "</p>"
			. "<strong>R$ " . number_format($price, 2) . "</strong>"
			. "<a href='plant.php?id=" . $id . "'></a>"
		. " </div>";
	}
} else {
	$sql = "SELECT id, name, description, price, category, imagesource FROM plants WHERE category='{$_POST["category"]}'";
	$result = $connection->query($sql);


	while ($row = $result->fetch_array()) {
		$id = $row["id"];
		$name = $row["name"];
		$description = $row["description"];
		$price = $row["price"];
		$imagesource = $row["imagesource"];

		echo "<div class='card-plant'>
			<img src='" . $imagesource . "' alt='Imagem.'>"
			. "<strong>" . $name . "</strong>"
			. "<p>" . $description . "</p>"
			. "<strong>R$ " . number_format($price, 2) . "</strong>"
			. "<a href='plant.php?id=" . $id . "'></a>"
		. " </div>";
	}
}
?>
