<?php 

require_once("../../util/util.php");
require_once("banco-relacionamento.php");

function montaRelacionamento($conexao, $nomeSistema){
	$campoCheckRelacionamentoPortoPlus = $nomeSistema."relacionamentoPortoPlus";
	$valorCheckRelacionamentoPortoPlus = retornaValorCheckBox($campoCheckRelacionamentoPortoPlus);

	$campoCheckRelacionamentoAgir = $nomeSistema."relacionamentoAgir";
	$valorCheckRelacionamentoAgir = retornaValorCheckBox($campoCheckRelacionamentoAgir);

	

	return insereRelacionamento($conexao, $valorCheckRelacionamentoPortoPlus, $valorCheckRelacionamentoAgir );

}



?>