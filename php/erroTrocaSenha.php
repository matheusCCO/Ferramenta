<!DOCTPYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="StylePaginaResgateSenha.css">
		<title>Resgate de senha</title>
	</head>
	
	<body>
		<div class="divResgate">
		<?php
		
			if($row == 0){
		?>		
		<h5>cEmail informado não existe no banco de dados</h5>
			<?php
			}
			?>
			<h6><a href="RecuperarSenha.html">Voltar</a></h6>
			<h6><a href="PaginaDeLogin.html">Login</a></h6>
		</div>
	
	</body>
	
	
	
</html>