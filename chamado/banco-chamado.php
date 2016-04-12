<?php 

function insereChamado($conexao, $numChamado, $descricaoEntrega, $workitem, $responsavel, $tipoChamado){
	$query = "INSERT INTO chamado (numChamado, descricaoEntrega, workitem, responsavel, tipoChamado) 
	VALUES ('${numChamado}', '${descricaoEntrega}', '${workitem}', '${responsavel}', '${tipoChamado}') ";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
}

function buscaChamado($conexao, $numChamado){
	$query = "SELECT numChamado as numChamado from chamado where numChamado = ${numChamado}";
	
	$resultado = mysqli_query($conexao, $query);
	$numChamado = mysqli_fetch_assoc($resultado);

	return $numChamado['numChamado'];
}

function existeChamado($conexao, $numChamado){
	$query = "SELECT numChamado as numChamado from chamado where numChamado = ${numChamado}";
	
	$resultado = mysqli_query($conexao, $query);
	$numChamado = mysqli_fetch_assoc($resultado);
	$retorno = 1;
	if(  is_null($numChamado['numChamado'])){
		$retorno = 0;
	} 

	return $retorno;
}






?>