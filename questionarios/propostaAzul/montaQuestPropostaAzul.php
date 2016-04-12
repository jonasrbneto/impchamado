<?php 

require_once("../../util/util.php");
require_once("banco-proposta-azul.php");

function montaPropostaAzul($conexao,$nomeSistema){
	$campoCheckSeguroNovoAzul = $nomeSistema."seguroNovoAzul";
	$valorCheckSeguroNovoAzul = retornaValorCheckBox($campoCheckSeguroNovoAzul);

	$campoCheckCongenereAzul = $nomeSistema."renovacaoCongenereAzul";
	$valorCheckCongenereAzul = retornaValorCheckBox($campoCheckCongenereAzul);

	$campoCheckRenovacaoPortoAzul = $nomeSistema."renovacaoPortoAzul";
	$valorCheckRenovacaoPortoAzul = retornaValorCheckBox($campoCheckRenovacaoPortoAzul);

	$campoCheckImpressaoAzul = $nomeSistema."impressaoAzul";
	$valorCheckImpressaoAzul = retornaValorCheckBox($campoCheckImpressaoAzul);

	$campoCheckTransmissaoAzul = $nomeSistema."transmissaoAzul";
	$valorCheckTransmissaoAzul = retornaValorCheckBox($campoCheckTransmissaoAzul);

	$campoCheckProtocoloTimeStampAzul = $nomeSistema."protocoloTimeStampAzul";
	$valorCheckProtocoloTimeStampAzul = retornaValorCheckBox($campoCheckProtocoloTimeStampAzul);

	$campoCheckOrcamentoRetAzul = $nomeSistema."orcamentoRetAzul";
	$valorCheckOrcamentoRetAzul = retornaValorCheckBox($campoCheckOrcamentoRetAzul);


	return inserePropostaAzul($conexao, $valorCheckSeguroNovoAzul, $valorCheckCongenereAzul, $valorCheckRenovacaoPortoAzul, $valorCheckImpressaoAzul, $valorCheckTransmissaoAzul, $valorCheckProtocoloTimeStampAzul,$valorCheckOrcamentoRetAzul);

}



?>