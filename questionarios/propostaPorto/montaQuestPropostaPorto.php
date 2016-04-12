<?php 

require_once("../../util/util.php");
require_once("banco-proposta-porto.php");

function montaPropostaPorto($conexao,$nomeSistema){
	$campoCheckSeguroNovoPropPorto = $nomeSistema."seguroNovoPropPorto";
	$valorCheckSeguroNovoPropPorto = retornaValorCheckBox($campoCheckSeguroNovoPropPorto);

	$campoCheckCongenerePropPorto = $nomeSistema."renovacaoCongenerePropPorto";
	$valorCheckCongenerePropPorto = retornaValorCheckBox($campoCheckCongenerePropPorto);

	$campoCheckRenovacaoPortoPropPorto = $nomeSistema."renovacaoPortoPropPorto";
	$valorCheckRenovacaoPortoPropPorto = retornaValorCheckBox($campoCheckRenovacaoPortoPropPorto);

	$campoCheckEndossoGenericoPropPorto = $nomeSistema."endossoGenericoPropPorto";
	$valorCheckEndossoGenericoPropPorto = retornaValorCheckBox($campoCheckEndossoGenericoPropPorto);

	$campoCheckEndossoInclusaoPropPorto = $nomeSistema."endossoInclusaoPropPorto";
	$valorCheckEndossoInclusaoPropPorto  = retornaValorCheckBox($campoCheckEndossoInclusaoPropPorto);

	$campoCheckImpressaoPropPorto = $nomeSistema."impressaoPropPorto";
	$valorCheckImpressaoPropPorto = retornaValorCheckBox($campoCheckImpressaoPropPorto);

	$campoCheckTransmissaoPropPorto = $nomeSistema."transmissaoPropPorto";
	$valorCheckTransmissaoPropPorto = retornaValorCheckBox($campoCheckTransmissaoPropPorto);

	$campoCheckProtocoloGradePropPorto = $nomeSistema."protocoloGradePropPorto";
	$valorCheckProtocoloGradePropPorto = retornaValorCheckBox($campoCheckProtocoloGradePropPorto);


	return inserePropostaPorto($conexao, $valorCheckSeguroNovoPropPorto, $valorCheckCongenerePropPorto, $valorCheckRenovacaoPortoPropPorto, $valorCheckEndossoGenericoPropPorto, $valorCheckEndossoInclusaoPropPorto, $valorCheckImpressaoPropPorto, $valorCheckTransmissaoPropPorto, $valorCheckProtocoloGradePropPorto);

}



?>