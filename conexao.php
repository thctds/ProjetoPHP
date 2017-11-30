<?php

$server = "localhost";
$banco = "bank";
$usuario = "root";
$senha = "";

$conexao = mysqli_connect('localhost','root','','bank');



if(!$conexao){
	echo mysqli_error(); exit();
}



?>