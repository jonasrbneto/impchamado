function criaTela(camposMarcados){
	criaTelaOrcamento(camposMarcados);
	criaTelaPropostaPorto(camposMarcados);		
	criaTelaPropostaPorto(camposMarcados);
	criaTelaPropostaAzul(camposMarcados);
	criaTelaPropostaItau(camposMarcados);
	criaTelaParametrizacao();
	criaTelaRenovacao(camposMarcados);
	criaTelaProdutoOfertado(camposMarcados);
	criaTelaDiferencialVenda(camposMarcados);
	criaTelaDiferencialNegocio(camposMarcados);
	criaTelaRelacionamento(camposMarcados);
	criaTelaDiferencialFuncional(); 
	criaTelaFiltroPesquisa();
	criaTelaTipoPerfil(camposMarcados);
	criaTelaControlePermissao();
	
/*
	criaTelaPropostaPorto(camposMarcados);
	criaTelaOrcamento(camposMarcados);
	criaTelaPropostaAzul(camposMarcados);
	criaTelaPropostaItau(camposMarcados);
	criaTelaParametrizacao();
	criaTelaRenovacao(camposMarcados);	
	criaTelaProdutoOfertado(camposMarcados);
	criaTelaDiferencialVenda(camposMarcados);
	criaTelaDiferencialNegocio(camposMarcados);
	criaTelaRelacionamento(camposMarcados);
	criaTelaDiferencialFuncional(); 
	criaTelaFiltroPesquisa();*/

	
}

function limparTable(){
	console.log("LIMPANDO TUDO")
	$("#orcamentoTable").html("");
	$("#propostaPortoTable").html("");
	$("#propostaAzulTable").html("");
	$("#propostaItauTable").html("");
	$("#parametrizacaoTable").html("");
	$("#renovacaoTable").html("");
	$("#produtoOfertadoTable").html("");
	$("#diferencialOfertaTable").html("");
	$("#diferencialNegocioTable").html("");
	$("#relacionamentoTable").html("");
	$("#difFuncionalTable").html("");
	$("#filtroPesqlTable").html("");
	$("#tipoPerfilTable").html("");
	$("#controlePermissaoTable").html("");

}


function criaTelaOrcamento(camposMarcados){		

	$("#orcamentoTable").html("");
	var tabela = $("#orcamentoTable");	

	iniciaColuna("orcamentoTable", "Orçamento (Porto, Azul e Itau)", camposMarcados)
	criaColuna("orcamentoTable","orcSeguroNovo","Seguro Novo",camposMarcados);
	criaColuna("orcamentoTable","orcRenovacaoCongenere","Renovação Congenere",camposMarcados);
	criaColuna("orcamentoTable","orcRenovacaoPorto","Renovação Porto (Digitada, Carregada, com c/TC )",camposMarcados);
	criaColuna("orcamentoTable","orcEndossoGenerico","Endosso Genérico/Substituição",camposMarcados);
	criaColuna("orcamentoTable","orcEndossoInclusao","Endosso Inclusão",camposMarcados);
	criaColuna("orcamentoTable","orcImpressao","Impressão",camposMarcados);
	criaColuna("orcamentoTable","orcCalculo","Calculo",camposMarcados);
	criaColuna("orcamentoTable","orcProtocolo","Protocolo(Grade  e Resultado Calculo)",camposMarcados);
}

function criaTelaPropostaPorto(camposMarcados){	
	$("#propostaPortoTable").html("");
	var tabela = $("#propostaPortoTable");	
	iniciaColuna("propostaPortoTable", "Proposta (Porto)", camposMarcados)
	criaColuna("propostaPortoTable","seguroNovoPropPorto","Seguro Novo",camposMarcados);
	criaColuna("propostaPortoTable","renovacaoCongenerePropPorto","Renovação Congenere",camposMarcados);
	criaColuna("propostaPortoTable","renovacaoPortoPropPorto","Renovação Porto (Digitada, Carregada, com c/TC )",camposMarcados);
	criaColuna("propostaPortoTable","endossoGenericoPropPorto","Endosso Genérico/Substituição",camposMarcados);
	criaColuna("propostaPortoTable","endossoInclusaoPropPorto","Endosso Inclusão",camposMarcados);
	criaColuna("propostaPortoTable","impressaoPropPorto","Impressão",camposMarcados);
	criaColuna("propostaPortoTable","transmissaoPropPorto","Transmissão",camposMarcados);
	criaColuna("propostaPortoTable","protocoloGradePropPorto","Protocolo(Grade  e Resultado Calculo)",camposMarcados);
}

