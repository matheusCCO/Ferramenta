<?php
session_start();

?>
<!DOCTPYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/StylePaginaDeLogin.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<title>Login</title>
	</head>
	<body>
		
		<div class="divLogin" >
			<h1 style="text-align: center;"> Acesse sua conta</h1>
			<?php
				if(isset($_SESSION['nao_autenticado'])):
			?>
			<p class="alert alert-danger">ERRO:Email ou senha invalidos.</p>
			<?php
				endif;
				unset($_SESSION['nao_autenticado']);
			?>
			<form action="login.php" method ="POST">
				<label for="email">E-mail</label><br>
				<input class="form-control" type="email" id="login" name="login" ><br>
				<label for="password">Senha</label><br>
				<input class="form-control" type="password" id="senha" name="senha"><br>
				<input type="submit" value="Login" class="btn btn-success"><br>
				<div id="div1">
					<a href="RecuperarSenha.html">Esqueci minha senha</a><br>
				</div>
				<div id="div2">
					<a href="../Cadastro.html">Não possui um conta? Cadasdre-de</a><br>
				</div>
			</form>
		</div>
	</body>
</html>