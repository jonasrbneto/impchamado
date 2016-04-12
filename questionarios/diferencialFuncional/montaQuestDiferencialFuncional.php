<?php 

require_once("../../util/util.php");
require_once("banco-diferencial-funcional.php");

function montaDiferencialFuncional($conexao){
	$campoCheckDifFuncPreencheAut = "difFuncPreencheAut";
	$valorCheckDifFuncPreencheAut = retornaValorCheckBox($campoCheckDifFuncPreencheAut);

	$campoCheckDifFuncDuplicarPad = "difFuncDuplicarPad";
	$valorCheckDifFuncDuplicarPad = retornaValorCheckBox($campoCheckDifFuncDuplicarPad);

	$campoCheckDifFuncSugsPag = "difFuncSugsPag";
	$valorCheckDifFuncSugsPag = retornaValorCheckBox($campoCheckDifFuncSugsPag);

	$campoCheckDifFuncDupRetAzul = "difFuncDupRetAzul";
	$valorCheckDifFuncDupRetAzul = retornaValorCheckBox($campoCheckDifFuncDupRetAzul);

	$campoCheckDifFuncMigracao = "difFuncMigracao";
	$valorCheckDifFuncMigracao = retornaValorCheckBox($campoCheckDifFuncMigracao);

	$campoCheckDifFuncGradeAceiEndSubsVeiculo = "difFuncGradeAceiEndSubsVeiculo";
	$valorCheckDifFuncGradeAceiEndSubsVeiculo = retornaValorCheckBox($campoCheckDifFuncGradeAceiEndSubsVeiculo);

	$campoCheckDifFuncGradeAceiRenovacoesCarregasDig = "difFuncGradeAceiRenovacoesCarregasDig";
	$valorCheckDifFuncGradeAceiRenovacoesCarregasDig = retornaValorCheckBox($campoCheckDifFuncGradeAceiRenovacoesCarregasDig);

	$campoCheckDifFuncEstadoManualFor = "difFuncEstadoManualFor";
	$valorCheckDifFuncEstadoManualFor = retornaValorCheckBox($campoCheckDifFuncEstadoManualFor);

	$campoCheckDifFuncReanaliseAceitacao = "difFuncReanaliseAceitacao";
	$valorCheckDifFuncReanaliseAceitacao = retornaValorCheckBox($campoCheckDifFuncReanaliseAceitacao);

	$campoCheckDifFuncCalcVeicSemCotacao = "difFuncCalcVeicSemCotacao";
	$valorCheckDifFuncCalcVeicSemCotacao = retornaValorCheckBox($campoCheckDifFuncCalcVeicSemCotacao);

	$campoCheckDifFuncConcessaoAgravamento = "difFuncConcessaoAgravamento";
	$valorCheckDifFuncConcessaoAgravamento = retornaValorCheckBox($campoCheckDifFuncConcessaoAgravamento);

	$campoCheckDifFuncCalcVigenciaRetro = "difFuncCalcVigenciaRetro";
	$valorCheckDifFuncCalcVigenciaRetro = retornaValorCheckBox($campoCheckDifFuncCalcVigenciaRetro);

	$campoCheckDifFuncFormatacaoBaseIFXAndppweb = "difFuncFormatacaoBaseIFXAndppweb";
	$valorCheckDifFuncFormatacaoBaseIFXAndppweb = retornaValorCheckBox($campoCheckDifFuncFormatacaoBaseIFXAndppweb);

	$campoCheckDifFuncQuebraJust = "difFuncQuebraJust";
	$valorCheckDifFuncQuebraJust = retornaValorCheckBox($campoCheckDifFuncQuebraJust);

	$campoCheckDifFuncPremioFranquiaInformada = "difFuncPremioFranquiaInformada";
	$valorCheckDifFuncPremioFranquiaInformada = retornaValorCheckBox($campoCheckDifFuncPremioFranquiaInformada);

	$campoCheckDifFuncPremioFranquiaAjustada = "difFuncPremioFranquiaAjustada";
	$valorCheckDifFuncPremioFranquiaAjustada = retornaValorCheckBox($campoCheckDifFuncPremioFranquiaAjustada);

	$campoCheckDifFuncLiberarOrcRecalcProtocolada = "difFuncLiberarOrcRecalcProtocolada";
	$valorCheckDifFuncLiberarOrcRecalcProtocolada = retornaValorCheckBox($campoCheckDifFuncLiberarOrcRecalcProtocolada);

	$campoCheckDifFuncCadastroCriticaPPWEB = "difFuncCadastroCriticaPPWEB";
	$valorCheckDifFuncCadastroCriticaPPWEB = retornaValorCheckBox($campoCheckDifFuncCadastroCriticaPPWEB);

	$campoCheckDifFuncTransmitirCalculoLinhaVerde = "difFuncTransmitirCalculoLinhaVerde";
	$valorCheckDifFuncTransmitirCalculoLinhaVerde = retornaValorCheckBox($campoCheckDifFuncTransmitirCalculoLinhaVerde);




	return insereDiferencialFuncional($conexao, 
		$valorCheckDifFuncPreencheAut, 
		$valorCheckDifFuncDuplicarPad, 
		$valorCheckDifFuncSugsPag, 
		$valorCheckDifFuncDupRetAzul, 
		$valorCheckDifFuncMigracao, 
		$valorCheckDifFuncGradeAceiEndSubsVeiculo,
		$valorCheckDifFuncGradeAceiRenovacoesCarregasDig, 
		$valorCheckDifFuncEstadoManualFor,
		$valorCheckDifFuncReanaliseAceitacao,
		$valorCheckDifFuncCalcVeicSemCotacao, 
		$valorCheckDifFuncConcessaoAgravamento, 
		$valorCheckDifFuncCalcVigenciaRetro, 
		$valorCheckDifFuncFormatacaoBaseIFXAndppweb, 
		$valorCheckDifFuncQuebraJust, 
		$valorCheckDifFuncPremioFranquiaInformada,
		$valorCheckDifFuncPremioFranquiaAjustada,
		$valorCheckDifFuncLiberarOrcRecalcProtocolada,
		$valorCheckDifFuncCadastroCriticaPPWEB,
		$valorCheckDifFuncTransmitirCalculoLinhaVerde);


}



?>