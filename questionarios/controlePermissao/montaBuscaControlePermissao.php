<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-controle-permissao.php");



$idControlePermissao =  $_GET["idControlePermissao"];
$todosControlePermissao = array();
$todosControlePermissao = buscaControlePermissaoPorId($conexao, $idControlePermissao);




ECHO('{"controlePermissao":'.json_encode($todosControlePermissao).'}');


?>


