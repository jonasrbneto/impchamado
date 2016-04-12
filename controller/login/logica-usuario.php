<?php 
session_start();

function verificaUsuario(){
	if(!usuarioEstaLogado()){
		$_SESSION["danger"] = "Usuario não é permitido acessar adiciona produtos";
		header("Location: index.php");
		die();
	}
}

function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}

function logaUsuario($usuario){
	$_SESSION["usuario_logado"] = $usuario;
}

function logout(){
	session_destroy();
	session_start();
}
?>
