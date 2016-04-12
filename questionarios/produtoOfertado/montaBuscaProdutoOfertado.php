<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-produto-ofertado.php");



$idProdOfertado =  $_GET["idProdOfertado"];
$todasRenovacoes = array();
$todasRenovacoes = buscaProdOfertadoPorId($conexao, $idProdOfertado);




ECHO('{"prodOfertado":'.json_encode($todasRenovacoes).'}');


?>


