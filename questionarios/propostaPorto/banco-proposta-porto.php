<?php 

function inserePropostaPorto($conexao, $seguronovoproposta, $renovacaocongenereprop, $renovacaoproposta, $endossogenericoproposta, $endossoinclusaoproposta, $impressaoproposta, $transmissaoproposta, $protocologradeproposta) {

	$query2 = "INSERT INTO `questpropostaporto` (`seguronovoproposta`, `renovacaocongenereprop`, `renovacaoproposta`, `endossogenericoproposta`, `endossoinclusaoproposta`, `impressaoproposta`, `transmissaoproposta`, `protocologradeproposta`) VALUES ('${seguronovoproposta}', '${renovacaocongenereprop}', '${renovacaoproposta}', '${endossogenericoproposta}', '${endossoinclusaoproposta}', '${impressaoproposta}', '${transmissaoproposta}', '${protocologradeproposta}')";
	$resultadoDaInsercao = mysqli_query($conexao, $query2);
	$ultimoId = buscaUltimoIdPropostaPorto($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdPropostaPorto($conexao){
	$buscaUltimoId = "SELECT MAX(idpropostaporto) as ultimoId FROM questpropostaporto";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}

function buscaPropostaPortoPorId($conexao, $idpropostaporto){
	$propostasPorto = array();
	$buscaId = "SELECT * FROM questpropostaporto WHERE 	idpropostaporto=".$idpropostaporto;
	$resultado = mysqli_query($conexao, $buscaId);
	while($proposta = mysqli_fetch_assoc($resultado)) {
		array_push($propostasPorto, $proposta);
	}
	return $propostasPorto;

}



?>