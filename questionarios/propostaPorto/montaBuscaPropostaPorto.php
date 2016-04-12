<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-proposta-porto.php");



$idPropostaPorto =  $_GET["idPropostaPorto"];
$todasPropostasPorto = array();
$todasPropostasPorto = buscaPropostaPortoPorId($conexao, $idPropostaPorto);




ECHO('{"propostaPorto":'.json_encode($todasPropostasPorto).'}');


?>