function criaTelaPropostaAzul(camposMarcados){	
	$("#propostaAzulTable").html("");
	var tabela = $("#propostaAzulTable");	
	iniciaColuna("propostaAzulTable", "Proposta (AZUL)", camposMarcados)
	criaColuna("propostaAzulTable","seguroNovoAzul","Seguro Novo",camposMarcados);
	criaColuna("propostaAzulTable","renovacaoCongenereAzul","Renovação Congenere",camposMarcados);
	criaColuna("propostaAzulTable","renovacaoPortoAzul","Renovação Porto (Digitada, Carregada, com c/TC )",camposMarcados);	
	criaColuna("propostaAzulTable","impressaoAzul","Impressão",camposMarcados);
	criaColuna("propostaAzulTable","transmissaoAzul","Transmissão",camposMarcados);
	criaColuna("propostaAzulTable","protocoloTimeStampAzul","Protocolo (Timestamp)",camposMarcados);
	criaColuna("propostaAzulTable","orcamentoRetAzul","Orçamento Retificador Azul",camposMarcados);
}

function criaTelaPropostaItau(camposMarcados){	
	$("#propostaItauTable").html("");
	var tabela = $("#propostaItauTable");	
	iniciaColuna("propostaItauTable", "Proposta (Itau)", camposMarcados)
	criaColuna("propostaItauTable","seguroNovoItau","Seguro Novo",camposMarcados);
	criaColuna("propostaItauTable","renovacaoCongenereItau","Renovação Congenere",camposMarcados);
	criaColuna("propostaItauTable","renovacaoPortoItau","Renovação Porto (Digitada, Carregada, com c/TC )",camposMarcados);	
	criaColuna("propostaItauTable","direcionamentoPortalItau","Direcionamento Portal",camposMarcados)

}

function criaTelaParametrizacao(){	
	$("#parametrizacaoTable").html("");
	var tabela = $("#parametrizacaoTable");	
	iniciaColuna("parametrizacaoTable", "Parametrização"," ")
	criaColunaSemCampoMarcado("parametrizacaoTable","paramCodOperacao","parametrizacao","Cadastro - Codigo de Operação");
	criaColunaSemCampoMarcado("parametrizacaoTable","paramClasseLocalizacao","parametrizacao","Veículo - Classe de Localização");
	criaColunaSemCampoMarcado("parametrizacaoTable","paramOpCobertura","parametrizacao","Cobertura - Opções de Cobertura");	
	criaColunaSemCampoMarcado("parametrizacaoTable","paramCorretor","parametrizacao","Corretor - Parametros corretor")

}

function criaTelaRenovacao(camposMarcados){	
	$("#renovacaoTable").html("");
	var tabela = $("#renovacaoTable");	
	iniciaColuna("renovacaoTable", "Renovação", camposMarcados)
	criaColuna("renovacaoTable","renovacaoSegVia","Segunda Via Renovação",camposMarcados);
	criaColuna("renovacaoTable","renovacaoTransfCorretagem","Transferencia de Corretagem",camposMarcados);
	criaColuna("renovacaoTable","renovacaoRelatorio","Relatórios",camposMarcados);	

}

