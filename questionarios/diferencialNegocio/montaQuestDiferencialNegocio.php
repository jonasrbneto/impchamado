<?php 

require_once("../../util/util.php");
require_once("banco-diferencial-negocio.php");

function montaDiferencialNegocio($conexao, $nomeSistema){
	$campoCheckDifNegOfertaConsultiva = $nomeSistema."difNegOfertaConsultiva";
	$valorCheckDifNegOfertaConsultiva = retornaValorCheckBox($campoCheckDifNegOfertaConsultiva);

	$campoCheckDifNegOportVenda = $nomeSistema."difNegOportVenda";
	$valorCheckDifNegOportVenda = retornaValorCheckBox($campoCheckDifNegOportVenda);

	$campoCheckDifNegDescTaxi = $nomeSistema."difNegDescTaxi";
	$valorCheckDifNegDescTaxi = retornaValorCheckBox($campoCheckDifNegDescTaxi);

	$campoCheckDifNegDescTG = $nomeSistema."difNegDescTG";
	$valorCheckDifNegDescTG = retornaValorCheckBox($campoCheckDifNegDescTG);

	$campoCheckDifNegResgPSP = $nomeSistema."difNegResgPSP";
	$valorCheckDifNegResgPSP = retornaValorCheckBox($campoCheckDifNegResgPSP);

	$campoCheckDifNegDescIpi = $nomeSistema."difNegDescIpi";
	$valorCheckDifNegDescIpi = retornaValorCheckBox($campoCheckDifNegDescIpi);

	$campoCheckDifNegResgPonto = $nomeSistema."difNegResgPonto";
	$valorCheckDifNegResgPonto = retornaValorCheckBox($campoCheckDifNegResgPonto);


	return insereDiferencialNegocio($conexao, $valorCheckDifNegOfertaConsultiva, $valorCheckDifNegOportVenda, $valorCheckDifNegDescTaxi, $valorCheckDifNegDescTG, $valorCheckDifNegResgPSP, $valorCheckDifNegDescIpi, $valorCheckDifNegResgPonto);

}



?>