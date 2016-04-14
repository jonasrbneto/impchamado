<?php

include("dataSource/conecta.php");

// Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
	header("Location: index.php"); exit;
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

// Valida��o do usu�rio/senha digitados
$sql = "SELECT idLogin, nome, perfil FROM usuario WHERE (login = '". $usuario ."') AND (senha = '". $senha ."') LIMIT 1";
$query = mysqli_query($conexao, $sql);
if (mysqli_num_rows($query) != 1) {
	// Mensagem de erro quando os dados s�o inv�lidos e/ou o usu�rio n�o foi encontrado
	echo "Login inv�lido!"; exit;
} else {
	// Salva os dados encontados na vari�vel $resultado
	$resultado = mysqli_fetch_assoc($query);

	// Se a sess�o n�o existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sess�o
	$_SESSION['UsuarioID'] = $resultado['idLogin'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];
	$_SESSION['UsuarioPerfil'] = $resultado['perfil'];

	// Redireciona o visitante
	header("Location: buscaQuestionario.php"); exit;
}

?>