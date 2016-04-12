<?php 

function inserePropostaAzul($conexao, $seguronovopropAzul, $renovacaocongenerepropAzul, $renovacaopropAzul, $impressaopropAzul, $transmissaopropAzul, $protocoloTimeStampAzul,$orcamentoRetAzul) {

	
	$query = "INSERT INTO `questpropostaazul` (`seguronovopropostaazul`, `renovacaocongenerepropazul`, `renovacaopropostaazul`, `impressaopropostaazul`, `transmissaopropostaazul`, `protocolopropostaazul`, `orcamentoretificadorpropazul`) VALUES ( '${seguronovopropAzul}', '${renovacaocongenerepropAzul}', '${renovacaopropAzul}', '${impressaopropAzul}', '${transmissaopropAzul}', '${protocoloTimeStampAzul}', '${orcamentoRetAzul}')";


	$resultadoDaInsercao = mysqli_query($conexao, $query);
	$ultimoId = buscaUltimoIdPropostaAzul($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdPropostaAzul($conexao){
	$buscaUltimoId = "SELECT MAX(idpropostaazul) as ultimoId FROM questpropostaazul";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}

function buscaPropostAzulPorId($conexao, $idpropostaporto){
	$propostasAzul = array();
	$buscaId = "SELECT * FROM questpropostaazul WHERE 	idpropostaazul=".$idpropostaporto;
	$resultado = mysqli_query($conexao, $buscaId);
	while($proposta = mysqli_fetch_assoc($resultado)) {
		array_push($propostasAzul, $proposta);
	}
	return $propostasAzul;

}




?>