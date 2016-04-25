<?php 
	require_once("validaAcesso.php");
    require_once("cabecalho.php");
    require_once("util/mostra-alerta.php");
    require_once("dataSource/conecta.php");
    require_once("usuario/banco-usuario.php");

	$login = $_POST["login"];
	$senha = $_POST["senha"];
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$perfil = $_POST["perfil"];

	echo"<div class='container text-center'>
        	<div class='row'>";
			if(insereUsuario($conexao, $login, $senha, $nome, $email, $perfil)) {
				echo "<p class='text-success'>Usu&aacute;rio " .$nome. " adicionado com sucesso!</p>";
			} else {
				$msg = mysqli_error($conexao);
				echo "<p class='text-danger'>O usu&aacute;rio " .$nome. " não pôde ser adicionado</p></br>".$msg;
			}
	echo"<br>
	<div class='text-center'>
			<a href='usuarios.php' class='btn btn-primary' role='button' style='margin-top: 8px;''>OK</a>
		</div></div></div>";
	mysqli_close($conexao);
?>