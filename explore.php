<?php
?>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Plantê - Explorar</title>
		<link rel="stylesheet" href="css/global.css">
		<link rel="stylesheet" href="css/explore.css">
	</head>

	<body>
		<?php include "header.php"; ?>

		<div class="container-content">
			<div class="sidebar">
				<h3>Ornamentais</h3>
				<input type="button" value="Cactus">
				<input type="button" value="Rosas do deserto">
				<input type="button" value="Palmeiras">
			</div>

			<div class="container-filter-menu">
				<button id="btn-filter-menu"><img class="css-icon-dark" src="img/bx-filter-alt.svg"
	alt="Filtrar."></button>
			</div>

			<div id="container-results">
				<?php //TODO ?>
				Something to hold place here.
			</div>
		</div>

		<?php include "footer.php"; ?>
	</body>
</html>
