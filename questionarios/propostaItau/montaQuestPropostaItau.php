<?php 

require_once("../../util/util.php");
require_once("banco-proposta-itau.php");

function montaPropostaItau($conexao,$nomeSistema){
	$campoCheckSeguroNovoItau = $nomeSistema."seguroNovoItau";
	$valorCheckSeguroNovoItau = retornaValorCheckBox($campoCheckSeguroNovoItau);

	$campoCheckRenovacaoCongenereItau = $nomeSistema."renovacaoCongenereItau";
	$valorCheckRenovacaoCongenereIta = retornaValorCheckBox($campoCheckRenovacaoCongenereItau);

	$campoCheckRenovacaoPortoItau = $nomeSistema."renovacaoPortoItau";
	$valorCheckRenovacaoPortoItau = retornaValorCheckBox($campoCheckRenovacaoPortoItau);

	$campoCheckDirecionamentoPortalItau = $nomeSistema."direcionamentoPortalItau";
	$valorCheckDirecionamentoPortalItau = retornaValorCheckBox($campoCheckDirecionamentoPortalItau);


	return inserePropostaItau($conexao, $valorCheckSeguroNovoItau, $valorCheckRenovacaoCongenereIta, $valorCheckRenovacaoPortoItau, $valorCheckDirecionamentoPortalItau);

}



?>