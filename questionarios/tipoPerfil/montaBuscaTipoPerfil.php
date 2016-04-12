<?php 
require_once("../../dataSource/conecta.php");
require_once("../../util/util.php");
require_once("banco-tipo-perfil.php");



$idTipoPerfil =  $_GET["idTipoPerfil"];
$todosTiposPerfil = array();
$todosTiposPerfil = buscaTipoPerfilPorId($conexao, $idTipoPerfil);

echo('{"tipoPerfil":'.json_encode($todosTiposPerfil).'}');


?>


