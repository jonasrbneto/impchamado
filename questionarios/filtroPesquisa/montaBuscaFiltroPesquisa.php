<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-filtro-pesquisa.php");



$idFiltroPesquisa =  $_GET["idFiltroPesquisa"];
$filtroPesquisas = array();
$filtroPesquisas = buscaFiltroPesquisaPorId($conexao, $idFiltroPesquisa);

echo('{"filtroPesquisa":'.json_encode($filtroPesquisas).'}');


?>


