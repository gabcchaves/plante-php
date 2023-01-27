<?php
session_start();
if (isset($_SESSION["is_logged"])) {
	echo "<h1>Usuário já está ativo.</h1>";
	header("refresh:2;url=index.php");
	exit();
}
?>
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
				<input name="email" type="email" placeholder="Endereço de e-mail" required>
				<input name="password" type="password" placeholder="Senha" required>
				<input class="css-btn-dark" type="submit" value="Entrar">
			</form>
			<small><a class="css-link-dark" href="register.php">Não tem conta?</a></small>
		</div>

		<?php include "footer.php" ?>
	</body>
</html>
