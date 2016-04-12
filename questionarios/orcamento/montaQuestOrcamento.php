<?php 
require_once("../../util/util.php");
require_once("banco-orcamento.php");

function montaOrcamento($conexao,$nomeSistema){
	$campoCheckOrcamentoSeguroNovo = $nomeSistema."orcSeguroNovo";
	$valorCheckOrcamentoSeguroNovo = retornaValorCheckBox($campoCheckOrcamentoSeguroNovo);

	$campoCheckOrcRenovacaoCongenere = $nomeSistema."orcRenovacaoCongenere";
	$valorCheckOrcRenovacaoCongenere = retornaValorCheckBox($campoCheckOrcRenovacaoCongenere);

	$campoCheckOrcRenovacaoPorto = $nomeSistema."orcRenovacaoPorto";
	$valorCheckOrcRenovacaoPorto = retornaValorCheckBox($campoCheckOrcRenovacaoPorto);

	$campoCheckOrcEndossoGenerico = $nomeSistema."orcEndossoGenerico";
	$valorCheckOrcEndossoGenerico  = retornaValorCheckBox($campoCheckOrcEndossoGenerico);

	$campoCheckOrcEndossoInclusao = $nomeSistema."orcEndossoInclusao";
	$valorCheckOrcEndossoInclusao = retornaValorCheckBox($campoCheckOrcEndossoInclusao);

	$campoCheckOrcImpressao = $nomeSistema."orcImpressao";
	$valorCheckOrcImpressao = retornaValorCheckBox($campoCheckOrcImpressao);

	$campoCheckOrcCalculo = $nomeSistema."orcCalculo";
	$valorCheckOrcCalculo = retornaValorCheckBox($campoCheckOrcCalculo);

	$campoCheckOrcProtocolo = $nomeSistema."orcProtocolo";
	$valorCheckOrcProtocolo = retornaValorCheckBox($campoCheckOrcProtocolo);


	return insereOrcamento($conexao, $valorCheckOrcamentoSeguroNovo, $valorCheckOrcRenovacaoCongenere, $valorCheckOrcRenovacaoPorto, $valorCheckOrcEndossoGenerico, $valorCheckOrcEndossoInclusao, $valorCheckOrcImpressao, $valorCheckOrcCalculo, $valorCheckOrcProtocolo);

}


?>