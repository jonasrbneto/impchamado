<?php 

function insereDiferencialVenda($conexao, $difautoresidencia, $difautoconecta, $difautocartao) {

	
	$query = "INSERT INTO `questdiferencialofertavenda` (`idquestdifvenda`, `difautoresidencia`, `difautoconecta`, `difautocartao`) VALUES (NULL, '${difautoresidencia}', '${difautoconecta}', '${difautocartao}')";


	$resultadoDaInsercao = mysqli_query($conexao, $query);
	$ultimoId = buscaUltimoIdDiferencialVenda($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdDiferencialVenda($conexao){
	$buscaUltimoId = "SELECT MAX(idquestdifvenda) as ultimoId FROM questdiferencialofertavenda";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}

function buscaDifOfertaVendaPorId($conexao, $idDifOfertaVenda){
	//dov = Diferencial Oferta Venda
	$DifOfertaVendas = array();
	$buscaId = "SELECT * FROM questdiferencialofertavenda WHERE 	idquestdifvenda=".$idDifOfertaVenda;
	$resultado = mysqli_query($conexao, $buscaId);
	while($dov = mysqli_fetch_assoc($resultado)) {
		array_push($DifOfertaVendas, $dov);
	}
	return $DifOfertaVendas;

}




?>