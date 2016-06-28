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
          <?php
          include "dados2.php";
         ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard 2</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart','bar']});
              google.charts.setOnLoadCallback(faixaEtariaGenero);
              //google.charts.setOnLoadCallback(motivoReincidencia);
              google.charts.setOnLoadCallback(faixaEtariaPeriodo);
              google.charts.setOnLoadCallback(motivosGenero);
              google.charts.setOnLoadCallback(faixaEtariaSemana);

              function faixaEtariaSemana() {
                var data5 = new google.visualization.arrayToDataTable([
                  ['Faixa Etária', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                  ['Até 18 Anos', <?php echo $ate18[0]; ?>, <?php echo $ate18[1]; ?>, <?php echo $ate18[2]; ?>, <?php echo $ate18[3]; ?>, <?php echo $ate18[4]; ?>, <?php echo $ate18[5]; ?>, <?php echo $ate18[6]; ?>],
                  ['18 à 25 Anos', <?php echo $ate25[0]; ?>, <?php echo $ate25[1]; ?>, <?php echo $ate25[2]; ?>, <?php echo $ate25[3]; ?>, <?php echo $ate25[4]; ?>, <?php echo $ate25[5]; ?>, <?php echo $ate25[6]; ?>],
                  ['25 à 35 Anos', <?php echo $ate35[0]; ?>, <?php echo $ate35[1]; ?>, <?php echo $ate35[2]; ?>, <?php echo $ate35[3]; ?>, <?php echo $ate35[4]; ?>, <?php echo $ate35[5]; ?>, <?php echo $ate35[6]; ?>],
                  ['35 à 50 Anos', <?php echo $ate50[0]; ?>, <?php echo $ate50[1]; ?>, <?php echo $ate50[2]; ?>, <?php echo $ate50[3]; ?>, <?php echo $ate50[4]; ?>, <?php echo $ate50[5]; ?>, <?php echo $ate50[6]; ?>],
                  ['Acima de 50 anos', <?php echo $acima50[0]; ?>, <?php echo $acima50[1]; ?>, <?php echo $acima50[2]; ?>, <?php echo $acima50[3]; ?>, <?php echo $acima50[4]; ?>, <?php echo $acima50[5]; ?>, <?php echo $acima50[6]; ?>]
                ]);

                var options5 = {
                  width: 800,
                  heigth: 600,
                  chart: {
                    title: 'Faixa Etária por dia da Semana'
                  },
                  bars: 'vertical'
                };

                var chart = new google.charts.Bar(document.getElementById('faixaEtariaSemana'));
                chart.draw(data5, options5);
              }; 

              

              function motivosGenero() {
                var data1 = new google.visualization.arrayToDataTable([
                  ['Motivos', 'Masculino', 'Feminino'],
                  ['Preço alto', <?php echo $motivo1[0]; ?>, <?php echo $motivo1[1]; ?>],
                  ['Está fazendo pesquisa de preço', <?php echo $motivo2[0]; ?>, <?php echo $motivo2[1]; ?>],
                  ['Sem desconto', <?php echo $motivo3[0]; ?>, <?php echo $motivo3[1]; ?>],
                  ['Mau atendimento', <?php echo $motivo4[0]; ?>, <?php echo $motivo4[1]; ?>],
                  ['Acompanhante atrapalhou a venda', <?php echo $motivo5[0]; ?>, <?php echo $motivo5[1]; ?>],
                  ['Querem esperar o melhor dia de compra no cartão de credito', <?php echo $motivo6[0]; ?>, <?php echo $motivo6[1]; ?>],
                  ['Não gostou das formas de pagamentos disponiveis', <?php echo $motivo7[0]; ?>, <?php echo $motivo7[1]; ?>],
                  ['Diz ter visto melhor oferta em lojas virtuais', <?php echo $motivo8[0]; ?>, <?php echo $motivo8[1]; ?>],
                  ['Olhou o produto apenas por curiosidade', <?php echo $motivo9[0]; ?>, <?php echo $motivo9[1]; ?>],
                  ['Achou o prazo de entrega longo', <?php echo $motivo10[0]; ?>, <?php echo $motivo10[1]; ?>],
                  ['Não gostou da marca', <?php echo $motivo11[0]; ?>, <?php echo $motivo11[1]; ?>],
                  ['Não gostou do produto após provar', <?php echo $motivo12[0]; ?>, <?php echo $motivo12[1]; ?>]
                ]);

                var options1 = {
                  width: 800,
                  chart: {
                    title: 'Motivos por Gênero'
                  },
                  bars: 'horizontal'   
                };

                var chart = new google.charts.Bar(document.getElementById('motivosGenero'));
                chart.draw(data1, options1);
              };

              function faixaEtariaPeriodo() {
                var data3 = new google.visualization.arrayToDataTable([
                  ['Faixa Etária', 'Manhã', 'Tarde', 'Noite'],
                  ['Até 18 Anos', <?php echo $ate18periodo[0]; ?>, <?php echo $ate18periodo[1]; ?>, <?php echo $ate18periodo[2]; ?>],
                  ['18 à 25 Anos', <?php echo $ate25periodo[0]; ?>, <?php echo $ate25periodo[1]; ?>, <?php echo $ate25periodo[2]; ?>],
                  ['25 à 35 Anos', <?php echo $ate35periodo[0]; ?>, <?php echo $ate35periodo[1]; ?>, <?php echo $ate35periodo[2]; ?>],
                  ['35 à 50 Anos', <?php echo $ate50periodo[0]; ?>, <?php echo $ate50periodo[1]; ?>, <?php echo $ate50periodo[2]; ?>],
                  ['Acima de 50 anos', <?php echo $acima50periodo[0]; ?>, <?php echo $acima50periodo[1]; ?>, <?php echo $acima50periodo[2]; ?>]
                ]);

                var options3 = {
                  width: 800,
                  chart: {
                    title: 'Faixa Etária por periodo do dia'
                  },
                  bars: 'vertical'
                };

                var chart = new google.charts.Bar(document.getElementById('faixaEtariaPeriodo'));
                chart.draw(data3, options3);
              };

              function faixaEtariaGenero() {
                var data = new google.visualization.arrayToDataTable([
                  ['Faixa Etária', 'Masculino', 'Feminino'],
                  ['Até 18 Anos', <?php echo $ate18genero[0]; ?>, <?php echo $ate18genero[1]; ?>],
                  ['18 à 25 Anos', <?php echo $ate25genero[0]; ?>, <?php echo $ate25genero[1]; ?>],
                  ['25 à 35 Anos', <?php echo $ate35genero[0]; ?>, <?php echo $ate35genero[1]; ?>],
                  ['35 à 50 Anos', <?php echo $ate50genero[0]; ?>, <?php echo $ate50genero[1]; ?>],
                  ['Acima de 50 anos', <?php echo $acima50genero[0]; ?>, <?php echo $acima50genero[1]; ?>]
                ]);

                var options = {
                  width: 800,
                  chart: {
                    title: 'Faixa Etária por Gênero'
                  },
                  bars: 'vertical'
                };

                var chart = new google.charts.Bar(document.getElementById('faixaEtariaGenero'));
                chart.draw(data, options);
              }; 

              /*function motivoReincidencia() {
                var data2 = google.visualization.arrayToDataTable([
                  ['Motivos', 'Sim', 'Não'],
                  ['Preço alto', <?php  echo $motivo1reincidente[0]?>, <?php  echo $motivo1reincidente[1]?>],
                  ['Está fazendo pesquisa de preço', <?php  echo $motivo2reincidente[0]?>, <?php  echo $motivo2reincidente[1]?>],
                  ['Sem desconto', <?php  echo $motivo3reincidente[0]?>, <?php  echo $motivo3reincidente[1]?>],
                  ['Mau atendimento', <?php  echo $motivo4reincidente[0]?>, <?php  echo $motivo4reincidente[1]?>],
                  ['Acompanhante atrapalhou a venda', <?php  echo $motivo5reincidente[0]?>, <?php  echo $motivo5reincidente[1]?>],
                  ['Esperam melhor dia de compra no cartão', <?php  echo $motivo6reincidente[0]?>, <?php  echo $motivo6reincidente[1]?>],
                  ['Não gostou das formas de pagamentos', <?php  echo $motivo7reincidente[0]?>, <?php  echo $motivo7reincidente[1]?>],
                  ['Visualizou melhor oferta em lojas virtuais', <?php  echo $motivo8reincidente[0]?>, <?php  echo $motivo8reincidente[1]?>],
                  ['Olhou o produto apenas por curiosidade', <?php  echo $motivo9reincidente[0]?>, <?php  echo $motivo9reincidente[1]?>],
                  ['Achou o prazo de entrega longo', <?php  echo $motivo10reincidente[0]?>, <?php  echo $motivo10reincidente[1]?>],
                  ['Não gostou da marca', <?php  echo $motivo11reincidente[0]?>, <?php  echo $motivo11reincidente[1]?>],
                  ['Não gostou do produto após provar', <?php  echo $motivo12reincidente[0]?>, <?php  echo $motivo12reincidente[1]?>]
                ]);

                var options2 = {
                  width: 800,
                    chart: {
                      title: 'Motivo por Reincidência'
                    },
                    bars: 'horizontal', // Required for Material Bar Charts.
                };

                var chart = new google.charts.Bar(document.getElementById('motivoReincidencia'));
                chart.draw(data2, options2);
              }*/
            </script>

            <!--<script type="text/javascript">
              google.charts.load('current', {packages: ['corechart', 'bar']});
              google.charts.setOnLoadCallback(motivosFaixaEtaria);

              function motivosFaixaEtaria() {
                    var data = google.visualization.arrayToDataTable([
                      ['Motivos', 'Ate 18 Anos', '18 a 25 Anos', '25 a 35 Anos', '35 a 50 Anos', 'Acima de 50 Anos']]
                      ['Preço alto', 3200, 3000,2000,1500,2000],
                      ['Está fazendo pesquisa de preço', 3200, 3000,2000,1500,2000],
                      ['Sem desconto', 3200, 3000,2000,1500,2000],
                      ['Mau atendimento', 3200, 3000,2000,1500,2000],
                      ['Acompanhante atrapalhou a venda', 3200, 2000,2000,1500,2000],
                      ['Esperam melhor dia de compra no cartão', 3200, 3000,2000,1500,2000],
                      ['Não gostou das formas de pagamentos', 3200, 3000,2000,1500,2000],
                      ['Visualizou melhor oferta em lojas virtuais', 3200, 3000,2000,1500,2000],
                      ['Olhou o produto apenas por curiosidade', 3200, 3000,2000,1500,2000],
                      ['Achou o prazo de entrega longo', 3200, 3000,2000,1500,2000],
                      ['Não gostou da marca', 3200, 3000,2000,1500,2000],
                      ['Não gostou do produto após provar', 3200, 3000,2000,1500,2000]
                    ]);

                    var options = {
                      chart: {
                        title: 'Motivos por Faixa Etária',
                      },
                      bars: 'horizontal',
                      axes: {
                        y: {
                          0: {side: 'left'}
                        }
                      }
                    };
                    var material = new google.charts.Bar(document.getElementById('motivosFaixaEtaria'));
                    material.draw(data, options);
                  }
            </script>-->

            <div class="row">
                <div class="col-lg-12">
                  <div id="faixaEtariaSemana"></div>  
                </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div id="motivosGenero"></div>
              </div>
            </div>
            <!--<div class="row">
              <div class="col-lg-12">
                <div id="motivosFaixaEtaria"></div>
              </div>
            </div>-->
            <div class="row">
              <div class="col-lg-12">
                <div id="faixaEtariaPeriodo"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div id="faixaEtariaGenero"></div>
              </div>
            </div>
            <!--<div class="row">
              <div class="col-lg-12">
                <div id="motivoReincidencia"></div>
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