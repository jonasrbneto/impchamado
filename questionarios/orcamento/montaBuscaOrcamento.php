<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-orcamento.php");



$idOrcamento =  $_GET["idOrcamento"];
$todosOrcamento = array();
$id = array();

$todosOrcamento = buscaOrcamentoPorId($conexao, $idOrcamento);




ECHO('{"orcamento":'.json_encode($todosOrcamento).'}');


?>