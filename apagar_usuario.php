<?php 
	require_once("validaAcesso.php");
	require_once("cabecalho.php");
	require_once("util/mostra-alerta.php");
	require_once("dataSource/conecta.php");
	require_once("usuario/banco-usuario.php");

	$id = $_GET["id"];
		
	echo"
	<div class='container text-center'>
        <div class='row'>";

			if(apagarUsuario($conexao, $id)) {
				echo "<p class='text-success'>Usu&aacute;rio(a) excluido(a) com sucesso!</p>";
			} else {
				$msg = mysqli_error($conexao);
				echo "<p class='text-danger'>O(A) Usu&aacute;rio(a) não pôde ser excluido(a)</p></br>".$msg;
			}
			
			echo"<br>

			<div class='text-center'>
				<a href='usuarios.php' class='btn btn-primary' role='button' style='margin-top: 8px;''>Voltar</a>
			</div>
		</div>
	</div>";
	mysqli_close($conexao);
?>