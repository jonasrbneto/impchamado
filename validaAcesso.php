<?php
	function verificaUsuario($nivel_necessario){
		// Verifica se não há a variável da sessão que identifica o usuário
		if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioPerfil'] > $nivel_necessario)) {
			// Destrói a sessão por segurança
			session_destroy();
			// Redireciona o visitante de volta pro login
			header("Location: index.php"); exit;
		}
	}	

	function validaAcessoUsuario($existeSessao, $nivel_necessario){
		if ($existeSessao AND $_SESSION['UsuarioPerfil'] <= $nivel_necessario) {
			return true;
		}
		return false;
	}

	function validaAcessoAdmin($existeSessao, $nivel_necessario){
		if ($existeSessao AND $_SESSION['UsuarioPerfil'] == $nivel_necessario) {
			return true;
		}
		return false;
	}
?>