function criaTelaProdutoOfertado(camposMarcados){	
	$("#produtoOfertadoTable").html("");
	var tabela = $("#produtoOfertadoTable");	
	iniciaColuna("produtoOfertadoTable", "Produtos Ofertados", camposMarcados)
	criaColuna("produtoOfertadoTable","prodOfertadoAutoPremium","Auto Premium",camposMarcados);
	criaColuna("produtoOfertadoTable","prodOfertadoAutoJovem","Auto Jovem",camposMarcados);
	criaColuna("produtoOfertadoTable","prodOfertadoAutoSenior","Auto Senior",camposMarcados);
	criaColuna("produtoOfertadoTable","prodOfertadoAutoMulher","Auto Mulher",camposMarcados);	
	criaColuna("produtoOfertadoTable","prodOfertadoPeqEmpresas","Pequenas Empresas",camposMarcados);	
	criaColuna("produtoOfertadoTable","prodOfertadoMoto","Moto",camposMarcados);	
	criaColuna("produtoOfertadoTable","prodOfertadoTaxi","Táxi",camposMarcados);	
	criaColuna("produtoOfertadoTable","prodOfertadoCaminhao","Caminhão",camposMarcados);	
	criaColuna("produtoOfertadoTable","prodOfertadoTradicional","Tradicional",camposMarcados);	
	criaColuna("produtoOfertadoTable","prodOfertadoColetivo","Coletivo",camposMarcados);	
}

function criaTelaDiferencialVenda(camposMarcados){	
	$("#diferencialOfertaTable").html("");
	var tabela = $("#diferencialOfertaTable");	
	iniciaColuna("diferencialOfertaTable", "Diferencias para oferta de venda", camposMarcados)
	criaColuna("diferencialOfertaTable","diferencialAutoResidencia","Auto + Residência",camposMarcados);
	criaColuna("diferencialOfertaTable","diferencialAutoConecta","Auto + Conecta",camposMarcados);
	criaColuna("diferencialOfertaTable","diferencialAutoCartao","Auto + Cartão",camposMarcados);	

}

function criaTelaDiferencialNegocio(camposMarcados){	
	$("#diferencialNegocioTable").html("");
	var tabela = $("#diferencialNegocioTable");	
	iniciaColuna("diferencialNegocioTable", "Diferencias de Negócio", camposMarcados)
	criaColuna("diferencialNegocioTable","difNegOfertaConsultiva","Oferta Consultiva",camposMarcados);
	criaColuna("diferencialNegocioTable","difNegOportVenda","Oportunidade de Vendas",camposMarcados);
	criaColuna("diferencialNegocioTable","difNegDescTaxi","Desconto Vá de Táxi",camposMarcados);	
	criaColuna("diferencialNegocioTable","difNegDescTG","Desconto T+G",camposMarcados);	
	criaColuna("diferencialNegocioTable","difNegResgPSP","Resgate Pontos do PSP",camposMarcados);	
	criaColuna("diferencialNegocioTable","difNegDescIpi","Desconto Ipiranga",camposMarcados);	
	criaColuna("diferencialNegocioTable","difNegResgPonto","Resgate Pontos do Cartão Porto",camposMarcados);	
}


function criaTelaRelacionamento(camposMarcados){	
	$("#relacionamentoTable").html("");
	var tabela = $("#relacionamentoTable");	
	iniciaColuna("relacionamentoTable", "Relacionamento", camposMarcados);
	criaColuna("relacionamentoTable","relacionamentoPortoPlus","Porto Plus",camposMarcados);
	criaColuna("relacionamentoTable","relacionamentoAgir","Agir",camposMarcados);	

}

