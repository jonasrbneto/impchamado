<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-proposta-itau.php");



$idPropostaItau =  $_GET["idPropostaItau"];
$todasPropostasItau = array();
$todasPropostasItau = buscaPropostItauPorId($conexao, $idPropostaItau);




ECHO('{"propostaItau":'.json_encode($todasPropostasItau).'}');


?>


