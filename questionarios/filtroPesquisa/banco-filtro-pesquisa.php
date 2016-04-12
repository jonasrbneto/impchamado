<?php 

function insereFiltroPesquisa($conexao, $paginaInicial, $oportVenda, $renovacoes) {

	
	$query = "INSERT INTO `questfiltropesquisa` (`paginaInicial`, `oportVenda`, `renovacoes`) VALUES ('${paginaInicial}', '${oportVenda}', '${renovacoes}')";


	$resultadoDaInsercao = mysqli_query($conexao, $query);
	$ultimoId = buscaUltimoIdFiltroPesquisa($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdFiltroPesquisa($conexao){
	$buscaUltimoId = "SELECT MAX(idFiltroPesquisa) as ultimoId FROM questfiltropesquisa";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}

function buscaFiltroPesquisaPorId($conexao, $idFiltroPesquisa){
	$filtroPesquisas = array();
	$buscaId = "SELECT * FROM questfiltropesquisa WHERE 	idFiltroPesquisa=".$idFiltroPesquisa;
	$resultado = mysqli_query($conexao, $buscaId);
	while($filtroPesq = mysqli_fetch_assoc($resultado)) {
		array_push($filtroPesquisas, $filtroPesq);
	}
	return $filtroPesquisas;

}


?>