<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-diferencial-negocio.php");



$idDifNegocio =  $_GET["idDifNegocio"];
$todasDifNegocios = array();
$todasDifNegocios = buscaDifNegocioPorId($conexao, $idDifNegocio);

echo('{"difNegocio":'.json_encode($todasDifNegocios).'}');


?>


