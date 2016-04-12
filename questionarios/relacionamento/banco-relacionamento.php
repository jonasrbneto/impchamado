<?php 

function insereRelacionamento($conexao, $relacionamentoPortoPlus, $relacionamentoAgir) {

	
	$query = "INSERT INTO `questrelacionamento` ( `relacionamentoPortoPlus`, `relacionamentoAgir`) VALUES ( '${relacionamentoPortoPlus}', '${relacionamentoAgir}' )";


	$resultadoDaInsercao = mysqli_query($conexao, $query);
	$ultimoId = buscaUltimoIdRelacionamento($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdRelacionamento($conexao){
	$buscaUltimoId = "SELECT MAX(idrelacionamento) as ultimoId FROM questrelacionamento";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}


function buscaRelacionamentoPorId($conexao, $idRelacionamento){
	$relacionamentos = array();
	$buscaId = "SELECT * FROM questrelacionamento WHERE idrelacionamento=".$idRelacionamento;
	$resultado = mysqli_query($conexao, $buscaId);
	while($relacionamento = mysqli_fetch_assoc($resultado)) {
		array_push($relacionamentos, $relacionamento);
	}
	return $relacionamentos;

}



?>