<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastrar</title>
		<link rel="stylesheet" href="css/global.css">
		<link rel="stylesheet" href="css/register.css">
	</head>

	<body>
		<?php include "header.php"; ?>

		<h1>Cadastrar-se</h1>
		<hr>
		<form action="modules/register.php" method="POST">
			<input name="name" type="text" placeholder="Nome completo">
			<input name="email" type="email" placeholder="Endereço de e-mail">
			<input name="password" type="password" placeholder="Senha">
			<input type="password" placeholder="Confirmar senha">
			<input name="phone" type="tel" placeholder="Telefone">
			<input type="submit" value="Confirmar">
		</form>
		<small><a href="">Já tem conta?</a></small>

		<?php include "footer.php"; ?>
	</body>
</html>
