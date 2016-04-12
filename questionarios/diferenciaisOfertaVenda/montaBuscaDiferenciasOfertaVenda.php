<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-dif-oferta-venda.php");



$idDifOfertaVenda =  $_GET["idDifOfertaVenda"];
$difOfertaVendas = array();
$difOfertaVendas = buscaDifOfertaVendaPorId($conexao, $idDifOfertaVenda);




ECHO('{"difOfertaVenda":'.json_encode($difOfertaVendas).'}');


?>


