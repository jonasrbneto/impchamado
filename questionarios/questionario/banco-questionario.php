<?php 

function insereQuestionario($conexao,$numChamado,$tiposistema,$tipoPerfil,$dataEntregue,$renovacao,$orcamento,$propostaPorto,$propostaAzul,$propostaItau,$parametrizacao, $produtoOfertado, $diferencialOferVenda, $diferencialnegocioquest, $relacionamentoquest, $diferencialFuncional, $filtroPesquisa, $controlePermissao){

	$query = "INSERT INTO questionario (numChamado, dataEntregue,renovacao, tiposistema,tipoperfil,orcamentoquest,propostaportoQuest,propostaazulquest,propostaitauquest, parametrizacaoquest, produtoofertadoquest, diferencialofertavendaquest, diferencialnegocioquest, relacionamentoquest,diferencialfuncionalquest, filtropesquisaquest, controlepermissaoquest) VALUES ('${numChamado}','${dataEntregue}' ,'${renovacao}', '${tiposistema}','${tipoPerfil}','${orcamento}','${propostaPorto}','${propostaAzul}','${propostaItau}', '${parametrizacao}', '${produtoOfertado}', '${diferencialOferVenda}', '${diferencialnegocioquest}', '${relacionamentoquest}', '${diferencialFuncional}', '${filtroPesquisa}','${controlePermissao}') ";
	$resultadoDaInsercao = mysqli_query($conexao, $query);

}

function buscaIdQuestioanarioPorNumChamado($conexao, $numChamado){
	$query = "SELECT idQuestionario  as idQuest from questionario where numChamado = ${numChamado}";
	$resultado = mysqli_query($conexao, $query);
	$idQuest = mysqli_fetch_assoc($resultado);

	return $idQuest['idQuest'];
}

function buscaTodosIdQuestioanarioPorNumChamado($conexao, $numChamado){
	$questionarios = array();
	$query = "SELECT * from questionario where numChamado = ${numChamado}";
	$resultado = mysqli_query($conexao, $query);

	while($questionario = mysqli_fetch_assoc($resultado)) {
		array_push($questionarios, $questionario);
	}
	return $questionarios;
}

function buscaUltimoIdQuestionario($conexao){
	$buscaUltimoId = "SELECT MAX(idQuestionario) as ultimoId FROM questionario";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId['ultimoId'];
}


function buscaTodosQuantidadeChamadoMes($conexao,$mes){
	$buscaQuantMes = "SELECT count(*) as totalChamado FROM questionario WHERE  MONTH(dataEntregue) = ".$mes;
	$resultado = mysqli_query($conexao, $buscaQuantMes);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId['totalChamado'];
}

function buscaTodosOsSistemasUtilizados($conexao){
	$questionarios = array();
	$buscaQuantMes = "select ts.nomeSistema, count(q.tiposistema) as quantChamadoSistema
	from questionario q inner join tiposistema ts on (ts.idTipoSistema = q.tiposistema)
	group by q.tiposistema 
	having count(q.tiposistema)>0";
	$resultado = mysqli_query($conexao, $buscaQuantMes);
	
	while($questionario = mysqli_fetch_assoc($resultado)) {
		array_push($questionarios, $questionario);
	}

	return $questionarios;
}


function buscaQuantidadeDeChamadoPorMes($conexao){
	$questionarios = array();
	$buscaQuantMes = "select Month(q.dataEntregue) as mes, count(q.idQuestionario) as quantChamMes
	from questionario q 
	group by Month(q.dataEntregue)
	having count(q.idQuestionario)>0";
	$resultado = mysqli_query($conexao, $buscaQuantMes);
	
	while($questionario = mysqli_fetch_assoc($resultado)) {
		array_push($questionarios, $questionario);
	}

	return $questionarios;
}



?>