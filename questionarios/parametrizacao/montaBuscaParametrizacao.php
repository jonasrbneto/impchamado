<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-parametrizacao.php");



$idParametrizacao =  $_GET["idParametrizacao"];
$todasParametrizacao = array();
$todasParametrizacao = buscaParametrizacaoPorId($conexao, $idParametrizacao);




ECHO('{"parametrizacao":'.json_encode($todasParametrizacao).'}');


?>


