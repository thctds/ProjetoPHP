<?php
	include ("conexao.php");


	$id_aluno = $_POST['id_aluno'];
	$login = $_POST['login'];

	if($sql = mysqli_query($conexao, "UPDATE aluno SET login='$login' where id_aluno='$id_aluno'")){
		echo "Login alterado com sucesso! <br>";
		exit;
	}else{
		echo "Login ja existente no sistema";
	}




?>