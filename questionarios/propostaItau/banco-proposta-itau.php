<?php 

function inserePropostaItau($conexao, $seguronovopropostaitau, $renovacaocongenerepropitau, $renovacaopropostaitau, $direcionamentoportalitau) {

	
	$query = "INSERT INTO `questpropostaitau` (`seguronovopropostaitau`, `renovacaocongenerepropitau`, `renovacaopropostaitau`, `direcionamentoportalitau`) VALUES ('${seguronovopropostaitau}', '${renovacaocongenerepropitau}', '${renovacaopropostaitau}', '${direcionamentoportalitau}')";


	$resultadoDaInsercao = mysqli_query($conexao, $query);
	$ultimoId = buscaUltimoIdPropostaItau($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdPropostaItau($conexao){
	$buscaUltimoId = "SELECT MAX(idpropostaitau) as ultimoId FROM questpropostaitau";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}

function buscaPropostItauPorId($conexao, $idpropostaitau){
	$propostasAzul = array();
	$buscaId = "SELECT * FROM questpropostaitau WHERE 	idpropostaitau=".$idpropostaitau;
	$resultado = mysqli_query($conexao, $buscaId);
	while($proposta = mysqli_fetch_assoc($resultado)) {
		array_push($propostasAzul, $proposta);
	}
	return $propostasAzul;

}



?>