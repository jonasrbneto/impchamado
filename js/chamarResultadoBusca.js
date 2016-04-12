		
function carregarQuestionarios(questionario){
	for (i = 0, len = questionario.quest.length; i < len; i++) { 
		var nomeSistema = recuperaValorAjax("tipoSistema/buscaPorNomeTipoSistema.php?idSistema=",questionario.quest[i].tiposistema).trim();

		preencheValorOrcamentoPorto("questionarios/orcamento/montaBuscaOrcamento.php?idOrcamento=",questionario.quest[i].orcamentoquest,nomeSistema);

		preencheValorPropostaPorto("questionarios/propostaPorto/montaBuscaPropostaPorto.php?idPropostaPorto=",questionario.quest[i].propostaportoquest,nomeSistema);

		preencheValorPropostaAzul("questionarios/propostaAzul/montaBuscaPropostaAzul.php?idPropostaAzul=",questionario.quest[i].propostaazulquest,nomeSistema);

		preencheValorPropostaItau("questionarios/propostaItau/montaBuscaItau.php?idPropostaItau=",questionario.quest[i].propostaitauquest,nomeSistema);

		preencheValorParametrizacao("questionarios/parametrizacao/montaBuscaParametrizacao.php?idParametrizacao=",questionario.quest[i].parametrizacaoquest,nomeSistema);

		preencheValorRenovacao("questionarios/renovacao/montaBuscaRenovacao.php?idRenovacao=",questionario.quest[i].renovacao,nomeSistema);

		preencheValorProdutoOfertado("questionarios/produtoOfertado/montaBuscaProdutoOfertado.php?idProdOfertado=",questionario.quest[i].produtoofertadoquest,nomeSistema);

		preencheValorDiferencialVenda("questionarios/diferenciaisOfertaVenda/montaBuscaDiferenciasOfertaVenda.php?idDifOfertaVenda=",questionario.quest[i].diferencialofertavendaquest,nomeSistema);

		preencheValorDiferencialNegocio("questionarios/diferencialNegocio/montaBuscaDiferencialNegocio.php?idDifNegocio=",questionario.quest[i].diferencialnegocioquest,nomeSistema);

		preencheValorRelacionamento("questionarios/relacionamento/montaBuscaRelacionamento.php?idRelacionamento=",questionario.quest[i].relacionamentoquest,nomeSistema);

		preencheValorDifFuncional("questionarios/diferencialFuncional/montaBuscaDifFuncional.php?idDifFuncional=",questionario.quest[i].diferencialfuncionalquest,nomeSistema);

		preencheValorFiltroPesquisa("questionarios/filtroPesquisa/montaBuscaFiltroPesquisa.php?idFiltroPesquisa=",questionario.quest[i].filtropesquisaquest,nomeSistema);


		preencheValorTipoPerfil("questionarios/tipoPerfil/montaBuscaTipoPerfil.php?idTipoPerfil=",questionario.quest[i].tipoperfil,nomeSistema);

		preencheValorControlePermissao("questionarios/controlePermissao/montaBuscaControlePermissao.php?idControlePermissao=",questionario.quest[i].controlepermissaoquest,nomeSistema);

	}
}