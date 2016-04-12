<?php 
require_once("../../usuario/banco-usuario.php");
require_once("../../dataSource/conecta.php");
require_once("logica-usuario.php");



$login = $_POST["login"];
$senha = $_POST["senha"];

$usuario = existeUsuario($conexao,$login,$senha);
$_SESSION["danger"] = $login."   -    ".$senha;
if($usuario == null){
	$_SESSION["danger"] = 	$_SESSION["danger"]."  Login ou Senha inválida - USUARIO ".$usuario["nome"];
	header("Location:/impchamado/login.php");
} else {
	logaUsuario($usuario);
	header("Location:/impchamado/buscaQuestionario.php");	
}
die();

?>