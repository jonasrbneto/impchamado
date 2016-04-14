<?php 
	require_once("validaAcesso.php");
	require_once("cabecalho.php");
	require_once("dataSource/conecta.php");
	require_once("questionarios/questionario/banco-questionario.php");
	require_once("tipoSistema/banco-tiposistema.php");

	// Só concede acesso a essa página para usuários com nível de acesso igual e 2 ou mais
	verificaUsuario(2);

?>

<script src="js/buscaquest.js" ></script>
<script src="js/chamarResultadoBusca.js" ></script>
<script type="text/javascript">


	$(document).ready(function(){
		//$('input[type=checkbox]').attr('disabled', true);

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
		
		//('input[type=checkbox]').attr('disabled', true);
		$("#questionarios").is(':visible')
	} 

	function montarCampoAlterar(){
        var chamado = $("#numChamado").val();
        var questionario = JSON.parse(recuperaValorAjax("controller/buscaQuestionario/buscaQuestionario.php?numchamado=", chamado));
        criaTela(preencheCampoMarcadorArray());
        carregarQuestionarios(questionario);
 
		$("#botaoSalvar").show();
	}
</script>


<form>
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2">
        	<div class="page-header text-left">
				<h2>Alterar Questionário</h2>
			</div>
			<div id="divBuscarQuest">
				<table class="table">
					<tr>
						<td>Chamado:</td>			
						<td>
							<div>
								<div class="input-group">
	  								<input type="number" class="form-control" placeholder="Número do Chamado" name="numChamado" id="numChamado"  required>
	  								<span class="input-group-btn">
	    								<input type="button" class="btn btn-primary" name="botaoBuscar" id="botaoBuscar"  onclick="ajaxChamado()" value="Buscar"></input>
	  								</span>
								</div>
							</div>
						</td>	
					</tr>
				</table>
			</div>
		</div>
	</div>
	<br/>
	<div style="position: relative;" align="center" id="questionarios" >
		<?php  require_once("/controller/criarQuestionarioCompleto/tabelaItemSistema.php") ?>
		
		<button  type="button" onclick="montarCampoAlterar(); " class="btn btn-primary">Montar Questionario</button>
		<br/><br/>
		<?php  require_once("/controller/telaAbstract/tableQuestionarios.php") ?>

		<button  type="submit" id="botaoSalvar" name="botaoSalvar" class="btn btn-primary" hidden="true" style="display:none">Salvar</button>

	</div>
</form>

<?php require_once("rodape.php");?>