<?php 
require_once("../../util/util.php");
require_once("banco-questionario.php");
require_once("../../tiposistema/banco-tiposistema.php");


function montaQuestionario($conexao,$numChamado,$hashMapQuest,$nomeSistema){

//	if(is_null(buscaIdQuestioanarioPorNumChamado($conexao,$numChamado))){
	$_SESSION["danger"] = $_SESSION["danger"].$numChamado."  - DATA ". date("Y/m/d");
	$idSistema = buscaIdTipoSistemaPorNomeDoSistema($conexao, $nomeSistema);
	insereQuestionario($conexao,$numChamado,$idSistema,$hashMapQuest['tipoPerfil'],date("Y/m/d"),$hashMapQuest['renovacao'],$hashMapQuest['orcamento'],$hashMapQuest['propostaPorto'],$hashMapQuest['propostaAzul'],$hashMapQuest['propostaItau'],$hashMapQuest['parametrizacao'], $hashMapQuest['produtoOfertado'], $hashMapQuest['diferencialVenda'], $hashMapQuest["diferencialNegocio"], $hashMapQuest["relacionamento"], $hashMapQuest["diferencialFuncional"], $hashMapQuest["filtroPesquisa"], $hashMapQuest["controlePermissao"]);
	$IdQuest = buscaIdQuestioanarioPorNumChamado($conexao,$numChamado);
	return $IdQuest;
/*	} else {
		$_SESSION["danger"] = "Chamado já existe, vá para tela de atualização";
		header("Location:/impchamado/criarQuestionario.php");
		die();
	}*/

	//return $IdQuest;

}

?>