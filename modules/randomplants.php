<?php
include_once "connect.php";

$result = mysqli_query(
	$connection,
	"SELECT id, name, description, price, imagesource FROM plants
	ORDER BY RAND()
	LIMIT 8"
);

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
?>
