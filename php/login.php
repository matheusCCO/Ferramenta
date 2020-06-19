<?php
session_start();
include_once("conexao.php");


if (empty($_POST['login']) || empty($_POST['senha'])){
	header('Location: PaginaDeLogin.php'); 
	exit();
}
$email = mysqli_real_escape_string($conexao,$_POST['login']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select codigo, email from usuarios where email = '{$email}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);


if(	$row ==1){
	$_SESSION['email']=$email;
	header('Location: Home.php');
	exit();
} else{
	$_SESSION['nao_autenticado'] =true;
	header('Location: PaginaDeLogin.php');
}
//*vinicius.cassol@uniritter.edu.br
?> 
