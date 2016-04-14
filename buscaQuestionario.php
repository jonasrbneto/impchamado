<?php 
require_once("cabecalho.php");

require_once("dataSource/conecta.php");
require_once("questionarios/questionario/banco-questionario.php");
require_once("tipoSistema/banco-tiposistema.php");

$existeSessao = false;
if(isset($_SESSION['UsuarioNome'])){
	$existeSessao = true;
}

$numChamado = "0";
if (!empty($_GET["chamado"])){
	$numChamado = $_GET["chamado"];
}


?>

<script src="js/buscaquest.js" ></script>
<script src="js/chamarResultadoBusca.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('input[type=checkbox]').attr('disabled', true);
		console.log(<?php echo $numChamado ?>);
		if(<?php echo $numChamado ?> != "0"){
			console.log("entrou");
			chamado = <?php echo $numChamado ?>;
			$("#numChamado").val(chamado);
			$("#botaoBuscar").click();
		}
	});



	function preencheCampoMarcadorString(){
		camposMarcados = new Array();
		campocheck = new String();
		$("input[type=checkbox][class=checkItem]:checked").each(function(){
			campocheck += $(this).val()+" ";		
		});
		
		$("#camposMarcados").val(campocheck);
		
	}

	function preencheCampoMarcadorArray(){
		camposMarcados = new Array();
		campocheck = new String();
		$("input[type=checkbox][class=checkItem]:checked").each(function(){
			camposMarcados.push($(this).val());		
		});

		return camposMarcados;
		
	}

	function limparCheckSistema(){
		$("input[type=checkbox]:checked").prop( "checked", false );
	}


	
	function ajaxChamado(){
		limparCheckSistema();
		var arrayId;
		var chamado = $("#numChamado").val();
		var resultado;

		var questionario = JSON.parse(recuperaValorAjax("controller/buscaQuestionario/buscaQuestionario.php?numchamado=", chamado));

		if(questionario.quest.length==0){
			mostraMsgErro("divBuscarQuest","Chamado não Existe");
			return;
		}

		var campoSelecionado;
		for (i = 0, len = questionario.quest.length; i < len; i++) { 
			var itemSistema = recuperaValorAjax("tipoSistema/buscaPorNomeTipoSistema.php?idSistema=",questionario.quest[i].tiposistema).trim().toLowerCase();
			document.getElementById(itemSistema).checked = true;
			campoSelecionado = campoSelecionado +" "+itemSistema;
		}

		criaTela(preencheCampoMarcadorArray());

		carregarQuestionarios(questionario);
		
		$('input[type=checkbox]').attr('disabled', true);

	} 
	
</script>


<style type="text/css">
	
	.form-control{min-width:300px;}
	
</style>




<form>
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2">
        	<div class="page-header text-left">
				<h2>Buscar Questionário</h2>
			</div>
			<div id="divBuscarQuest">
				<table class="table">
					<tr>
						<td>Chamado:</td>			
						<td><input class="form-control" type="number" name="numChamado" id="numChamado"  required></input></td>	
					</tr>
				</table>

				<div>
					<?php
						if (!$existeSessao) { ?>	
				         	<a href="index.php" class="btn btn-primary" role="button">Voltar</a>
				         	&nbsp;&nbsp;&nbsp;	
					<?php } ?>	
					
					<input type="button" class="btn btn-primary" name="botaoBuscar" id="botaoBuscar"  onclick="ajaxChamado()" value="Buscar"></input>	
				</div>
			</div>
		</div>
	</div>
	<br/>
	<div style="position: relative;" align="center" id="questionarios">
		<?php  require_once("/controller/criarQuestionarioCompleto/tabelaItemSistema.php") ?>
		<br/><br/>
		<?php  require_once("/controller/telaAbstract/tableQuestionarios.php") ?>

	</div>

</div>


</form>


<?php require_once("rodape.php");?>