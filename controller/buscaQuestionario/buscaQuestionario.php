<?php 
require_once("../../dataSource/conecta.php");
require_once("../../questionarios/questionario/banco-questionario.php");



$numchamado =  $_GET["numchamado"];
$todosQuest = array();
$id = array();

$todosQuest = buscaTodosIdQuestioanarioPorNumChamado($conexao, $numchamado);




ECHO('{"quest":'.json_encode($todosQuest).'}')


?>








