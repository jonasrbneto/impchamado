<?php 
require_once("../../util/util.php");
require_once("banco-renovacao.php");

function montaRenovacao($conexao,$nomeSistema){
	$campoCheckRenovacaoSegVia = $nomeSistema."renovacaoSegVia";
	$valorCheckRenovacaoSegVia = retornaValorCheckBox($campoCheckRenovacaoSegVia);

	$campoCheckRenovacaoTransfCorretagem = $nomeSistema."renovacaoTransfCorretagem";
	$valorCheckRenovacaoTransfCorretagem = retornaValorCheckBox($campoCheckRenovacaoTransfCorretagem);

	$campoCheckRenovacaoRelatorio = $nomeSistema."renovacaoRelatorio";
	$valorCheckRenovacaoRelatorio = retornaValorCheckBox($campoCheckRenovacaoRelatorio);


	return insereRenovacao($conexao,$valorCheckRenovacaoSegVia,$valorCheckRenovacaoTransfCorretagem,$valorCheckRenovacaoRelatorio);

}



?>