<?php

include("conexao.php");

$login = $_POST["login"];
$senha = sha1($_POST["senha"]);

if(empty($login) or empty($senha)){
	echo "Erro! Preencha todos os campos";
	exit;
}else{
	if (mysqli_query($conexao, "INSERT INTO aluno (login, senha) VALUES ('$login', '$senha')")) {
		echo "Cadastro realizado com sucesso";
		exit;
	}else{
		echo "Login ja está cadastrado no sistema";
		
	}
}

?>
