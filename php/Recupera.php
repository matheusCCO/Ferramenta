<?php
	include_once("conexao.php");
	
	
		
		$email =mysqli_real_escape_string($conexao,$_POST['email']);
		
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$error[] = "E-mail invalido";
		}
		$query2 = "select codigo, email from usuarios where email = '$email'";
		
		$resulta = mysqli_query($conexao, $query2);
		
		$row = mysqli_num_rows($resulta);

		if($row == 0){
			header('Location: erroTrocaSenha.html');
			
		}
		
		if($row>0){
			$novasenha = substr(md5(time()), 0,6);
			$nsCriptogragada = md5(md5($novasenha));
			echo $novasenha;
			//if(mail($email, "Sua nova senha", "Sua nova senha". $novasenha)){
				$code = "UPDATE usuarios SET senha = '$nsCriptogragada' where email ='$email'";
			
				$query = mysqli_query($conexao,$code);
				header('Location: senhaTrocada.html');
			
		}
	


?><h6><a href="RecuperarSenha.html">Voltar</a></h6>
<h6><a href="PaginaDeLogin.html">Login</a></h6>