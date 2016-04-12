<?php 
require_once("../dataSource/conecta.php");
require_once("/banco-tiposistema.php");



$idSistema =  $_GET["idSistema"];

$nomeSistema = buscaNomeTipoSistemaPorId($conexao, $idSistema);




ECHO($nomeSistema);


?>








