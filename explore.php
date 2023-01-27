<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Plantê - Explorar</title>
		<link rel="stylesheet" href="css/global.css">
		<link rel="stylesheet" href="css/explore.css">
	</head>

	<body id="page-explore">
		<?php include "header.php"; ?>

		<div class="container-content">
			<div class="sidebar">
				<h3>Ornamentais</h3>
				<input id="btn-set-plant-category-flowers" type="button" value="Flores">
				<input id="btn-set-plant-category-cacti" type="button" value="Cactos">
				<input id="btn-set-plant-category-palmtrees" type="button" value="Palmeiras">
			</div>

			<div class="container-filter-menu">
				<button id="btn-filter-menu"><img class="css-icon-dark" src="img/bx-filter-alt.svg"
	alt="Filtrar."></button>
			</div>

			<div id="container-results">
				<?php include "modules/randomplants.php"; ?>
			</div>
		</div>

		<?php include "footer.php"; ?>
	</body>
</html>
