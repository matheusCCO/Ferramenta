<?php
	session_start();
	
	function achaSessa($s,$con){
		$sql = "select codigo from usuarios where email = '$s'";
		$query = mysqli_query($con,$sql);
		$dado = mysqli_fetch_array($query,MYSQLI_BOTH);
		return $dado['codigo'];
		mysqli_free_result($query);
	}
	
	function validavinculacao($con, $idL, $s){
		$sql = "SELECT * FROM lendo WHERE idUser = '$s' and idLivros = '$idL'";
		$query = mysqli_query($con,$sql);
		$row = mysqli_num_rows($query);
		if($row >= 1){
			echo "<h1>Este livro ja esta na sua biblioteca</h1>";
			echo "<a href ='Home.php'>Voltar para o HOME</h1>";
		}
	}
	
	function VinculaLivroConta($con, $idL, $s){
		$sql = "insert into lendo(idUser, idLivros) values ('$s','$idL')";
		$query = mysqli_query($con,$sql);
		
		header('Location: Home.php');
	
	}
	
	include_once("conexao.php");
	
	$idLivro = $_GET['usuario'];
	$sessao = $_GET['sessao'];
	
	$sessao=achaSessa($sessao,$conexao);
	validaVinculacao($conexao,$idLivro,$sessao);
	VinculaLivroConta($conexao,$idLivro,$sessao);



	mysqli_close($conexao);
?>