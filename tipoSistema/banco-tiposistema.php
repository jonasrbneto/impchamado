<?php 


function buscaIdTipoSistemaPorNomeDoSistema($conexao, $nomeSistema){
	$nomeSistema = trim($nomeSistema);

	$query = "SELECT idTipoSistema  as idSistema from tiposistema where nomeSistema = '${nomeSistema}'";
	$resultado = mysqli_query($conexao, $query);
	$idSistema = mysqli_fetch_assoc($resultado);

	return $idSistema['idSistema'];
}

function buscaNomeTipoSistemaPorId($conexao, $idTipoSistema){
	$query = "SELECT nomeSistema  as nomeSistema from tiposistema where idTipoSistema = '${idTipoSistema}'";

	$resultado = mysqli_query($conexao, $query);
	$idSistema = mysqli_fetch_assoc($resultado);

	return $idSistema['nomeSistema'];

}



?>