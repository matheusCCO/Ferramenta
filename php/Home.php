<?php
session_start();
include_once("conexao.php");

$logado = $_SESSION['email'];


$consulta = "SELECT codigo FROM usuarios where email = '$logado'";
$con      = mysqli_query($conexao, $consulta);
$dado = mysqli_fetch_array($con,MYSQLI_BOTH);
$codigo = $dado['codigo'];

mysqli_free_result($con);

?>
<!DOCTPYPE html>
<html>
	<head>
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/StyleHome.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
		

		<title>HOME</title>
	</head>

	<body>
		<nav  class="nav-pesquisa" >
			<form class="form-pesquisa" action="pesquisa.php" method = "post">
				<input type="text" id="input-barra" name="livro"></input>
				<input type="submit" value="Pesquisar" class="btn"></input>
			</form>
		</nav>
		<div class="container-fluid">
			<table class="table table-dark" style="border-radius: 5px;">
				<tr>
					<td>Identificador</td>
					<td>Nome</td>
					<td>Autor</td>
					<td>Paginas</td>
					<td>Ultima Lida</td>
					
				</tr>
			
				<?php 
					$sql = "SELECT * FROM livros INNER JOIN lendo ON lendo.idLivros = livros.id WHERE lendo.idUser =$codigo";
					$con      = mysqli_query($conexao, $sql);
					
					while($dado = mysqli_fetch_array($con,MYSQLI_BOTH)) { ?>
				<tr>
					<td><?php echo $dado['id']; ?></td>
					<td><?php echo $dado['nomeLivro']; ?></td>
					<td><?php echo $dado['nomeAutor']; ?></td>
					<td><?php echo $dado['paginas'] ?></td>
					<td><?php echo $dado['ultimaP'] ?></td>

				
				</tr>
		<?php } mysqli_free_result($con); ?>
			</table>
		<div class="container p-3 my-3 bg-primary text-white" style="text-align: center; border-radius: 5px;">
			<h4>Para atualizar a pagina do livro que esta lendo</h4>
			<h4>coloque o identificador do livro e a </h4>
			<h4>pagina que parou.</h4>
		</div>
			 <div class="container-fluid2">
				<form class="form-inline" action="atualiza.php" method="post">
				  <h4><label class="mr-sm-2">Identificador do Livro:</label></h4>
				  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Identicador" id="text" name="identidade" required>
				  <h4><label class="mr-sm-2">Pagina que parou:</label></h4>
				  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Pagina" id="text"  name="pag" required>

				  <button type="submit" class="btn btn-primary">Atualizar</button>
				</form>
			</div>
		</div>
		
		<footer>
		</footer>
	</body>
</html>