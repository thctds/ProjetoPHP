
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	include("conexao.php");

	$sql = mysqli_query($conexao, "SELECT * FROM aluno");

	while ($exibe = mysqli_fetch_assoc($sql)):
			echo "<a href='form_edit_aluno.php?&id_aluno=". $exibe['id_aluno']. "'>Editar</a> | ";
			echo "". $exibe["id_aluno"] . " | "."";
			echo utf8_encode($exibe["login"] . " | "."");
			echo "<a href='form_delet_aluno.php?&id_aluno=". $exibe['id_aluno']."'>Excluir/><br>";
	endwhile;
	
?>
</body>
</html>
