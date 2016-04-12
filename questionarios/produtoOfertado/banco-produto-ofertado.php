<?php 

function insereProdutoOfertado($conexao, $autopremium, $autojovem, $autosenior, $automulher, $pequenasempresas, $moto, $taxi, $caminhao, $tradicional, $coletivo ) {

	
	$query = "INSERT INTO `questprodutoofertado` ( `autopremium`, `autojovem`, `autosenior`, `automulher`, `pequenasempresas`, `moto`, `taxi`, `caminhao`, `tradicional`, `coletivo`) VALUES (${autopremium}, ${autojovem}, ${autosenior}, ${automulher}, ${pequenasempresas}, ${moto}, ${taxi}, ${caminhao}, ${tradicional}, ${coletivo} )";


	$resultadoDaInsercao = mysqli_query($conexao, $query);
	$ultimoId = buscaUltimoIdProdutoOfertado($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdProdutoOfertado($conexao){
	$buscaUltimoId = "SELECT MAX(idquestprodofertado) as ultimoId FROM questprodutoofertado";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}


function buscaProdOfertadoPorId($conexao, $idProdOfertado){
	$prodOfertados = array();
	$buscaId = "SELECT * FROM questprodutoofertado WHERE 	idquestprodofertado=".$idProdOfertado;
	$resultado = mysqli_query($conexao, $buscaId);
	while($prodOfertado = mysqli_fetch_assoc($resultado)) {
		array_push($prodOfertados, $prodOfertado);
	}
	return $prodOfertados;

}


?>