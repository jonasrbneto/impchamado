<?php 

function insereRenovacao($conexao, $segundaVia, $transfCorretagem, $relatorio) {

	$query2 = "INSERT INTO questrenovacao (segundaVia, transfCorretagem,relatorio) VALUES ('${segundaVia}', '${transfCorretagem}', '${relatorio}') ";
	$resultadoDaInsercao = mysqli_query($conexao, $query2);
	$ultimoId = buscaUltimoIdRenovacao($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdRenovacao($conexao){
	$buscaUltimoId = "SELECT MAX(idQuestRenovacao) as ultimoId FROM questrenovacao";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}

function buscaRenovacaoPorId($conexao, $idRenovacao){
	$renovacoes = array();
	$buscaId = "SELECT * FROM questrenovacao WHERE 	idQuestRenovacao=".$idRenovacao;
	$resultado = mysqli_query($conexao, $buscaId);
	while($renovacao = mysqli_fetch_assoc($resultado)) {
		array_push($renovacoes, $renovacao);
	}
	return $renovacoes;

}



?>