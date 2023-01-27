<?php

$connection = new mysqli(
	"localhost",
	"root",
	"keyak4r!!",
	"plantedb"
);

if ($connection->connect_error) {
	echo "Falha ao conectar ao MariaDB: (" . $connection->connect_errno . ") ";
	exit();
}
?>
