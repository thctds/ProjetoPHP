
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Projetos em JavaScript!">
	  <meta name="keywords" content="projetos, JavaScript, JS, Jogos">
  	<meta name="author" content="Thiago Henrique">
    <title>Aulas Online</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='CHECKBK0.TTF' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/style.css">
  </head>
<body>

	 <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Aulas</span> <span id="bits">ONLINE</span></h1>
        </div>
         <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
			<li><a href="services.html">Aulas</a></li>
			<li><a href="materiais.html">Materiais</a></li>
            <li ><a href="about.html">Sobre Nos</a></li>
            <li  class="current" ><a href="login.html">Aluno</a></li>
          </ul>
        </nav>
      </div>
    </header>
	<?php

	include("conexao.php");

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if($sql = mysqli_query($conexao, "SELECT * FROM aluno  where login='$login' AND senha='$senha'")){
		echo "<h1>Bem vindo, '$login'</h16>";
	}else{
		echo "Login e senha incorretos";
	}

	

	?>
<footer>
      <p>Aulas Online, Copyright &copy; 2017</p>
    </footer>
	</body>
</html>
