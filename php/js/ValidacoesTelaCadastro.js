function salidaSenha() {
  var x = document.forms["cas"]["senha"].value;
  var y = document.forms["cas"]["confirmacao"].value;
  if (x != y) {
    alert("Senha e confiramacão de senha tem q ser iguais.");
    return false;
	}
}

function camposBanco(){
	var nomeLivro=document.forms["cadastaLivro"]["nomeLivro"].value;;
	var nomeAutor=document.forms["cadastaLivro"]["nomeAutor"].value;
	int paginas=document.forms["cadastaLivro"]["paginas"].value;
	
	if(nomeLivro ==""){
		alert("Digite o nome do Livro");
		return false;
	}
	if(nomeAutor ==""){
		alert("Digite o nome do Autor");
		return false;
	}
	if(paginas == ""){
		alert("Digite o numero de Paginas");
		return false;
	}
}