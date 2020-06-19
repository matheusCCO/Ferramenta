<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confimarSenha = $_POST['confirmacao'];
$sql = "INSERT INTO usuarios (nome, sobrenome, email, senha) values ('$nome','$sobrenome','$email','$senha')";

$salvar = mysqli_query($conexao,$sql);


mysqli_close($conexao);
header('Location: PaginaDeLogin.php');
?>