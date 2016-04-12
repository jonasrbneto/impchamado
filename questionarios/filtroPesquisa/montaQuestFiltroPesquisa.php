<?php 

require_once("../../util/util.php");
require_once("banco-filtro-pesquisa.php");

function montaFiltroPesquisa($conexao){
	$campoCheckFiltroPesqIni = "filtroPesqIni";
	$valorCheckFiltroPesqIni = retornaValorCheckBox($campoCheckFiltroPesqIni);

	$campoCheckFiltroPesqOporVenda = "filtroPesqOporVenda";
	$valorCheckFiltroPesqOporVenda = retornaValorCheckBox($campoCheckFiltroPesqOporVenda);

	$campoCheckFiltroPesqRenova = "filtroPesqRenova";
	$valorCheckFiltroPesqRenova = retornaValorCheckBox($campoCheckFiltroPesqRenova);




	return insereFiltroPesquisa($conexao, $valorCheckFiltroPesqIni, $valorCheckFiltroPesqOporVenda, $valorCheckFiltroPesqRenova);

}



?>