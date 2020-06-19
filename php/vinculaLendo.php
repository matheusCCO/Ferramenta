<?php
	$procura ="select id from livros where nomeLivro = '$nomeLivro'";
	$salve = mysqli_query($conexao, $procura);
	mysqli_close($conexao);
	$dado = mysqli_fetch_array($salve,MYSQLI_BOTH);
	$GLOBALS['id'] = $dado['id'];
?>