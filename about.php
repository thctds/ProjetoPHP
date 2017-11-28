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
            <li class="current"><a href="about.html">Sobre Nos</a></li>
            <li><a href="#">Aluno</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Receba nossas novidades!</h1>
        <form>
          <input type="email" placeholder="eu@meuemail.com">
          <button type="submit" class="button_1">Inscreva-me</button>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Sobre o Projeto</h1>
		  <img id = "imagem" src="img/Logo.png" alt="Coletânea de BITS" height= '240px' width='240px'> </img>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna. Nam eget eros non orci consectetur congue at ac augue. Proin eget arcu in enim feugiat ultricies. Curabitur maximus metus nec metus pretium viverra at et orci. Integer hendrerit ante ut placerat cursus.
          </p>
          <p class="dark">
Aliquam eget pharetra diam. Nulla placerat lorem at turpis tempor, vel ultrices dui tincidunt. Proin quis egestas lorem. Mauris vehicula lectus odio, sit amet dictum justo feugiat a. Praesent id dictum lacus. Sed ullamcorper id erat ut dictum. Fusce porttitor lorem sapien, in aliquet sapien convallis et. Donec nec mauris nulla. Curabitur cursus semper odio, et hendrerit ante. Nunc at cursus ante. Maecenas gravida ligula ut efficitur suscipit. Nulla id turpis varius, pretium nunc sed, fermentum sem. Sed lacinia nunc non interdum pellentesque.
          </p>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Fale Conosco!</h3>
            <form action="about.php" method="post" class="quote">
  						<div>
  							<label>Nome:</label><br>
  							<input type="text" name="name" placeholder="Seu Nome Aqui">
  						</div>
  						<div>
  							<label>Email:</label><br>
  							<input type="email" placeholder="Seu Email Aqui">
  						</div>
  						<div>
  							<label>Mensagem:</label><br>
  							<textarea name="message" placeholder="Mensagem"></textarea>
  						</div>
  						<button class="button_1" type="submit">Enviar</button>
					</form>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Aulas Online, Copyright &copy; 2017</p>
    </footer>
  </body>
</html>


<?php
  $para = "meusite@sac.br";
  $nome = $_POST["name"];
  $mensagem = $_POST["message"];


  if(mail($para, $nome, $mensagem)){
  echo "mensagem enviada com sucesso";
}
  else{
  echo "Falha no envio da mensagem!";
}
?>