<?php
	session_start();
	include_once("conexao.php");
	
	$logado = $_SESSION['email'];
	
	$nomeLivro = $_POST['nomeLivro'];
	$nomeAutor = $_POST['nomeAutor'];
	$paginas = $_POST['paginas'];

	$inserir = "INSERT INTO livros (nomeLivro, nomeAutor, paginas) values ('$nomeLivro','$nomeAutor','$paginas')";
	$salve = mysqli_query($conexao, $inserir);
	
	
	
	$procura ="select id from livros where nomeLivro = '$nomeLivro'";
	$salve = mysqli_query($conexao, $procura);
	mysqli_close($conexao);
	$dado = mysqli_fetch_array($salve,MYSQLI_BOTH);
	
	
	mysqli_free_result($salve);
	
	function VinculaLivroConta($con, $idL, $s){
		$sql = "insert into lendo(idUser, idLivros) values ('$s','$idL')";
		$query = mysqli_query($con,$sql);
		
		header('Location: Home.php');
	
	}
	
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="t~" href="cadastralivros.php">
		<link rel="stylesheet" type="t~" href="php/js/ValidacoesTelaCadastro.js">
		<script src="js/jquery-3.5.0.min.js"></script>
		<script src="js/adiciona.js"></script>
		<title>Adiciona</title>
	</head>
	
	<body>
<div class="container p-3 my-3 bg-primary text-white" style="border-radius: 5px; text-align: center;">
			<div class="container p-3 my-3 bg-primary text-white" style="border-radius: 5px; text-align: center">
			<h1>O livro foi adicionado a nossa base de dados com sucesso</h1>
			<h4>Para vincula-lo a sua biblioteca clique em adicionar </h4>
			
			<a href="vincula.php?p=vincula&usuario=<?php echo $dado['id']; ?>&sessao=<?php echo $logado; ?>" class="btn btn-info" role="button">Adicionar</a>
			<button class="btn btn-info" href = "Home.php">Voltar para a Home</button>
		</div>
		
		<footer>
		</footer>
	</body>
</html>