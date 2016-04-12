<?php 

function insereControlePermissao($conexao, $controlPermLiberacaoSusep, $controlPermLiberaCpf, $controlPermAtendXAceitacao) {


	$query = "INSERT INTO `questcontrolepermissao` (`controlPermLiberacaoSusep`, `controlPermLiberaCpf`, `controlPermAtendXAceitacao`) VALUES ('${controlPermLiberacaoSusep}', '${controlPermLiberaCpf}', '${controlPermAtendXAceitacao}')";


	$resultadoDaInsercao = mysqli_query($conexao, $query);
	$ultimoId = buscaUltimoIdControlePermissao($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdControlePermissao($conexao){
	$buscaUltimoId = "SELECT MAX(idcontrolepermissao) as ultimoId FROM questcontrolepermissao";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}



function buscaControlePermissaoPorId($conexao, $idcontrolepermissao){
	$controlePermissoes = array();
	$buscaId = "SELECT * FROM questcontrolepermissao WHERE 	idcontrolepermissao=".$idcontrolepermissao;
	$resultado = mysqli_query($conexao, $buscaId);
	while($controlePermissao = mysqli_fetch_assoc($resultado)) {
		array_push($controlePermissoes, $controlePermissao);
	}
	return $controlePermissoes;

}


?>