<?php 

function insereParametrizacao($conexao, $paramcodoperacao, $paramclasselocalizacao, $paramoperacaocobertura, $paramcorretor) {

	
	$query = "INSERT INTO `questparametrizacao` (`paramcodoperacao`, `paramclasselocalizacao`, `paramoperacaocobertura`, `paramcorretor`) VALUES ('${paramcodoperacao}', '${paramclasselocalizacao}', '${paramoperacaocobertura}', '${paramcorretor}')";


	$resultadoDaInsercao = mysqli_query($conexao, $query);
	$ultimoId = buscaUltimoIdParametrizacao($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdParametrizacao($conexao){
	$buscaUltimoId = "SELECT MAX(idparametrizacao) as ultimoId FROM questparametrizacao";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}



function buscaParametrizacaoPorId($conexao, $idParametrizacao){
	$parametrizacoes = array();
	$buscaId = "SELECT * FROM questparametrizacao WHERE 	idparametrizacao=".$idParametrizacao;
	$resultado = mysqli_query($conexao, $buscaId);
	while($parametrizacao = mysqli_fetch_assoc($resultado)) {
		array_push($parametrizacoes, $parametrizacao);
	}
	return $parametrizacoes;

}


?>