function criaTelaDiferencialFuncional(){	
	$("#difFuncionalTable").html("");
	var tabela = $("#difFuncionalTable");	
	iniciaColuna("difFuncionalTable", "Diferencias Funcionais PPWeb","")
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncPreencheAut","difFunc","Preenchimento Automático (Segurado, Veículo e Condutor)");
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncDuplicarPad","difFunc","Duplicar padrão");
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncSugsPag","difFunc","Sugestão de Pagamento CARTÃO CREDITO e ADC");	
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncDupRetAzul","difFunc","Duplicar Retificadora Azul");
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncMigracao","difFunc","Migração Orçamento (prazo e tarifa expirada)");

	criaColunaSemCampoMarcado("difFuncionalTable","difFuncGradeAceiEndSubsVeiculo","difFunc","Grade de aceitação para endossos de substituição de veículo");
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncGradeAceiRenovacoesCarregasDig","difFunc","Grade de aceitação para renovações carregadas e digitadas");

	criaColunaSemCampoMarcado("difFuncionalTable","difFuncEstadoManualFor","difFunc","Estudo Manual (forçado)");
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncReanaliseAceitacao","difFunc","Reanálise de aceitação");

	criaColunaSemCampoMarcado("difFuncionalTable","difFuncCalcVeicSemCotacao","difFunc","Cálculo de Veículo sem cotação (val.mer / val.det)");
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncConcessaoAgravamento","difFunc","Concessão de Agravamento Tarifário Geral");


	criaColunaSemCampoMarcado("difFuncionalTable","difFuncCalcVigenciaRetro","difFunc","Cálculo com vigência retroativa (mais de 20 dias)");
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncFormatacaoBaseIFXAndppweb","difFunc","Formatação de orçamentos parceiros na base IFX e base PPWeb");


	criaColunaSemCampoMarcado("difFuncionalTable","difFuncQuebraJust","difFunc","Quebra e justificativa de críticas (obter status)");
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncPremioFranquiaInformada","difFunc","Prêmio e franquia informada (obter status)");


	criaColunaSemCampoMarcado("difFuncionalTable","difFuncPremioFranquiaAjustada","difFunc","Prêmio e franquia ajustada (obter status)");
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncLiberarOrcRecalcProtocolada","difFunc","Liberar orçamento  (PPWeb e parc.) para recalculo mesmo com proposta protocolada");


	criaColunaSemCampoMarcado("difFuncionalTable","difFuncCadastroCriticaPPWEB","difFunc","Cadastro de críticas no PPWeb");
	criaColunaSemCampoMarcado("difFuncionalTable","difFuncTransmitirCalculoLinhaVerde","difFunc","Transmitir informações de cálculo para o Linha Verde (Monitoramento)");

}

function criaTelaFiltroPesquisa(){	
	$("#filtroPesqlTable").html("");
	var tabela = $("#filtroPesqlTable");	
	iniciaColuna("filtroPesqlTable", "Filtros de Pesquisa PPWeb"," ")
	criaColunaSemCampoMarcado("filtroPesqlTable","filtroPesqIni","filtroPesq","Pagina Inicial");
	criaColunaSemCampoMarcado("filtroPesqlTable","filtroPesqOporVenda","filtroPesq","Oportunidade de Vendas");
	criaColunaSemCampoMarcado("filtroPesqlTable","filtroPesqRenova","filtroPesq","Renovações");	

}

function criaTelaTipoPerfil(camposMarcados){	
	$("#tipoPerfilTable").html("");
	iniciaColuna("tipoPerfilTable", "Perfil", camposMarcados);
	criaColuna("tipoPerfilTable","corretorPerfil","Corretor",camposMarcados);
	criaColuna("tipoPerfilTable","atendentePerfil","Atendente",camposMarcados);	

}

function criaTelaControlePermissao(){	
	$("#controlePermissaoTable").html("");
	var tabela = $("#controlePermissaoTable");	
	iniciaColuna("controlePermissaoTable", "Controle de Permissão"," ")
	criaColunaSemCampoMarcado("controlePermissaoTable","controlPermLiberacaoSusep","controlePermissao","Liberações de SUSEP");
	criaColunaSemCampoMarcado("controlePermissaoTable","controlPermLiberaCpf","controlePermissao","Liberações de CPF");
	criaColunaSemCampoMarcado("controlePermissaoTable","controlPermAtendXAceitacao","controlePermissao","Perfil 'Atendimento' x Perfil 'Aceitação'");	


}
