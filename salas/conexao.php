<?php

$host = "localhost";
$usuario = "salas";
$senha = "salas";
$bd = "salas";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
	echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
	
?>