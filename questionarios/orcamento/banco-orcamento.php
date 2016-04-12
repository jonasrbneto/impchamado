<?php 

function insereOrcamento($conexao, $seguroNovo, $renovacaoCongenere, $renovacaoDigCarregada, $endosso, $endossoInclusao, $impressao,$calculo, $protocoloGradeResu) {

	$queryI = "INSERT INTO questorcamento (`seguroNovo`, `renovacaoCongenere`, `renovacaoDigCarregada`, `endosso`, `endossoInclusao`, `impressao`, `calculo`, `protocoloGradeResu`) VALUES ('${seguroNovo}', '${renovacaoCongenere}', '${renovacaoDigCarregada}', '${endosso}', '${endossoInclusao}', '${impressao}', '${calculo}', '${protocoloGradeResu}') ";

	$resultadoDaInsercao = mysqli_query($conexao, $queryI);
	$ultimoId = buscaUltimoIdOrcamento($conexao);
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdOrcamento($conexao){
	$buscaUltimoId = "SELECT MAX(idorcamento) as ultimoId FROM questorcamento";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}

function buscaOrcamentoPorId($conexao, $idorcamento){
	$orcamentos = array();
	$buscaId = "SELECT * FROM questorcamento WHERE idorcamento=".$idorcamento;
	$resultado = mysqli_query($conexao, $buscaId);
	while($orcamento = mysqli_fetch_assoc($resultado)) {
		array_push($orcamentos, $orcamento);
	}
	return $orcamentos;

}






?>