
<?php

include_once("conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "INSERT INTO aluno (login, senha) VALUES ('$nome', 'senha')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if($linhas ==1){
			print "Cadastro efetuado com sucesso";
		}else{
			print "Cadastro nao efetuado. <br>Ja existe um login registrado";
		}
	?>

</body>
</html>