<?php 
require_once("../../util/util.php");
require_once("banco-tipo-perfil.php");

function montaTipoPerfil($conexao,$nomeSistema){
	$campoCheckCorretorPerfil = $nomeSistema."corretorPerfil";
	$valorCheckCorretorPerfil = retornaValorCheckBox($campoCheckCorretorPerfil);

	$campoCheckAtendentePerfil = $nomeSistema."atendentePerfil";
	$valorCheckAtendentePerfil = retornaValorCheckBox($campoCheckAtendentePerfil);

	return insereTipoPerfil($conexao,$valorCheckCorretorPerfil,$valorCheckAtendentePerfil);

}



?>