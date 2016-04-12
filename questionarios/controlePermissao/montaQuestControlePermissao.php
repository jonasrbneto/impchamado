<?php 

require_once("../../util/util.php");
require_once("banco-controle-permissao.php");

function montaControlePermissao($conexao){
	$campoCheckControlPermLiberacaoSusep = "controlPermLiberacaoSusep";
	$valorCheckControlPermLiberacaoSusep = retornaValorCheckBox($campoCheckControlPermLiberacaoSusep);

	$campoCheckControlPermLiberaCpf = "controlPermLiberaCpf";
	$valorCheckControlPermLiberaCpf = retornaValorCheckBox($campoCheckControlPermLiberaCpf);

	$campoCheckControlPermAtendXAceitacao = "controlPermAtendXAceitacao";
	$valorCheckControlPermAtendXAceitacao = retornaValorCheckBox($campoCheckControlPermAtendXAceitacao);



	return insereControlePermissao($conexao, $valorCheckControlPermLiberacaoSusep, $valorCheckControlPermLiberaCpf, $valorCheckControlPermAtendXAceitacao);

}



?>