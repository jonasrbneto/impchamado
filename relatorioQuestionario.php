<?php 
require_once("validaAcesso.php");
require_once("cabecalho.php");
require_once("util/mostra-alerta.php");
require_once("dataSource/conecta.php");
require_once("questionarios/questionario/banco-questionario.php");

// Só concede acesso a essa página para usuários com nível de acesso igual e 2 ou mais
verificaUsuario(1);

$todosSistemas = array();
$todosSistemas = buscaTodosOsSistemasUtilizados($conexao);

$quantChamMes = array();
$quantChamMes = buscaQuantidadeDeChamadoPorMes($conexao);



?>



<!-- Carregar a API do google -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<!-- Preparar a geracao do grafico -->
<script type="text/javascript">

  function nomeMes(num){
    console.log("CHEGOU? "+num)
    NomeMes = new Array(12)
    NomeMes[0] = "Indefinido"
    NomeMes[1] = "Janeiro"
    NomeMes[2] = "Fevereiro"
    NomeMes[3] = "Março"
    NomeMes[4] = "Abril"
    NomeMes[5] = "Maio"
    NomeMes[6] = "Junho"
    NomeMes[7] = "Julho"
    NomeMes[8] = "Agosto"
    NomeMes[9] = "Setembro"
    NomeMes[10] = "Outubro"
    NomeMes[11] = "Novembro"
    NomeMes[12] = "Dezembro"

    return NomeMes[num];

  }

      // Carregar a API de visualizacao e os pacotes necessarios.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Especificar um callback para ser executado quando a API for carregada.
      google.setOnLoadCallback(desenharGrafico);
      google.setOnLoadCallback(desenharGraficoPie);

      /**
       * Funcao que preenche os dados do grafico
       */
       function desenharGrafico() {
         var valorJson = <?php echo('{"quantMes":'.json_encode($quantChamMes).'}');?> ;
        // Montar os dados usados pelo grafico
        var dados = new google.visualization.DataTable();
        dados.addColumn('string', 'Mês');
        dados.addColumn('number', 'Quantidade Por Mês');

        for (var i = 0; i < valorJson.quantMes.length; i++) {

         dados.addRow([nomeMes(Number(valorJson.quantMes[i].mes)), Number(valorJson.quantMes[i].quantChamMes) ]);
       }


        // Configuracoes do grafico
        var config = {
        	'title':'Quantidade Chamado por mês',
        	'width':550,
        	'height':500
        };

        // Instanciar o objeto de geracao de graficos de pizza,
        // informando o elemento HTML onde o grafico sera desenhado.
        var chart = new google.visualization.LineChart(document.getElementById('area_grafico_pie'));

        // Desenhar o grafico (usando os dados e as configuracoes criadas)
        chart.draw(dados, config);
      }

      function desenharGraficoPie() {
        var valorJson = <?php echo('{"quantSistema":'.json_encode($todosSistemas).'}');?> ;

        console.log(valorJson.quantSistema.length);

        // Montar os dados usados pelo grafico
        var dados = new google.visualization.DataTable();
        dados.addColumn('string', 'Nome Sistema');
        dados.addColumn('number', 'Quanti. Chamados');
        
        for (var i = 0; i < valorJson.quantSistema.length; i++) {
          dados.addRow([valorJson.quantSistema[i].nomeSistema, Number(valorJson.quantSistema[i].quantChamadoSistema) ]);
        }

        // Configuracoes do grafico
        var config = {
          'title':'Sistema Atendidos',
          'width':550,
          'height':500
        };

        // Instanciar o objeto de geracao de graficos de pizza,
        // informando o elemento HTML onde o grafico sera desenhado.
        var chart = new google.visualization.PieChart(document.getElementById('area_grafico'));

        // Desenhar o grafico (usando os dados e as configuracoes criadas)
        chart.draw(dados, config);
      }


    </script>
    <div >
      <div id="area_grafico" style="float: left; border: solid 1px;"></div>

      <div id="area_grafico_pie" style="float: left;border:  solid 1px;"></div>
    </div>
    <?php require_once("rodape.php");?>