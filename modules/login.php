<?php
$email 		= isset($_POST["email"]) 	? $_POST["email"] 		: false;
$password 	= isset($_POST["password"]) ? $_POST["password"] 	: false;

if (!$email || !$password) {
	echo "<h1>Falha ao acessar conta de usuário.</h1>";
	echo "<h2>Redirecionando em 3 segundos.</h2>";
	header("refresh:3;url=../register.php");
	exit();
}

include "connect.php";


$sql = "SELECT email, password FROM users WHERE email='{$email}'";

$result = $connection->query($sql);

if (!$result) {
	echo "<h1>Falha ao acessar conta de usuário.</h1>";
	echo "<h2>{$connection->error}</h2>";
} else {
	if ($row = $result->fetch_array()) {
		$hash = hash("sha256", $password);
		if ($hash == $row["password"]) {
			session_start();
			$_SESSION["is_logged"] = true;
			header("refresh:0;url=../index.php");
			exit();
		} else {
			echo "<h1>Senha incorreta para o usuário encontrado.</h1>";
			echo "<h2>Redirecionando para página de acesso em 3 segundos.</h2>";
			header("refresh:3;url=../login.php");
		}
	} else {
		echo "<h1>Usuário não encontrado no sistema.</h1>";
		echo "<h2>Redirecionando para página de acesso em 3 segundos.</h2>";
		header("refresh:3;url=../login.php");
	}
}
?>
