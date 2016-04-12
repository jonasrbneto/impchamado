<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-renovacao.php");



$idRenovacao =  $_GET["idRenovacao"];
$todasRenovacoes = array();
$todasRenovacoes = buscaRenovacaoPorId($conexao, $idRenovacao);

echo('{"renovacao":'.json_encode($todasRenovacoes).'}');


?>


