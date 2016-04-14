<?php 
	require_once("validaAcesso.php");
	require_once("cabecalho.php");
	require_once("util/mostra-alerta.php");
	require_once("dataSource/conecta.php");
	require_once("tipoChamado/banco-tipoChamado.php");
	require_once("chamado/banco-chamado.php");

	// Só concede acesso a essa página para usuários com nível de acesso igual e 2 ou mais
	verificaUsuario(2);

	$tiposChamados = listaTipoChamados($conexao);
?>

<script type="text/javascript">
	var ajaxVal = null;

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

	function verificaSeExisteChamado(){
		var num = $("#numChamado").val();

		document.getElementById("testeAjax").value = ajaxChamado(num);				
		console.log(document.getElementById("testeAjax").value);

		if($("#testeAjax").val() === "1"){
			limparTable();
			mostraMsgErro("tableChamado","Chamado já está cadastrado");

		}
	}

	function ajaxChamado(num){
		var resultado;
		var xhttp = new XMLHttpRequest();		
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				resultado = xhttp.responseText;				
			}
		};
		xhttp.open("GET", "controller/chamado/existeChamado.php?numchamado=" + num, false);
		xhttp.send();

		return resultado;

	} 

	

	function gerarFormulario(){
		var retorno;
		var num = $("#numChamado").val();

		if(preencheCampoMarcadorArray() == ""){			
			mostraMsgErro("tableChamado","Preencha o sistema qual sistema foi utlizado");
			return;
		} 

		if(num == ""){
			mostraMsgErro("tableChamado","Campo Chamado está vazio");
			return;
		} 



		document.getElementById("testeAjax").value = ajaxChamado(num);

		if($("#testeAjax").val() === "0"){
			criaTela(preencheCampoMarcadorArray());
			$("#camposMarcados").val(preencheCampoMarcadorArray());
		} else {
			limparTable();
			mostraMsgErro("tableChamado","Campo Chamado está vazio");	
		}

		
	}

	function montarFuncionario(){

		gerarFormulario();
		$("#botaoSalvar").show();


	}
</script>

<style type="text/css">
	.principal{
		
		align-items: center;
	}




	.table{

	}

</style>

<form action="controller/criarQuestionarioCompleto/resultadoQuestionario.php" method="POST" >
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2">
        	<div class="page-header text-left">
				<h2>Criar Questionário</h2>
			</div>
			<table class="table" id="tableChamado">
				<tr>
					<td>Chamado:</td>			
					<td><input class="form-control" type="number" name="numChamado" id="numChamado" onblur="verificaSeExisteChamado();" required></input></td>	
				</tr>
				<tr>
					<td>Work Item:</td>			
					<td><input class="form-control" type="number" name="workItem" id="workItem" required></input></td>	
				</tr>
				<tr>
					<td>Tipo:</td>			
					<td>
						<select id="tipoChamadoId" name="tipoChamadoId">
							<?php foreach ($tiposChamados as $tipo) :
							
							?>
							<option value="<?=$tipo['idTipoChamado']?>">  <?=$tipo['nomeTipoChamado']?> </option>
						<?php endforeach ?>

						</select>
					</td>	
				</tr>

				<tr>
					<td>Descrição:</td>
					<td>
						<textarea name="descricao" class="form-control"></textarea>
					</td>
				</tr>

				<tr>
					<td>

					</td>	
					<td>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<br/>

	<input type="hidden" name="testeAjax" id="testeAjax"  />
	<input type="hidden" name="camposMarcados" id="camposMarcados"  />
	<div style="position: relative;" align="center">
		<?php  require_once("/controller/criarQuestionarioCompleto/tabelaItemSistema.php") ?>

		<button  type="button" onclick="montarFuncionario(); " class="btn btn-primary">Montar Questionario</button>

		<br/><br/>
		<?php  require_once("/controller/telaAbstract/tableQuestionarios.php") ?>

	</div>
	<button  type="submit" id="botaoSalvar" name="botaoSalvar" class="btn btn-primary" hidden="true" style="display:none">Salvar</button>
</form>
<?php require_once("rodape.php");?>