<?php

include("dataSource/conecta.php");

// Verifica se houve POST e se o usuсrio ou a senha щ(sуo) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
	header("Location: index.php"); exit;
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

// Validaчуo do usuсrio/senha digitados
$sql = "SELECT idLogin, nome, perfil FROM usuario WHERE (login = '". $usuario ."') AND (senha = '". $senha ."') LIMIT 1";
$query = mysqli_query($conexao, $sql);
if (mysqli_num_rows($query) != 1) {
	// Mensagem de erro quando os dados sуo invсlidos e/ou o usuсrio nуo foi encontrado
	echo "Login invсlido!"; exit;
} else {
	// Salva os dados encontados na variсvel $resultado
	$resultado = mysqli_fetch_assoc($query);

	// Se a sessуo nуo existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sessуo
	$_SESSION['UsuarioID'] = $resultado['idLogin'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];
	$_SESSION['UsuarioPerfil'] = $resultado['perfil'];

	// Redireciona o visitante
	header("Location: buscaQuestionario.php"); exit;
}

?>