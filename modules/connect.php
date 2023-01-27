<?php
$server = "localhost";
$username = "root";
$password = "keyak4r!!";
$database = "plantedb";
$port = "3306";

$connection = mysqli_connect($sever, $username, $password, $database, $port);

if ($connection->connect_errno) {
	echo "Falha ao conectar ao MariaDB: (" . $connection->connect_errno . ") ";
}

mysqli_set_charset($connection, "utf-8");
?>
