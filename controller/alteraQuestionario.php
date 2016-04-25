<?php 
require_once("../../util/util.php");
require_once("../../util/mostra-alerta.php");
require_once("../../Chamado/banco-chamado.php");
require_once("../../dataSource/conecta.php");
require_once("../../cabecalho.php");
require_once("../../tiposistema/banco-tiposistema.php");
require_once("../../questionarios/questionario/geradorDeQuestionarios.php");

$camposMarcados = $_POST["camposMarcados"];
$chamado = $_POST["numChamado"];

$array = explode(",",str_replace(" ","",$camposMarcados));		

deletaTodosQuestionariosPeloChamado($conexao, $chamado);

geraQuestionarios($conexao,$array, $chamado);

$_SESSION["success"] = "Questionario foi salvo com sucesso.";
header("Location:/impchamado/alterarQuestionario.php");
die();

//$_SESSION["success"] = "Questionario foi salvo com sucesso.";
//header("Location:/impchamado/criarQuestionario.php");
//die();



?>