<?php 
require_once("../../chamado/banco-chamado.php");
require_once("../../dataSource/conecta.php");

$numChamado = $_GET["numchamado"];

$existe = existeChamado($conexao,$numChamado);


echo $existe;



?>