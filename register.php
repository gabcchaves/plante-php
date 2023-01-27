<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastrar</title>
		<link rel="stylesheet" href="css/global.css">
		<link rel="stylesheet" href="css/register.css">
	</head>

	<body>
		<?php include "header.php"; ?>

		<div class="container-content">
			<h3>Cadastrar-se</h3>
			<hr>
			<form class="form-register" action="modules/register.php" method="POST">
				<input name="name" type="text" placeholder="Nome completo" required>
				<input name="email" type="email" placeholder="Endereço de e-mail" required>
				<input name="password" type="password" placeholder="Senha" required>
				<input type="password" placeholder="Confirmar senha" required>
				<input name="phone" type="tel" placeholder="Telefone" onkeypress="isNumberKey(event)" required>
				<input class="css-btn-dark" type="submit" value="Confirmar">
			</form>
			<small><a class="css-link-dark" href="">Já tem conta?</a></small>
		</div>

		<?php include "footer.php"; ?>
	</body>
</html>
