<?php
	include("conexao.php");

	$id_aluno = $_POST['id_aluno'];
	$login = $_POST['login'];

	if($sql = mysqli_query($conexao, "DELETE from aluno where id_aluno='$id_aluno';")){
		echo "Aluno excluido com sucesso!<br>";
			exit;
	}else{
		echo "Não foi possivel excluir";
	}

?>