<?php 



function insereUsuario( $conexao, $login, $senha, $nome, $email, $perfil){
	$query = "INSERT INTO `usuario` ( `login`, `senha`, `nome`, `email`, `perfil`) VALUES ('${login}', '${senha}', '${nome}', '${email}', '${perfil}')";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;	
}

function existeUsuario($conexao,$login, $senha){

	$query = "select * from usuario where login = ${login} and senha = ${senha}";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}

function listaUsuarios($conexao) {
    $usuarios = array();
    $query = "select * from usuario";
    $resultado = mysqli_query($conexao, $query);

    while($usuario = mysqli_fetch_assoc($resultado)) {
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}

function apagarUsuario($conexao, $id){
    $query = "DELETE FROM usuario WHERE idLogin = '${id}'";
    $resultadoDoDelete = mysqli_query($conexao, $query);
    return $resultadoDoDelete;
}




?>