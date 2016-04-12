<?php 

function insereDiferencialNegocio($conexao, $difNegOfertaConsultiva, $difNegOportVenda, $difNegDescTaxi, $difNegDescTG, $difNegResgPSP, $difNegDescIpi, $difNegResgPonto ) {

	$query2 = " INSERT INTO `questdiferencialnegocio` (`difNegOfertaConsultiva` , `difNegOportVenda`, `difNegDescTaxi`, `difNegDescTG`, `difNegResgPSP`, `difNegDescIpi`, `difNegResgPonto`) VALUES  ( '${difNegOfertaConsultiva}', '${difNegOportVenda}', '${difNegDescTaxi}', '${difNegDescTG}', '${difNegResgPSP}', '${difNegDescIpi}', '${difNegResgPonto}' ) ";


	$resultadoDaInsercao = mysqli_query($conexao, $query2);
	$ultimoId = buscaUltimoIdDiferencialNegocio($conexao);
	echo "DIFERENCIAL NEGOCIO ID = ".$ultimoId["ultimoId"];
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdDiferencialNegocio($conexao){
	$buscaUltimoId = "SELECT MAX(iddiferencialnegocio) as ultimoId FROM questdiferencialnegocio";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}



function buscaDifNegocioPorId($conexao, $iddiferencialnegocio){
	$difNegocios = array();
	$buscaId = "SELECT * FROM questdiferencialnegocio WHERE 	iddiferencialnegocio=".$iddiferencialnegocio;
	$resultado = mysqli_query($conexao, $buscaId);
	while($difNeg = mysqli_fetch_assoc($resultado)) {
		array_push($difNegocios, $difNeg);
	}
	return $difNegocios;

}



?>