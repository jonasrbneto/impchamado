<?php 

require_once("../../util/util.php");
require_once("banco-parametrizacao.php");

function montaParametrizacao($conexao){
	$campoCheckParamCodOperacao = "paramCodOperacao";
	$valorCheckParamCodOperacao = retornaValorCheckBox($campoCheckParamCodOperacao);

	$campoCheckParamClasseLocalizacao = "paramClasseLocalizacao";
	$valorCheckParamClasseLocalizacao = retornaValorCheckBox($campoCheckParamClasseLocalizacao);

	$campoCheckParamOpCobertura = "paramOpCobertura";
	$valorCheckParamOpCobertura = retornaValorCheckBox($campoCheckParamOpCobertura);

	$campoCheckDirecionamentoParamCorretor = "paramCorretor";
	$valorCheckDirecionamentoParamCorretor = retornaValorCheckBox($campoCheckDirecionamentoParamCorretor);

	echo "VALOR !!!!!!!!!!!!!!!!".$valorCheckDirecionamentoParamCorretor;


	return insereParametrizacao($conexao, $valorCheckParamCodOperacao, $valorCheckParamClasseLocalizacao, $valorCheckParamOpCobertura, $valorCheckDirecionamentoParamCorretor);

}



?>