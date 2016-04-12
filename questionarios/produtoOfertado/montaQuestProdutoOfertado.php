<?php 

require_once("../../util/util.php");
require_once("banco-produto-ofertado.php");

function montaProdutoOfertado($conexao, $nomeSistema){
	$campoCheckProdOfertadoAutoPremium = $nomeSistema."prodOfertadoAutoPremium";
	$valorCheckProdOfertadoAutoPremium = retornaValorCheckBox($campoCheckProdOfertadoAutoPremium);

	$campoCheckProdOfertadoAutoJovem = $nomeSistema."prodOfertadoAutoJovem";
	$valorCheckProdOfertadoAutoJovem = retornaValorCheckBox($campoCheckProdOfertadoAutoJovem);

	$campoCheckProdOfertadoAutoSenior = $nomeSistema."prodOfertadoAutoSenior";
	$valorCheckProdOfertadoAutoSenior = retornaValorCheckBox($campoCheckProdOfertadoAutoSenior);

	$campoCheckProdOfertadoAutoMulher = $nomeSistema."prodOfertadoAutoMulher";
	$valorCheckProdOfertadoAutoMulher = retornaValorCheckBox($campoCheckProdOfertadoAutoMulher);

	$campoCheckProdOfertadoPeqEmpresas = $nomeSistema."prodOfertadoPeqEmpresas";
	$valorCheckProdOfertadoPeqEmpresas = retornaValorCheckBox($campoCheckProdOfertadoPeqEmpresas);

	$campoCheckProdOfertadoMoto = $nomeSistema."prodOfertadoMoto";
	$valorCheckProdOfertadoMoto = retornaValorCheckBox($campoCheckProdOfertadoMoto);

	$campoCheckProdOfertadoTaxi = $nomeSistema."prodOfertadoTaxi";
	$valorCheckProdOfertadoTaxi = retornaValorCheckBox($campoCheckProdOfertadoTaxi);

	$campoCheckProdOfertadoCaminhao = $nomeSistema."prodOfertadoCaminhao";
	$valorCheckProdOfertadoCaminhao = retornaValorCheckBox($campoCheckProdOfertadoCaminhao);

	$campoCheckProdOfertadoTradicional = $nomeSistema."prodOfertadoTradicional";
	$valorCheckProdOfertadoTradicional = retornaValorCheckBox($campoCheckProdOfertadoTradicional);

	$campoCheckProdOfertadoColetivo = $nomeSistema."prodOfertadoColetivo";
	$valorCheckProdOfertadoColetivo = retornaValorCheckBox($campoCheckProdOfertadoColetivo);


	return insereProdutoOfertado($conexao, $valorCheckProdOfertadoAutoPremium, $valorCheckProdOfertadoAutoJovem, $valorCheckProdOfertadoAutoSenior, $valorCheckProdOfertadoAutoMulher, $valorCheckProdOfertadoPeqEmpresas, $valorCheckProdOfertadoMoto, $valorCheckProdOfertadoTaxi, $valorCheckProdOfertadoCaminhao, $valorCheckProdOfertadoTradicional, $valorCheckProdOfertadoColetivo );

}



?>