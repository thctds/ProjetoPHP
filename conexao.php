<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";
$database = "bank";

$conexao = mysqli_connect("$hostname, $usuario, $senha, $database");

if(!conexao){
	echo "Falha na conexão com o banco de dados";
}



?>