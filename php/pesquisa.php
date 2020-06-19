<?php
session_start();
include("conexao.php"); // caminho do seu arquivo de conexão ao banco de dados

$logado = $_SESSION['email'];
$livro = $_POST['livro'];

$consulta = "SELECT * FROM livros where nomeLivro = '$livro'";
$con      = mysqli_query($conexao, $consulta);
$row = mysqli_num_rows($con);
if($row == 0){
	header('Location: ../CadastraLivro.html');
	
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <title>Tutorial</title>
</head>
<body>
<div class="container-fluid">
  <table class="table table-dark" style="border-radius: 5px;">
    <tr>     
      <td>Nome</td>
      <td>Autor</td>
      <td>Numero de Paginas</td>
      <td>Ação</td>
    </tr>
    <?php while($dado = mysqli_fetch_array($con,MYSQLI_BOTH)) { ?>
    <tr>
      <td><?php echo $dado['nomeLivro']; ?></td>
      <td><?php echo $dado['nomeAutor']; ?></td>
      <td><?php echo $dado['paginas'] ?></td>
      <td>
	  
        <a href="vincula.php?p=vincula&usuario=<?php echo $dado['id']; ?>&sessao=<?php echo $logado; ?>">Acicionar</a>
        
      </td>
    </tr>
    <?php } mysqli_free_result($con); ?>
	
  </table>
  </div>
</body>
</html>