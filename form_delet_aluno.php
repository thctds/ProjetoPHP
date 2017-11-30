<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php  
include ("conexao.php");

		$id_aluno = $_GET['id_aluno'];

		$sql = mysqli_query($conexao, "SELECT * FROM aluno where id_aluno='$id_aluno' ");

		$exibe = mysqli_fetch_assoc($sql);

	?>
	<form action="delete.php" method="post">
                <fieldset><legend>Deletar aluno</legend>
                	
                <input type="hidden" name="id_aluno" value="<?php echo $exibe["id_aluno"]; ?>">
               
                <br>Login: <input type="text" name="login" value="<?php echo $exibe["login"]; ?>" />
              
              	<input type="submit" name="" value="Deletar">

              	</fieldset>
	</form>
</body>
</html>