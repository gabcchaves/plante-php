<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Entrar</title>
		<link rel="stylesheet" href="css/global.css">
		<link rel="styleshet" href="css/login.css">
	</head>

	<body>
		<?php include "header.php"; ?>

		<div class="container-content">
			<h1>Entrar</h1>
			<hr>
			<form action="modules/login.php" method="POST">
				<input name="email" type="email" placeholder="Endereço de e-mail">
				<input name="password" type="password" placeholder="Senha">
				<input type="submit" value="Entrar">
			</form>
			<small><a href="">Não tem conta?</a></small>
		</div>

		<?php include "footer.php" ?>
	</body>
</html>
