<?php
$name 		= isset($_POST["name"]) 	? $_POST["name"] 		: false;
$email 		= isset($_POST["email"]) 	? $_POST["email"] 		: false;
$password 	= isset($_POST["password"]) ? $_POST["password"] 	: false;
$phone 		= isset($_POST["phone"]) 	? $_POST["phone"]		: false;

if (!$name || !$email || !$password || !$phone) {
	echo "<h1>Falha ao cadastrar usuário.</h1>";
	echo "<h2>Redirecionando em 3 segundos.</h2>";
	sleep(3);
	ob_start();
	header("Location: ../register.php");
	ob_end();
	exit();
}

include "connect.php";

$password = hash("sha256", $password);
$sql = "INSERT INTO users (name, email, password, phone)
	VALUES ('{$name}', '{$email}', '{$password}', {$phone})";

if ($connection->query($sql) === TRUE) {
	session_start();
	$_SESSION["is_logged"] = true;
	echo "<h1>Usuário cadastrado com sucesso.</h1>";
	echo "<h2>Redirecionando para página inicial em 3 segundos.</h2>";
	header("refresh:5;url=../index.php");
	exit();
} else {
	echo "<h1>Falha ao cadastrar usuário.</h1>";
	echo "<h2>Redirecionando para página de cadastro em 3 segundos.</h2>";
	echo "<h3>{$connection->error}</h3>";
	exit();
}

$connection->close();
?>
