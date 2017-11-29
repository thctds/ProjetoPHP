<?php
include_once("conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$result = mysql_query("SELECT * FROM `aluno` WHERE `login` = '$login' AND `senha`= '$senha'");

if(mysql_num_rows ($result) > 0 )
	{
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	header('location:site.php');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	echo "Login e senha incorretos";
	header('location:login.html');
	
	}
?>
