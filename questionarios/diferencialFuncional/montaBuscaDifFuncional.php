<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-diferencial-funcional.php");



$idDifFuncional =  $_GET["idDifFuncional"];
$difsFuncional = array();
$difsFuncional = buscaDifFuncionalPorId($conexao, $idDifFuncional);

echo('{"difFuncional":'.json_encode($difsFuncional).'}');


?>


