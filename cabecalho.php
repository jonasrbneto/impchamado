<?php 
	require_once("util/mostra-alerta.php");
	require_once("validaAcesso.php");

	$existeSessao = false;
	if(isset($_SESSION['UsuarioNome'])){
		$existeSessao = true;
	}

	$acessoUsuario = validaAcessoUsuario($existeSessao, 2);
	$acessoAdmin = validaAcessoAdmin($existeSessao, 1);

    $enderecoCompleto = explode("/",$_SERVER['PHP_SELF']);
    $quebras = count($enderecoCompleto);
    $endereco = $enderecoCompleto[$quebras-1];

?>
<!DOCTYPE>
<html>
<head>
	<title>Impacto Chamado</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/impChamado.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
</head>
<script src="js/jquery-2.2.1.js" ></script>
<script src="js/criaColuna.js" ></script>
<script src="js/mensagemDialog.js" ></script>
<script src="js/criadorDePagina.js" ></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style type="text/css">
	
	.textoBranco{

		color:white;
	}

	.ui-dialog-titlebar {
	  background-color: #668cff;
	  background-image: none;
	  color: #fff;
	}

</style>

<body>	
	<?php  ?>
	<nav class="navbar navbar-fixed-top ">
		<div class="container" >
			<ul class="nav navbar-nav" style="color:white;" >
				<li class="nav-item active">
					<a class="nav-link textoBranco" href="buscaQuestionario.php">Busca Questionario <span class="sr-only">(current)</span></a>
				</li>

				<?php
				if ($existeSessao) { 
					if ($acessoUsuario) {?>
						<li class="nav-item active">
							<a class="nav-link textoBranco" href="criarQuestionario.php">Cadastrar <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item active">
							<a class="nav-link textoBranco" href=" alterarQuestionario.php">Alterar <span class="sr-only">(current)</span></a>
						</li>
					<?php 
					}

					if ($acessoAdmin) {?>
						<li class="nav-item active">
							<a class="nav-link textoBranco" href=" relatorioQuestionario.php">Relatorios <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link textoBranco" href=" usuarios.php">Usu&aacute;rios <span class="sr-only">(current)</span></a>
						</li>
					<?php } 
				} ?>				

			</ul>
			<?php
			if ($existeSessao) { ?>
				<div class="text-right">
		            <a href="logout.php" class="btn btn-primary" role="button" style="margin-top: 8px;">Deslogar</a>
		        </div>
			<?php } ?>		
		</div>

	</nav>
	<?php  ?>



	<div class="container text-center">

		<div class="principal">
			<?=mostraAlerta("success")?>
			<?=mostraAlerta("danger")?>


			<div id="divMensagemErro" title="Erro" style="display:none">
				<p id="mensagemErro"> </p> 
			</div>

			<div id="divMensagemConfirma" class="ui-dialog-titlebar ui-widget-header" style="display: none">
			  	<span id="mensagemConfirma" class="ui-dialog-title"></span>
			</div>

