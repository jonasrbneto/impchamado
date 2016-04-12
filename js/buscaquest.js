	function recuperaValorAjax(end, valor){
		var resultado;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				resultado = xhttp.responseText;	
			}
		};
		xhttp.open("GET", end+valor, false);
		xhttp.send();

		return resultado.trim();
	}

	function checaCampo(nomeCampo, valor){
		if(valor=="1"){
			document.getElementById(nomeCampo).checked = true;
		}
	}
	

	function preencheValorQuestionario(){


	}

	function preencheValorOrcamentoPorto(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo(sistema+"orcSeguroNovo",obj.orcamento[0].seguroNovo);
		checaCampo(sistema+"orcRenovacaoCongenere",obj.orcamento[0].renovacaoCongenere);
		checaCampo(sistema+"orcRenovacaoPorto",obj.orcamento[0].renovacaoDigCarregada);
		checaCampo(sistema+"orcEndossoGenerico",obj.orcamento[0].endosso);
		checaCampo(sistema+"orcEndossoInclusao",obj.orcamento[0].endossoInclusao);
		checaCampo(sistema+"orcImpressao",obj.orcamento[0].impressao);
		checaCampo(sistema+"orcCalculo",obj.orcamento[0].calculo);
		checaCampo(sistema+"orcProtocolo",obj.orcamento[0].protocoloGradeResu);
	}

	function preencheValorPropostaPorto(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));


		checaCampo(sistema+"seguroNovoPropPorto",obj.propostaPorto[0].seguronovoproposta);
		checaCampo(sistema+"renovacaoCongenerePropPorto",obj.propostaPorto[0].renovacaocongenereprop);
		checaCampo(sistema+"renovacaoPortoPropPorto",obj.propostaPorto[0].renovacaoproposta);
		checaCampo(sistema+"endossoGenericoPropPorto",obj.propostaPorto[0].endossogenericoproposta);
		checaCampo(sistema+"endossoInclusaoPropPorto",obj.propostaPorto[0].endossoinclusaoproposta);
		checaCampo(sistema+"impressaoPropPorto",obj.propostaPorto[0].impressaoproposta);
		checaCampo(sistema+"transmissaoPropPorto",obj.propostaPorto[0].	transmissaoproposta);
		checaCampo(sistema+"protocoloGradePropPorto",obj.propostaPorto[0].protocologradeproposta);

	}

	function preencheValorPropostaAzul(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));


		checaCampo(sistema+"seguroNovoAzul",obj.propostaAzul[0].seguronovopropostaazul);
		checaCampo(sistema+"renovacaoCongenereAzul",obj.propostaAzul[0].renovacaocongenerepropazul);
		checaCampo(sistema+"renovacaoPortoAzul",obj.propostaAzul[0].renovacaopropostaazul);
		checaCampo(sistema+"impressaoAzul",obj.propostaAzul[0].impressaopropostaazul);
		checaCampo(sistema+"transmissaoAzul",obj.propostaAzul[0].transmissaopropostaazul);
		checaCampo(sistema+"protocoloTimeStampAzul",obj.propostaAzul[0].protocolopropostaazul);
		checaCampo(sistema+"orcamentoRetAzul",obj.propostaAzul[0].orcamentoretificadorpropazul);
	}


	function preencheValorPropostaItau(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo(sistema+"seguroNovoItau",obj.propostaItau[0].seguronovopropostaitau);
		checaCampo(sistema+"renovacaoCongenereItau",obj.propostaItau[0].renovacaocongenerepropitau);
		checaCampo(sistema+"renovacaoPortoItau",obj.propostaItau[0].renovacaopropostaitau);
		checaCampo(sistema+"direcionamentoPortalItau",obj.propostaItau[0].direcionamentoportalitau);

	}


	function preencheValorParametrizacao(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo("paramCodOperacao",obj.parametrizacao[0].paramcodoperacao);
		checaCampo("paramClasseLocalizacao",obj.parametrizacao[0].paramclasselocalizacao);
		checaCampo("paramOpCobertura",obj.parametrizacao[0].paramoperacaocobertura);
		checaCampo("paramCorretor",obj.parametrizacao[0].paramcorretor);

	}

	function preencheValorRenovacao(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo(sistema+"renovacaoSegVia",obj.renovacao[0].segundaVia);
		checaCampo(sistema+"renovacaoTransfCorretagem",obj.renovacao[0].transfCorretagem);
		checaCampo(sistema+"renovacaoRelatorio",obj.renovacao[0].relatorio);

	}

	function preencheValorProdutoOfertado(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo(sistema+"prodOfertadoAutoPremium",obj.prodOfertado[0].autopremium);
		checaCampo(sistema+"prodOfertadoAutoJovem",obj.prodOfertado[0].autojovem);
		checaCampo(sistema+"prodOfertadoAutoSenior",obj.prodOfertado[0].autosenior);
		checaCampo(sistema+"prodOfertadoAutoMulher",obj.prodOfertado[0].automulher);
		checaCampo(sistema+"prodOfertadoPeqEmpresas",obj.prodOfertado[0].pequenasempresas);
		checaCampo(sistema+"prodOfertadoMoto",obj.prodOfertado[0].moto);
		checaCampo(sistema+"prodOfertadoTaxi",obj.prodOfertado[0].taxi);
		checaCampo(sistema+"prodOfertadoCaminhao",obj.prodOfertado[0].caminhao);
		checaCampo(sistema+"prodOfertadoTradicional",obj.prodOfertado[0].tradicional);
		checaCampo(sistema+"prodOfertadoColetivo",obj.prodOfertado[0].coletivo);

	}


	function preencheValorDiferencialVenda(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo(sistema+"diferencialAutoResidencia",obj.difOfertaVenda[0].difautoresidencia);
		checaCampo(sistema+"diferencialAutoConecta",obj.difOfertaVenda[0].difautoconecta);
		checaCampo(sistema+"diferencialAutoCartao",obj.difOfertaVenda[0].difautocartao);

	}


	function preencheValorDiferencialNegocio(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo(sistema+"difNegOfertaConsultiva",obj.difNegocio[0].difNegOfertaConsultiva);
		checaCampo(sistema+"difNegOportVenda",obj.difNegocio[0].difNegOportVenda);
		checaCampo(sistema+"difNegDescTaxi",obj.difNegocio[0].difNegDescTaxi);
		checaCampo(sistema+"difNegDescTG",obj.difNegocio[0].difNegDescTG);
		checaCampo(sistema+"difNegResgPSP",obj.difNegocio[0].difNegResgPSP);
		checaCampo(sistema+"difNegDescIpi",obj.difNegocio[0].difNegDescIpi);
		checaCampo(sistema+"difNegResgPonto",obj.difNegocio[0].difNegResgPonto);
	}

	function preencheValorRelacionamento(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo(sistema+"relacionamentoPortoPlus",obj.relacionamento[0].relacionamentoPortoPlus);
		checaCampo(sistema+"relacionamentoAgir",obj.relacionamento[0].relacionamentoAgir);

	}

	function preencheValorDifFuncional(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo("difFuncPreencheAut",obj.difFuncional[0].difFuncPreencheAut);
		checaCampo("difFuncDuplicarPad",obj.difFuncional[0].difFuncDuplicarPad);
		checaCampo("difFuncSugsPag",obj.difFuncional[0].difFuncSugsPag);
		checaCampo("difFuncDupRetAzul",obj.difFuncional[0].difFuncDupRetAzul);
		checaCampo("difFuncMigracao",obj.difFuncional[0].difFuncMigracao);



		checaCampo("difFuncGradeAceiEndSubsVeiculo",obj.difFuncional[0].difFuncGradeAceiEndSubsVeiculo);
		checaCampo("difFuncGradeAceiRenovacoesCarregasDig",obj.difFuncional[0].difFuncGradeAceiRenovacoesCarregasDig);
		checaCampo("difFuncEstadoManualFor",obj.difFuncional[0].difFuncEstadoManualFor);
		checaCampo("difFuncReanaliseAceitacao",obj.difFuncional[0].difFuncReanaliseAceitacao);
		checaCampo("difFuncCalcVeicSemCotacao",obj.difFuncional[0].difFuncCalcVeicSemCotacao);


		checaCampo("difFuncConcessaoAgravamento",obj.difFuncional[0].difFuncConcessaoAgravamento);
		checaCampo("difFuncCalcVigenciaRetro",obj.difFuncional[0].difFuncCalcVigenciaRetro);
		checaCampo("difFuncFormatacaoBaseIFXAndppweb",obj.difFuncional[0].difFuncFormatacaoBaseIFXAndppweb);
		checaCampo("difFuncQuebraJust",obj.difFuncional[0].difFuncQuebraJust);
		checaCampo("difFuncPremioFranquiaInformada",obj.difFuncional[0].difFuncPremioFranquiaInformada);

		checaCampo("difFuncPremioFranquiaAjustada",obj.difFuncional[0].difFuncPremioFranquiaAjustada);
		checaCampo("difFuncLiberarOrcRecalcProtocolada",obj.difFuncional[0].difFuncLiberarOrcRecalcProtocolada);
		checaCampo("difFuncCadastroCriticaPPWEB",obj.difFuncional[0].difFuncCadastroCriticaPPWEB);
		checaCampo("difFuncTransmitirCalculoLinhaVerde",obj.difFuncional[0].difFuncTransmitirCalculoLinhaVerde);


	}

	function preencheValorFiltroPesquisa(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo("filtroPesqIni",obj.filtroPesquisa[0].paginaInicial);
		checaCampo("filtroPesqOporVenda",obj.filtroPesquisa[0].oportVenda);
		checaCampo("filtroPesqRenova",obj.filtroPesquisa[0].renovacoes);

	}

	function preencheValorTipoPerfil(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));

		checaCampo(sistema+"corretorPerfil",obj.tipoPerfil[0].corretor);
		checaCampo(sistema+"atendentePerfil",obj.tipoPerfil[0].atendente);

	}


	function preencheValorControlePermissao(end, value, sistema){
		var obj = JSON.parse(recuperaValorAjax(end,value));
		console.log(obj.controlePermissao[0]);
		checaCampo("controlPermLiberacaoSusep",obj.controlePermissao[0].controlPermLiberacaoSusep);
		checaCampo("controlPermLiberaCpf",obj.controlePermissao[0].controlPermLiberaCpf);
		checaCampo("controlPermAtendXAceitacao",obj.controlePermissao[0].controlPermAtendXAceitacao);

	}







