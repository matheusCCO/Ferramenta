<?php
include_once("conexao.php");

$identidade = $_POST['identidade'];
$pag = $_POST['pag'];

$sql = "UPDATE lendo SET ultimaP = $pag WHERE id = '$identidade'";

$query = mysqli_query($conexao,$sql);

header('Location:Home.php');


?>