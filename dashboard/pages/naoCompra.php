<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NãoCompra - Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../index.php">Não Compra</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="naoCompra.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="naoCompraa.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard 2</a>
                        </li>
                        <li>
                            <a href="naoCompraTabela.php"><i class="fa fa-table fa-fw"></i> Tabela</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <?php
              include "dados.php";
            ?>

            <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart', 'bar']});
              google.charts.setOnLoadCallback(desenharGraficoGenero);
              google.charts.setOnLoadCallback(desenharGraficoFaixaEtaria);
              google.charts.setOnLoadCallback(desenharGraficoPeriodo);
              google.charts.setOnLoadCallback(desenharGraficoMotivo);
              google.charts.setOnLoadCallback(desenharGraficoReincidente);
              google.charts.setOnLoadCallback(desenharGraficoDiaDaSemana);

              function desenharGraficoGenero() {
                var dados = new google.visualization.DataTable();
                dados.addColumn('string', 'Gênero');
                dados.addColumn('number', 'Quantidades');
                dados.addRows([
                  ['Masculino', <?php echo $generoMasculino; ?>],
                  ['Feminino', <?php echo $generoFeminino; ?>]
                ]);
                var config = {
                    title: 'Quantidade de pesquisados por Gênero',
                    width: 400,
                    height: 300,
                    pieHole: 0.4
                };
                var chart = new google.visualization.PieChart(document.getElementById('genero'));
                chart.draw(dados, config);
              }

              function desenharGraficoFaixaEtaria() {
                var dados = new google.visualization.DataTable();
                dados.addColumn('string', 'Gênero');
                dados.addColumn('number', 'Quantidades');
                dados.addRows([
                  ['Ate 18 Anos', <?php echo $ate18; ?>],
                  ['18 a 25 Anos', <?php echo $ate25; ?>],
                  ['25 a 35 Anos', <?php echo $ate35; ?>],
                  ['35 a 50 Anos', <?php echo $ate50; ?>],
                  ['Acima de 50 Anos', <?php echo $acima50; ?>]
                ]);
                var config = {
                    'title':'Quantidade de pesquisados por Faixa Etária',
                    'width':400,
                    'height':300
                };
                var chart = new google.visualization.PieChart(document.getElementById('faixaEtaria'));
                chart.draw(dados, config);
              }

              function desenharGraficoPeriodo() {
              var dados = new google.visualization.DataTable();
              dados.addColumn('string', 'Gênero');
              dados.addColumn('number', 'Quantidades');
              dados.addRows([
                ['Manha', <?php echo $periodoManha; ?>],
                ['Tarde', <?php echo $periodoTarde; ?>],
                ['Noite', <?php echo $periodoNoite; ?>]
              ]);
              var config = {
                  'title':'Quantidade de pesquisados por Período',
                  'width':400,
                  'height':300
              };
              var chart = new google.visualization.PieChart(document.getElementById('periodo'));
              chart.draw(dados, config);
            }

            function desenharGraficoMotivo() {
              var dados = new google.visualization.DataTable();
              dados.addColumn('string', 'Gênero');
              dados.addColumn('number', 'Quantidades');
              dados.addRows([
                ['Preço elevado', <?php echo $motivo1; ?>],
                ['Acompanhante opinando', <?php echo $motivo5; ?>],
                ['Não gostou da Marca', <?php echo $motivo11; ?>],
                ['Esta apenas pesquisando', <?php echo $motivo2; ?>],
                ['Sem Desconto', <?php echo $motivo3; ?>],
                ['Espera melhor dia de Cartão', <?php echo $motivo4; ?>],
                ['Curiosidade', <?php echo $motivo4; ?>],
                ['Prazo de entrega longo', <?php echo $motivo4; ?>],
                ['Não gostou do produto após provar', <?php echo $motivo4; ?>],
                ['Viu ofertar melhor em loja virtual', <?php echo $motivo4; ?>],
                ['Mau atendimento', <?php echo $motivo4; ?>],
                ['Não gostou das formas de pagamentos', <?php echo $motivo4; ?>]
              ]);
              var config = {
                  'title':'Quantidade de pesquisados por Motivos',
                  'width':600,
                  'height':600
              };
              var chart = new google.visualization.PieChart(document.getElementById('motivo'));
              chart.draw(dados, config);
            }

            function desenharGraficoReincidente() {
              var dados = new google.visualization.DataTable();
              dados.addColumn('string', 'Gênero');
              dados.addColumn('number', 'Quantidades');
              dados.addRows([
                ['Sim', <?php echo $reincidenciaSim; ?>],
                ['Não', <?php echo $reincidenciaNao; ?>]
              ]);
              var config = {
                  'title':'Quantidade de pesquisados por Reincidência ou Não',
                  'width':400,
                  'height':300,
                  'pieHole': 0.4
              };
              var chart = new google.visualization.PieChart(document.getElementById('reincidente'));
              chart.draw(dados, config);
            }

            function desenharGraficoDiaDaSemana() {

                  var data = google.visualization.arrayToDataTable([
                    ["Dias da Semana", "Quantidades", { role: "style" } ],
                    ["Domingo", <?php echo $semanaSegunda; ?>, "#b87333"],
                    ["Segunda", <?php echo $semanaTerca; ?>, "silver"],
                    ["Terça", <?php echo $semanaQuarta; ?>, "red"],
                    ["Quarta", <?php echo $semanaQuinta; ?>, "gold"],
                    ["Quinta", <?php echo $semanaSexta; ?>, "color: #e5e4e2"],
                    ["Sexta", <?php echo $semanaSabado; ?>, "blue"],
                    ["Sábado", <?php echo $semanaDomingo; ?>, "orange"],
                  ]);

                  var options = {
                    title: 'Quantidade por dia da semana',
                    chartArea: {width: '50%'},
                    hAxis: {
                      title: 'Quantidade',
                      minValue: 0
                    },
                    vAxis: {
                      title: 'Dias da semana'
                    }
                  };

                  var chart = new google.visualization.BarChart(document.getElementById('diaDaSemana'));

                  chart.draw(data, options);
                }
            </script>

            <div class="row">
                <div class="col-lg-6">
                    <div id="genero"></div>
                </div>

                <div class="col-lg-6">
                    <div id="faixaEtaria"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div id="diaDaSemana"></div>
                </div>

                <div class="col-lg-6">
                    <div id="periodo"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div id="motivo"></div>
                </div>
                <div class="col-lg-6">
                    <div id="reincidente"></div>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-lg-12">
                  <div id="faixaEtariaSemana"></div>  
                </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div id="motivosGenero"></div>
              </div>
            </div>-->
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../bower_components/flot/excanvas.min.js"></script>
    <script src="../bower_components/flot/jquery.flot.js"></script>
    <script src="../bower_components/flot/jquery.flot.pie.js"></script>
    <script src="../bower_components/flot/jquery.flot.resize.js"></script>
    <script src="../bower_components/flot/jquery.flot.time.js"></script>
    <script src="../bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../js/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
