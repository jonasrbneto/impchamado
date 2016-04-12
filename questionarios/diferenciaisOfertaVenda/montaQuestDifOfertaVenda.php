<?php 

require_once("../../util/util.php");
require_once("banco-dif-oferta-venda.php");

function montaDiferencialOfertaVenda($conexao, $nomeSistema){
	$campoCheckDiferencialAutoResidencia = $nomeSistema."diferencialAutoResidencia";
	$valorCheckDiferencialAutoResidencia = retornaValorCheckBox($campoCheckDiferencialAutoResidencia);

	$campoCheckDiferencialAutoConecta = $nomeSistema."diferencialAutoConecta";
	$valorCheckDiferencialAutoConecta = retornaValorCheckBox($campoCheckDiferencialAutoConecta);

	$campoCheckDiferencialAutoCartao = $nomeSistema."diferencialAutoCartao";
	$valorCheckDiferencialAutoCartao = retornaValorCheckBox($campoCheckDiferencialAutoCartao);



	return insereDiferencialVenda($conexao, $valorCheckDiferencialAutoResidencia, $valorCheckDiferencialAutoConecta, $valorCheckDiferencialAutoCartao);

}



?>