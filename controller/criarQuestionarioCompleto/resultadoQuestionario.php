<?php 
require_once("../../util/util.php");
require_once("../../util/mostra-alerta.php");
require_once("../../Chamado/banco-chamado.php");
require_once("../../dataSource/conecta.php");
require_once("../../questionarios/filtroPesquisa/montaQuestFiltroPesquisa.php");
require_once("../../questionarios/diferencialFuncional/montaQuestDiferencialFuncional.php");
require_once("../../questionarios/relacionamento/montaQuestRelacionamento.php");
require_once("../../questionarios/diferencialNegocio/montaQuestDiferencialNegocio.php");
require_once("../../questionarios/diferenciaisOfertaVenda/montaQuestDifOfertaVenda.php");
require_once("../../questionarios/produtoOfertado/montaQuestProdutoOfertado.php");
require_once("../../questionarios/parametrizacao/montaQuestParametrizacao.php");
require_once("../../questionarios/propostaItau/montaQuestPropostaItau.php");
require_once("../../questionarios/propostaAzul/montaQuestPropostaAzul.php");
require_once("../../questionarios/propostaPorto/montaQuestPropostaPorto.php");
require_once("../../questionarios/orcamento/montaQuestOrcamento.php");
require_once("../../questionarios/renovacao/montaQuestRenovacao.php");
require_once("../../questionarios/tipoPerfil/montaQuestTipoPerfil.php");
require_once("../../questionarios/questionario/montaQuestionario.php");
require_once("../../questionarios/controlePermissao/montaQuestControlePermissao.php");
require_once("../../cabecalho.php");
require_once("../../tiposistema/banco-tiposistema.php");



$camposMarcados = $_POST["camposMarcados"];
$numChamado = $_POST["numChamado"];
$tipoChamado = $_POST["tipoChamadoId"];
$workItem = $_POST["workItem"];

$descricao = $_POST["descricao"];

echo "string".$tipoChamado;

$IdQuest = buscaIdQuestioanarioPorNumChamado($conexao,$numChamado);


if(!is_null($IdQuest)){
	$_SESSION["danger"] = $_SESSION["danger"]."Já existe questionario para esse chamado, vá para tela de atualização";
	header("Location:/impchamado/criarQuestionario.php");
	die();
}else{

	if(!existeChamado($conexao, $numChamado)){
		insereChamado($conexao, $numChamado, $descricao, $workItem, "1", $tipoChamado);
		
	}
	

	$array = explode(",",str_replace(" ","",$camposMarcados));		
	$hashMapQuest =array();

	foreach ($array as $i => $value) {
		
		$hashMapQuest["orcamento"] = montaOrcamento($conexao,$array[$i]);
		$hashMapQuest["renovacao"] = montaRenovacao($conexao,$array[$i]);
		$hashMapQuest["propostaPorto"] = montaPropostaPorto($conexao,$array[$i]);
		$hashMapQuest["propostaAzul"] = montaPropostaAzul($conexao,$array[$i]);
		$hashMapQuest["propostaItau"] = montaPropostaItau($conexao,$array[$i]);
		$hashMapQuest["parametrizacao"] = montaParametrizacao($conexao);
		$hashMapQuest["produtoOfertado"] = montaProdutoOfertado($conexao,$array[$i]);
		$hashMapQuest["diferencialVenda"] = montaDiferencialOfertaVenda($conexao,$array[$i]);
		$hashMapQuest["diferencialNegocio"] = montaDiferencialNegocio($conexao,$array[$i]);
		$hashMapQuest["relacionamento"] = montaRelacionamento($conexao,$array[$i]);
		$hashMapQuest["diferencialFuncional"] = montaDiferencialFuncional($conexao,$array[$i]);
		$hashMapQuest["filtroPesquisa"] = montafiltroPesquisa($conexao,$array[$i]);
		$hashMapQuest["tipoPerfil"] = montaTipoPerfil($conexao,$array[$i]);
		$hashMapQuest["controlePermissao"] = montaControlePermissao($conexao,$array[$i]);

		montaQuestionario($conexao,$numChamado,$hashMapQuest,$array[$i]);

	}

	$_SESSION["success"] = "Questionario foi salvo com sucesso.";
	header("Location:/impchamado/criarQuestionario.php");
	die();


	

}

/*

$array = explode(" ",str_replace(" ","",$camposMarcados));
	header("Location:/impchamado/testeScript.php");
$hashMapQuest =array();
$hashMapQuest["teste"] = "123";

*/


?>

<?php require_once("../../rodape.php"); ?>

