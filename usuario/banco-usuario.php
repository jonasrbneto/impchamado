<?php 



function insereUsuario( $conexao, $login, $senha, $nome, $email, $perfil){
	$query = "INSERT INTO `usuario` ( `login`, `senha`, `nome`, `email`, `perfil`) VALUES ('${login}', '${senha}', '${nome}', '${email}', '${perfil}')";
	$resultadoDaInsercao = mysqli_query($conexao, $query);	
}

function existeUsuario($conexao,$login, $senha){

	$query = "select * from usuario where login = ${login} and senha = ${senha}";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}





?>