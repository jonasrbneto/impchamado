<?php 

function insereDiferencialFuncional($conexao, $difFuncPreencheAut, $difFuncDuplicarPad, $difFuncSugsPag, $difFuncDupRetAzul, $difFuncMigracao, $difFuncGradeAceiEndSubsVeiculo, $difFuncGradeAceiRenovacoesCarregasDig, $difFuncEstadoManualFor,$difFuncReanaliseAceitacao,$difFuncCalcVeicSemCotacao, $difFuncConcessaoAgravamento, $difFuncCalcVigenciaRetro, $difFuncFormatacaoBaseIFXAndppweb, $difFuncQuebraJust, $difFuncPremioFranquiaInformada,$difFuncPremioFranquiaAjustada,$difFuncLiberarOrcRecalcProtocolada,$difFuncCadastroCriticaPPWEB,$difFuncTransmitirCalculoLinhaVerde) {

	
	$query = "INSERT INTO `questdiferencialfuncional` (`difFuncPreencheAut`, `difFuncDuplicarPad`, `difFuncSugsPag`, `difFuncDupRetAzul`, `difFuncMigracao`, `difFuncGradeAceiEndSubsVeiculo`, `difFuncGradeAceiRenovacoesCarregasDig`, `difFuncEstadoManualFor`, `difFuncReanaliseAceitacao`, `difFuncCalcVeicSemCotacao`, `difFuncConcessaoAgravamento`, `difFuncCalcVigenciaRetro`, `difFuncFormatacaoBaseIFXAndppweb`, `difFuncQuebraJust`, `difFuncPremioFranquiaInformada`, `difFuncPremioFranquiaAjustada`, `difFuncLiberarOrcRecalcProtocolada`, `difFuncCadastroCriticaPPWEB`, `difFuncTransmitirCalculoLinhaVerde`) VALUES ('${difFuncPreencheAut}', '${difFuncDuplicarPad}', '${difFuncSugsPag}', '${difFuncDupRetAzul}', '${difFuncMigracao}', '${difFuncGradeAceiEndSubsVeiculo}', '${difFuncGradeAceiRenovacoesCarregasDig}', '${difFuncEstadoManualFor}', '${difFuncReanaliseAceitacao}', '${difFuncCalcVeicSemCotacao}', '${difFuncConcessaoAgravamento}', '${difFuncCalcVigenciaRetro}', '${difFuncFormatacaoBaseIFXAndppweb}', '${difFuncQuebraJust}', '${difFuncPremioFranquiaInformada}', '${difFuncPremioFranquiaAjustada}', '${difFuncLiberarOrcRecalcProtocolada}', '$difFuncCadastroCriticaPPWEB', '${difFuncTransmitirCalculoLinhaVerde}')";


	$resultadoDaInsercao = mysqli_query($conexao, $query);
	$ultimoId = buscaUltimoIdDiferencialFuncional($conexao);
	
	return $ultimoId["ultimoId"];
}


function buscaUltimoIdDiferencialFuncional($conexao){
	$buscaUltimoId = "SELECT MAX(iddiferencialfuncional) as ultimoId FROM questdiferencialfuncional";
	$resultado = mysqli_query($conexao, $buscaUltimoId);
	$ultimoId = mysqli_fetch_assoc($resultado);
	return $ultimoId;
}



function buscaDifFuncionalPorId($conexao, $idDifFunc){
	$difFuncionais = array();
	$buscaId = "SELECT * FROM questdiferencialfuncional WHERE 	iddiferencialfuncional=".$idDifFunc;
	$resultado = mysqli_query($conexao, $buscaId);
	while($difFunc = mysqli_fetch_assoc($resultado)) {
		array_push($difFuncionais, $difFunc);
	}
	return $difFuncionais;

}


?>