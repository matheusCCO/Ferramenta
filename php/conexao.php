<?php
$hostname= "localhost";
$user = "root";
$password = "";
$database ="cadastro";
$conexao =mysqli_connect($hostname,$user,$password,$database);
  if(!$conexao){
        die("Falha na conexao: " . mysqli_connect_error());
    }
?>
