-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Abr-2016 às 22:20
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mapa_impacto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado`
--

CREATE TABLE `chamado` (
  `idChamado` int(11) NOT NULL,
  `numChamado` varchar(20) NOT NULL,
  `descricaoEntrega` text NOT NULL,
  `workitem` int(11) NOT NULL,
  `responsavel` int(11) NOT NULL,
  `tipoChamado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `nomePerfil` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `nomePerfil`) VALUES
(1, 'ADMIN'),
(2, 'ANALISTA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questcontrolepermissao`
--

CREATE TABLE `questcontrolepermissao` (
  `idcontrolepermissao` int(11) NOT NULL,
  `controlPermLiberacaoSusep` tinyint(1) NOT NULL,
  `controlPermLiberaCpf` tinyint(1) NOT NULL,
  `controlPermAtendXAceitacao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questdiferencialfuncional`
--

CREATE TABLE `questdiferencialfuncional` (
  `iddiferencialfuncional` int(11) NOT NULL,
  `difFuncPreencheAut` tinyint(1) NOT NULL,
  `difFuncDuplicarPad` tinyint(1) NOT NULL,
  `difFuncSugsPag` tinyint(1) NOT NULL,
  `difFuncDupRetAzul` tinyint(1) NOT NULL,
  `difFuncMigracao` tinyint(1) NOT NULL,
  `difFuncGradeAceiEndSubsVeiculo` tinyint(1) NOT NULL COMMENT 'Grade de aceitação para endossos de substituição de veículo',
  `difFuncGradeAceiRenovacoesCarregasDig` tinyint(1) NOT NULL COMMENT 'Grade de aceitação para renovações carregadas e digitadas',
  `difFuncEstadoManualFor` tinyint(1) NOT NULL COMMENT 'Estudo Manual (forçado)',
  `difFuncReanaliseAceitacao` tinyint(1) NOT NULL COMMENT 'Reanálise de aceitação',
  `difFuncCalcVeicSemCotacao` tinyint(1) NOT NULL COMMENT 'Cálculo de Veículo sem cotação (val.mer / val.det)',
  `difFuncConcessaoAgravamento` tinyint(1) NOT NULL COMMENT 'Concessão de Agravamento Tarifário Geral',
  `difFuncCalcVigenciaRetro` tinyint(1) NOT NULL COMMENT 'Cálculo com vigência retroativa (mais de 20 dias)',
  `difFuncFormatacaoBaseIFXAndppweb` tinyint(1) NOT NULL COMMENT 'Formatação de orçamentos parceiros na base IFX e base PPWeb',
  `difFuncQuebraJust` tinyint(1) NOT NULL COMMENT 'Quebra e justificativa de críticas (obter status)',
  `difFuncPremioFranquiaInformada` tinyint(1) NOT NULL COMMENT 'Prêmio e franquia informada (obter status)',
  `difFuncPremioFranquiaAjustada` tinyint(1) NOT NULL COMMENT 'Prêmio e franquia ajustada (obter status)',
  `difFuncLiberarOrcRecalcProtocolada` tinyint(1) NOT NULL COMMENT 'Liberar orçamento  (PPWeb e parc.) para recalculo mesmo com proposta protocolada',
  `difFuncCadastroCriticaPPWEB` tinyint(1) NOT NULL COMMENT 'Cadastro de críticas no PPWeb',
  `difFuncTransmitirCalculoLinhaVerde` tinyint(1) NOT NULL COMMENT 'Transmitir informações de cálculo para o Linha Verde (Monitoramento)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela que cuida da Diferencial Funcional';

-- --------------------------------------------------------

--
-- Estrutura da tabela `questdiferencialnegocio`
--

CREATE TABLE `questdiferencialnegocio` (
  `iddiferencialnegocio` int(11) NOT NULL,
  `difNegOfertaConsultiva` tinyint(1) NOT NULL,
  `difNegOportVenda` tinyint(1) NOT NULL,
  `difNegDescTaxi` tinyint(1) NOT NULL,
  `difNegDescTG` tinyint(1) NOT NULL,
  `difNegResgPSP` tinyint(1) NOT NULL,
  `difNegDescIpi` tinyint(1) NOT NULL,
  `difNegResgPonto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela que salva  Diferenciais de negocio';

-- --------------------------------------------------------

--
-- Estrutura da tabela `questdiferencialofertavenda`
--

CREATE TABLE `questdiferencialofertavenda` (
  `idquestdifvenda` int(11) NOT NULL,
  `difautoresidencia` tinyint(1) NOT NULL,
  `difautoconecta` tinyint(1) NOT NULL,
  `difautocartao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabela responsável por Diferencias para oferta de venda';

-- --------------------------------------------------------

--
-- Estrutura da tabela `questfiltropesquisa`
--

CREATE TABLE `questfiltropesquisa` (
  `idFiltroPesquisa` int(11) NOT NULL,
  `paginaInicial` tinyint(1) NOT NULL,
  `oportVenda` tinyint(1) NOT NULL COMMENT 'Oportunidade de venda',
  `renovacoes` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela com questionario filtro de pesquisa';

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario`
--

CREATE TABLE `questionario` (
  `idQuestionario` int(11) NOT NULL,
  `numChamado` int(11) NOT NULL,
  `tiposistema` int(11) NOT NULL,
  `tipoperfil` int(11) NOT NULL,
  `dataEntregue` date NOT NULL,
  `renovacao` int(11) NOT NULL,
  `orcamentoquest` int(11) NOT NULL,
  `propostaportoquest` int(11) NOT NULL,
  `propostaazulquest` int(11) NOT NULL,
  `propostaitauquest` int(11) NOT NULL,
  `parametrizacaoquest` int(11) NOT NULL,
  `produtoofertadoquest` int(11) NOT NULL,
  `diferencialofertavendaquest` int(11) NOT NULL,
  `diferencialnegocioquest` int(11) NOT NULL,
  `relacionamentoquest` int(11) NOT NULL,
  `diferencialfuncionalquest` int(11) NOT NULL,
  `filtropesquisaquest` int(11) NOT NULL,
  `controlepermissaoquest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questorcamento`
--

CREATE TABLE `questorcamento` (
  `idorcamento` int(11) NOT NULL,
  `seguroNovo` tinyint(1) NOT NULL,
  `renovacaoCongenere` tinyint(1) NOT NULL,
  `renovacaoDigCarregada` tinyint(1) NOT NULL,
  `endosso` tinyint(1) NOT NULL,
  `endossoInclusao` tinyint(1) NOT NULL,
  `impressao` tinyint(1) NOT NULL,
  `calculo` tinyint(1) NOT NULL,
  `protocoloGradeResu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questparametrizacao`
--

CREATE TABLE `questparametrizacao` (
  `idparametrizacao` int(11) NOT NULL,
  `paramcodoperacao` tinyint(1) NOT NULL,
  `paramclasselocalizacao` tinyint(1) NOT NULL,
  `paramoperacaocobertura` tinyint(1) NOT NULL,
  `paramcorretor` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela que grava dados do questionario de parametrizacao';

-- --------------------------------------------------------

--
-- Estrutura da tabela `questprodutoofertado`
--

CREATE TABLE `questprodutoofertado` (
  `idquestprodofertado` int(11) NOT NULL,
  `autopremium` tinyint(1) NOT NULL,
  `autojovem` tinyint(1) NOT NULL,
  `autosenior` tinyint(1) NOT NULL,
  `automulher` tinyint(1) NOT NULL,
  `pequenasempresas` tinyint(1) NOT NULL,
  `moto` tinyint(1) NOT NULL,
  `taxi` tinyint(1) NOT NULL,
  `caminhao` tinyint(1) NOT NULL,
  `tradicional` tinyint(1) NOT NULL,
  `coletivo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela que cuida dos produtos ofertados';

-- --------------------------------------------------------

--
-- Estrutura da tabela `questpropostaazul`
--

CREATE TABLE `questpropostaazul` (
  `idpropostaazul` int(11) NOT NULL,
  `seguronovopropostaazul` tinyint(1) NOT NULL,
  `renovacaocongenerepropazul` tinyint(1) NOT NULL,
  `renovacaopropostaazul` int(11) NOT NULL,
  `impressaopropostaazul` int(11) NOT NULL,
  `transmissaopropostaazul` int(11) NOT NULL,
  `protocolopropostaazul` int(11) NOT NULL,
  `orcamentoretificadorpropazul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questpropostaitau`
--

CREATE TABLE `questpropostaitau` (
  `idpropostaitau` int(11) NOT NULL,
  `seguronovopropostaitau` tinyint(1) NOT NULL,
  `renovacaocongenerepropitau` tinyint(1) NOT NULL,
  `renovacaopropostaitau` tinyint(1) NOT NULL,
  `direcionamentoportalitau` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questpropostaporto`
--

CREATE TABLE `questpropostaporto` (
  `idpropostaporto` int(11) NOT NULL,
  `seguronovoproposta` int(11) NOT NULL,
  `renovacaocongenereprop` int(11) NOT NULL,
  `renovacaoproposta` tinyint(1) NOT NULL,
  `endossogenericoproposta` tinyint(1) NOT NULL,
  `endossoinclusaoproposta` tinyint(1) NOT NULL,
  `impressaoproposta` tinyint(1) NOT NULL,
  `transmissaoproposta` tinyint(1) NOT NULL,
  `protocologradeproposta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questrelacionamento`
--

CREATE TABLE `questrelacionamento` (
  `idrelacionamento` int(11) NOT NULL,
  `relacionamentoPortoPlus` tinyint(1) NOT NULL,
  `relacionamentoAgir` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questrenovacao`
--

CREATE TABLE `questrenovacao` (
  `idQuestRenovacao` int(11) NOT NULL,
  `segundaVia` tinyint(1) NOT NULL,
  `transfCorretagem` tinyint(1) NOT NULL,
  `relatorio` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela que gravará as respostas sobre a renovação';

-- --------------------------------------------------------

--
-- Estrutura da tabela `questtipoperfil`
--

CREATE TABLE `questtipoperfil` (
  `idtipoperfil` int(11) NOT NULL,
  `corretor` tinyint(1) NOT NULL,
  `atendente` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela que salvará os perfil utilizados de teste no chamados';

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipochamado`
--

CREATE TABLE `tipochamado` (
  `idTipoChamado` int(11) NOT NULL,
  `nomeTipoChamado` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tabela que grava os tipo de chamados';

--
-- Extraindo dados da tabela `tipochamado`
--

INSERT INTO `tipochamado` (`idTipoChamado`, `nomeTipoChamado`) VALUES
(1, 'INCIDENTE'),
(2, 'SOLICITAÇÃO'),
(3, 'PROBLEMA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposistema`
--

CREATE TABLE `tiposistema` (
  `idTipoSistema` int(11) NOT NULL,
  `nomeSistema` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela que salva os sistema que o questionario usa';

--
-- Extraindo dados da tabela `tiposistema`
--

INSERT INTO `tiposistema` (`idTipoSistema`, `nomeSistema`) VALUES
(1, 'PPWeb'),
(2, 'Venda'),
(3, 'Multicanal'),
(4, 'Teleport'),
(5, 'Sics'),
(6, 'Itau'),
(7, 'Azul'),
(8, 'Parceiros'),
(9, 'Multicalculo'),
(10, 'Analise');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idLogin` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela com conteudo do usuario';

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idLogin`, `login`, `senha`, `nome`, `email`, `perfil`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@teste.com.br', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chamado`
--
ALTER TABLE `chamado`
  ADD PRIMARY KEY (`idChamado`),
  ADD KEY `numChamado` (`numChamado`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indexes for table `questcontrolepermissao`
--
ALTER TABLE `questcontrolepermissao`
  ADD PRIMARY KEY (`idcontrolepermissao`);

--
-- Indexes for table `questdiferencialfuncional`
--
ALTER TABLE `questdiferencialfuncional`
  ADD PRIMARY KEY (`iddiferencialfuncional`);

--
-- Indexes for table `questdiferencialnegocio`
--
ALTER TABLE `questdiferencialnegocio`
  ADD PRIMARY KEY (`iddiferencialnegocio`);

--
-- Indexes for table `questdiferencialofertavenda`
--
ALTER TABLE `questdiferencialofertavenda`
  ADD PRIMARY KEY (`idquestdifvenda`);

--
-- Indexes for table `questfiltropesquisa`
--
ALTER TABLE `questfiltropesquisa`
  ADD PRIMARY KEY (`idFiltroPesquisa`);

--
-- Indexes for table `questionario`
--
ALTER TABLE `questionario`
  ADD PRIMARY KEY (`idQuestionario`),
  ADD KEY `numChamado` (`numChamado`);

--
-- Indexes for table `questorcamento`
--
ALTER TABLE `questorcamento`
  ADD PRIMARY KEY (`idorcamento`);

--
-- Indexes for table `questparametrizacao`
--
ALTER TABLE `questparametrizacao`
  ADD PRIMARY KEY (`idparametrizacao`);

--
-- Indexes for table `questprodutoofertado`
--
ALTER TABLE `questprodutoofertado`
  ADD PRIMARY KEY (`idquestprodofertado`);

--
-- Indexes for table `questpropostaazul`
--
ALTER TABLE `questpropostaazul`
  ADD PRIMARY KEY (`idpropostaazul`);

--
-- Indexes for table `questpropostaitau`
--
ALTER TABLE `questpropostaitau`
  ADD PRIMARY KEY (`idpropostaitau`);

--
-- Indexes for table `questpropostaporto`
--
ALTER TABLE `questpropostaporto`
  ADD PRIMARY KEY (`idpropostaporto`);

--
-- Indexes for table `questrelacionamento`
--
ALTER TABLE `questrelacionamento`
  ADD PRIMARY KEY (`idrelacionamento`);

--
-- Indexes for table `questrenovacao`
--
ALTER TABLE `questrenovacao`
  ADD PRIMARY KEY (`idQuestRenovacao`);

--
-- Indexes for table `questtipoperfil`
--
ALTER TABLE `questtipoperfil`
  ADD PRIMARY KEY (`idtipoperfil`);

--
-- Indexes for table `tipochamado`
--
ALTER TABLE `tipochamado`
  ADD PRIMARY KEY (`idTipoChamado`);

--
-- Indexes for table `tiposistema`
--
ALTER TABLE `tiposistema`
  ADD PRIMARY KEY (`idTipoSistema`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idLogin`),
  ADD KEY `indexAcesso` (`login`,`senha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chamado`
--
ALTER TABLE `chamado`
  MODIFY `idChamado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questcontrolepermissao`
--
ALTER TABLE `questcontrolepermissao`
  MODIFY `idcontrolepermissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `questdiferencialfuncional`
--
ALTER TABLE `questdiferencialfuncional`
  MODIFY `iddiferencialfuncional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `questdiferencialnegocio`
--
ALTER TABLE `questdiferencialnegocio`
  MODIFY `iddiferencialnegocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `questdiferencialofertavenda`
--
ALTER TABLE `questdiferencialofertavenda`
  MODIFY `idquestdifvenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `questfiltropesquisa`
--
ALTER TABLE `questfiltropesquisa`
  MODIFY `idFiltroPesquisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `questionario`
--
ALTER TABLE `questionario`
  MODIFY `idQuestionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `questorcamento`
--
ALTER TABLE `questorcamento`
  MODIFY `idorcamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `questparametrizacao`
--
ALTER TABLE `questparametrizacao`
  MODIFY `idparametrizacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `questprodutoofertado`
--
ALTER TABLE `questprodutoofertado`
  MODIFY `idquestprodofertado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `questpropostaazul`
--
ALTER TABLE `questpropostaazul`
  MODIFY `idpropostaazul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `questpropostaitau`
--
ALTER TABLE `questpropostaitau`
  MODIFY `idpropostaitau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `questpropostaporto`
--
ALTER TABLE `questpropostaporto`
  MODIFY `idpropostaporto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `questrelacionamento`
--
ALTER TABLE `questrelacionamento`
  MODIFY `idrelacionamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `questrenovacao`
--
ALTER TABLE `questrenovacao`
  MODIFY `idQuestRenovacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `questtipoperfil`
--
ALTER TABLE `questtipoperfil`
  MODIFY `idtipoperfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tipochamado`
--
ALTER TABLE `tipochamado`
  MODIFY `idTipoChamado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tiposistema`
--
ALTER TABLE `tiposistema`
  MODIFY `idTipoSistema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
