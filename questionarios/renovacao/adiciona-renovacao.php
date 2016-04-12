<?php 
require_once("../../util/util.php");
require_once("../../dataSource/conecta.php");
require_once("montaQuestRenovacao.php");
require_once("../../questionarios/questionario/montaQuestionario.php");


$camposMarcados = $_POST["camposMarcados"];
$numChamado = $_POST["numChamado"];



$array = explode(" ",str_replace(" ","",$camposMarcados));

$hashMapQuest =array();
$hashMapQuest["teste"] = "123";

foreach ($array as $i => $value) {
	$hashMapQuest["renovacao"] = montaRenovacao($conexao,$array[$i]);

	
	echo $hashMapQuest["renovacao"];

}




/*
for($i = 0; $i < $array.length; $i++){
	echo $array[i];

	$segundavia = retornaValorCheckBox($array[i]+"renovacaoSegVia");
	console.log($array[i]+"renovacaoSegVia"+"   "+$segundavia);

	$transfCorretagem = retornaValorCheckBox($array[i]+"renovacaoTransfCorretagem"); 
	console.log($array[i]+"renovacaoTransfCorretagem"+"   "+$transfCorretagem);

	$renovacao = retornaValorCheckBox($array[i]+"renovacaoRelatorio");
	console.log($array[i]+"renovacaoSegVia"+"   "+$renovacao);


}	
*/





?>