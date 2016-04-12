<?php 

function insereTipoPerfil($conexao, $corretor, $atendente) {

	$query2 = "INSERT INTO questtipoperfil (corretor, atendente) VALUES ('${corretor}', '${atendente}') ";
	$resultadoDaInsercao = mysqli_query($conexao, $query2);
	$ultimoId = buscaUltimoIdTipoPerfil($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdTipoPerfil($conexao){
	$buscaUltimoId = "SELECT MAX(idtipoperfil) as ultimoId FROM questtipoperfil";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}

function buscaTipoPerfilPorId($conexao, $idtipoperfil){
	$tipoPerfil = array();
	$buscaId = "SELECT * FROM questtipoperfil WHERE 	idtipoperfil=".$idtipoperfil;
	$resultado = mysqli_query($conexao, $buscaId);
	while($perfil = mysqli_fetch_assoc($resultado)) {
		array_push($tipoPerfil, $perfil);
	}
	return $tipoPerfil;

}



?>