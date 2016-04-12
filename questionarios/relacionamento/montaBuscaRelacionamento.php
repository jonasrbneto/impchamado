<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-relacionamento.php");



$idRelacionamento =  $_GET["idRelacionamento"];
$relacionamentos = array();
$relacionamentos = buscaRelacionamentoPorId($conexao, $idRelacionamento);

echo('{"relacionamento":'.json_encode($relacionamentos).'}');


?>


