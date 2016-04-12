<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-proposta-azul.php");



$idPropostaAzul =  $_GET["idPropostaAzul"];
$todasPropostasAzul = array();
$todasPropostasAzul = buscaPropostAzulPorId($conexao, $idPropostaAzul);



ECHO('{"propostaAzul":'.json_encode($todasPropostasAzul).'}');


?>


