<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Entrar</title>
		<link rel="stylesheet" href="css/global.css">
		<link rel="stylesheet" href="css/login.css">
	</head>

	<body>
		<?php include "header.php"; ?>

		<div class="container-content">
			<h3>Entrar</h3>
			<hr>
			<form class="form-login" action="modules/login.php" method="POST">
				<input name="email" type="email" placeholder="Endereço de e-mail">
				<input name="password" type="password" placeholder="Senha">
				<input class="css-btn-dark" type="submit" value="Entrar">
			</form>
			<small><a class="css-link-dark" href="register.php">Não tem conta?</a></small>
		</div>

		<?php include "footer.php" ?>
	</body>
</html>
