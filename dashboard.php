<?php 
      include "conn.php"; 
      
      include "grafico.php"; 


       


     
      
      /* inicia a sessão */
      
     
      
      
     

session_start();








if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
{
  header("Location: index.html");
  exit;
  
  
}



 
      ?>







<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="img/logo_serede.png">
   <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript" src="loader.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       
   
    

       <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'PR REPETIDO', 'PR P. AÇÃO', 'SC REPETIDO', 'SC P. AÇÃO', '', 'TOTAL PR/SC'],
          ['JAN',  <?php echo $jan_rep_pr ?>,     <?php echo $jan_acao_pr ?>,         <?php echo $jan_rep_sc ?>,             <?php echo $jan_acao_sc ?>,           0,      <?php echo $jan_media ?>],
          ['FEV',  <?php echo $fev_rep_pr ?>,     <?php echo $fev_acao_pr ?>,         <?php echo $fev_rep_sc ?>,             <?php echo $fev_acao_sc ?>,           0,      <?php echo $fev_media ?>],
          ['MAR',  <?php echo $mar_rep_pr ?>,     <?php echo $mar_acao_pr ?>,         <?php echo $mar_rep_sc ?>,             <?php echo $mar_acao_sc ?>,           0,      <?php echo $mar_media ?>],
          ['ABR',  <?php echo $abr_rep_pr ?>,     <?php echo $abr_acao_pr ?>,         <?php echo $abr_rep_sc ?>,             <?php echo $abr_acao_sc ?>,           0,      <?php echo $abr_media ?>],
          ['MAI', <?php echo $mai_rep_pr ?>,     <?php echo $mai_acao_pr ?>,         <?php echo $mai_rep_sc ?>,             <?php echo $mai_acao_sc ?>,           0,      <?php echo $mai_media ?>],
          ['JUN', <?php echo $jun_rep_pr ?>,     <?php echo $jun_acao_pr ?>,         <?php echo $jun_rep_sc ?>,             <?php echo $jun_acao_sc ?>,           0,      <?php echo $jun_media ?>],
          ['JUL',  <?php echo $jul_rep_pr ?>,     <?php echo $jul_acao_pr ?>,         <?php echo $jul_rep_sc ?>,             <?php echo $jul_acao_sc ?>,           0,      <?php echo $jul_media ?>],
          ['AGO',  <?php echo $ago_rep_pr ?>,     <?php echo $ago_acao_pr ?>,         <?php echo $ago_rep_sc ?>,             <?php echo $ago_acao_sc ?>,           0,      <?php echo $ago_media ?>],
          ['SET',  <?php echo $sete_rep_pr ?>,     <?php echo $sete_acao_pr ?>,         <?php echo $sete_rep_sc ?>,             <?php echo $sete_acao_sc ?>,           0,      <?php echo $sete_media ?>],
          ['OUT', <?php echo $outu_rep_pr ?>,     <?php echo $outu_acao_pr ?>,         <?php echo $outu_rep_sc ?>,             <?php echo $outu_acao_sc ?>,           0,      <?php echo $outu_media ?>],
          ['NOV', <?php echo $nov_rep_pr ?>,     <?php echo $nov_acao_pr ?>,         <?php echo $nov_rep_sc ?>,             <?php echo $nov_acao_sc ?>,           0,      <?php echo $nov_media ?>],
          ['DEZ',  <?php echo $dez_rep_pr ?>,     <?php echo $dez_acao_pr ?>,         <?php echo $dez_rep_sc ?>,             <?php echo $dez_acao_sc ?>,           0,      <?php echo $dez_media ?>]
        ]);

        var options = {
          title : 'REPETIDO / PLANO AÇÃO PR SC',
          vAxis: {title: 'PR SC'},
          hAxis: {title: 'ANO: <?php echo date('Y') ?>'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }


      </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Fiscalizações', 'OS', 'BD'],
          ['JAN', <?php echo $JAN ?>, <?php echo $JAN_OS ?>, <?php echo $JAN_BD ?>],
          ['FEV', <?php echo $FEV ?>,<?php echo $FEV_OS ?>, <?php echo $FEV_BD ?>],
          ['MAR', <?php echo $MAR ?>, <?php echo $MAR_OS ?>, <?php echo $MAR_BD ?>],
          ['ABR', <?php echo $ABR ?>, <?php echo $ABR_OS ?>, <?php echo $ABR_BD ?>],
          ['MAI', <?php echo $MAI ?>, <?php echo $MAI_OS ?>, <?php echo $MAI_BD ?>],
          ['JUN', <?php echo $JUN ?>, <?php echo $JUN_OS ?>, <?php echo $JUN_BD ?>],
          ['JUL', <?php echo $JUL ?>, <?php echo $JUL_OS ?>, <?php echo $JUL_BD ?>],
          ['AGO', <?php echo $AGO ?>, <?php echo $AGO_OS ?>, <?php echo $AGO_BD ?>],
          ['SET', <?php echo $SET ?>, <?php echo $SETE_OS ?>, <?php echo $SETE_BD ?>],
          ['OUT', <?php echo $OUT ?>, <?php echo $OUT_OS ?>, <?php echo $OUT_BD ?>],
          ['NOV', <?php echo $NOV ?>,<?php echo $NOV_OS ?>, <?php echo $NOV_BD ?>],
          ['DEZ', <?php echo $DEZ ?>,<?php echo $DEZ_OS ?>, <?php echo $DEZ_BD ?>]
        ]);

        var options = {
          chart: {
            title: 'Total Fiscalizações de  <?php echo date('Y') ?>',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <script type="text/javascript" src="loader.js"></script>
    




<script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff2);

      function drawStuff2() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Atividades'],
          ['OS 1', <?php echo $OS_1 ?>],
          ['OS 2', <?php echo $OS_2 ?>],
          ['OS 3', <?php echo $OS_3 ?>],
          ['OS 4', <?php echo $OS_4 ?>],
          ['OS 5', <?php echo $OS_5 ?>],
          ['OS 6', <?php echo $OS_6 ?>],
          ['OS 7', <?php echo $OS_7 ?>],
          ['OS 8', <?php echo $OS_8 ?>],
          ['OS 9', <?php echo $OS_9 ?>],
          ['OS 10', <?php echo $OS_10 ?>],
          ['OS 11', <?php echo $OS_11 ?>]
          
          
         
          
        ]);

        var options = {
          width: 900,
          legend: { position: 'none' },
          chart: {
            title: 'Total de atividades por gestor ano OS <?php echo date('Y') ?>',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'Equipes'} // Top x-axis.
            }
          },
          bar: { groupWidth: "80%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div2'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

<script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['OS',    <?php echo $OS ?>],
          ['BD',    <?php echo $BD ?>]
          
        ]);

        var options = {
          title: 'Tipo de fiscalizações mês <?php echo date('M') ?> ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


  
 



  


  





  


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fiscalizações</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
 <meta http-equiv="refresh" content="120; url=dashboard.php"> 


</head>

<body >

    <div id="wrapper" >

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"  style="background-image: url('img/buss.jpg');">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation.</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

        
            <!-- Top Menu Items -->
            <ul  class="nav navbar-right top-nav"  > 
                <a  class="navbar-brand" href="#" > <?php echo $_SESSION["nome"]?></a>
              
                <li class="dropdown"  >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>   <b class="caret"></b></a>
                    <ul class="dropdown-menu" >
                       
                      <!--
                        <li>
                            <a href="modifica_senha.php"><i class="fa fa-fw fa-gear"></i> Trocar senha</a> 
                        </li> 
                        <li class="divider"></li> -->
                        <li >
                            <a href="Logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse"  >
                <ul class="nav navbar-nav side-nav"  style="background-color:black;">
                  
                   <li class="dropdown" style="background-color:black;" >

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-scale" > MENU</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
        <?php if($_SESSION["acesso"] == 'ADM') { ?>
          <li style="background:black;"></li>
        <?php } else {?>

      
        <li style="background:black;"><a href="cad_fiscal.php"><span class="glyphicon glyphicon-pencil"> CAD.FISCAL </a></li>
        <?php } ?>
          <li style="background:black;"><a href="pesq_per.php"><span class="glyphicon glyphicon-calendar"> BUSCA.FISCAL</a>

          <li style="background:black;"><a href="central.html"><span class="glyphicon glyphicon-home"> ESTAÇÃO PR/SC </a></li>


          
            <li style="background:black;"><a href="cad_rep.php"><span class="glyphicon glyphicon-pencil"> CAD.REPETIDO </a></li>
            <li style="background:black;"><a href="pesq_rep.php"><span class="glyphicon glyphicon-calendar"> BUSCA.REPETIDO</a>
        
          
          
                 
                
        
        </ul>


        

        
      </li>
      
      
     

               
                   
                   
                </ul>
               


            </div>


            
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div  class="row" >
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Controle</small>

                        </h1>
                       
                        <ol class="breadcrumb">
                            <li class="active">
                                <i> <h4>Relatório Gráfico fiscalizações</h4></i>
                                  
                            </li>
                        </ol>

                    </div>
                </div>
                <!-- /.row -->

           
                <!-- /.row -->

                <?php 

$sql = mysql_query ("SELECT fiscal.tecnico,ga.nome,ga.uf,ga.local,(SELECT count(*) from fiscal where ga.nome= fiscal.nome_ga and  week(data) = week(NOW())   and year(data) = year(now()) ) as total from fiscal JOIN ga
on ga.protocolo = fiscal.protocolo order by uf,nome" );


$sql2 = mysql_query ("SELECT ga.nome,ga.uf,ga.local,(SELECT count(*) from repetido where ga.nome= repetido.nome_ga and  MONTH(data) = MONTH(NOW())   and year(data) = year(now()) ) as total2 from repetido JOIN ga
on ga.protocolo = repetido.protocolo order by uf,nome" );




$row = mysql_num_rows($sql);
$row2 = mysql_num_rows($sql2);


if (mysql_num_rows($sql) > 0){

 

?>
<span> <strong> Contagem de Fiscalizações da semana vigente</strong></span><br><br>

                <table class="table" >
  <thead>
    <tr>
      <th scope="col">GA</th>
      <th scope="col">FISCALIZAÇÕES</th>
      <th scope="col">REPETIDOS</th>
      <th scope="col">UF</th>
      <th scope="col">LOCAL</th>
      
      
    </tr>
  </thead>
  <tbody>

  <?php  while ($dado = mysql_fetch_assoc($sql)){
    $dado2 = mysql_fetch_assoc($sql2); ?>
    <tr>
    
      <td><?php echo $dado ["nome"];  ?></td>
      <?php if($dado ["total"] >= 2) { ?>
      <td><span class="label label-success" style="font-size:16px;" ><a style="color:black;" href="pesq_contagem.php?ga=<?php echo $dado ["nome"];  ?>"><?php echo $dado ["total"]; ?></span></a></td>  
      
      <?php } if($dado ["total"] == 0) { ?>
        <td><span class="label label-danger" style="font-size:16px;" ><a style="color:black;" href="pesq_contagem.php?ga=<?php echo $dado ["nome"];  ?>"><?php echo $dado ["total"]; ?></span></a></td>
        <?php } ?>

        <?php  if($dado ["total"] == 1) { ?>
        <td><span class="label label-warning" style="font-size:16px;" ><a style="color:black;" href="pesq_contagem.php?ga=<?php echo $dado ["nome"];  ?>"><?php echo $dado ["total"]; ?></span></a></td>
        <?php } ?>

        <td><a style="color:black;" href="pesq_contagem2.php?ga=<?php echo $dado2 ["nome"];  ?>"><?php echo $dado2 ["total2"]; ?></span></a></td>

      <td><?php echo $dado ["uf"]; ?></td>
      <td><?php echo $dado ["local"]; ?></td>
      
      
    </tr>
    <?php  }} ?> 
  </tbody>
</table>


<?php


$sql = mysql_query ("select count(tecnico) as conta,tecnico,nome_ga from fiscal where MONTH(data) = MONTH(NOW())   and year(data) = year(now()) group by tecnico order by nome_ga,tecnico" );




$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0){

 

?>
<br><br></b><span> <strong>Consolidação de serviços mês <?php echo date('M') ?> </strong></span><br><br>

<table id="myTable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">TÉCNICO</th>
      <th scope="col">FISCALIZAÇÕES</th>
      <th scope="col">GA</th>
      
     
      
      
      
    </tr>
  </thead>
  <tbody>

  <?php  while ($dado = mysql_fetch_assoc($sql)){
    $dado2 = mysql_fetch_assoc($sql2); ?>
    <tr>
      
      <td><?php echo $dado ["tecnico"];  ?></td>
      <td><?php echo $dado ["conta"]; ?></td>
      <td><?php echo $dado ["nome_ga"];  ?></td>
      
      

     
      
      
    </tr>
    <?php }} ?> 
    
  </tbody>
 
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> 
 <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
 $(document).ready( function () {
    $('#myTable').DataTable({
      "language": {
            "lengthMenu": "Mostrando _MENU_ registros por página",
            
            "zero registros": "Nada encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro",
            
            "infoFiltered": "(filtrando de _MAX_ total de registros)"
        }



    });
} );

</script>






                <br><br><div id="columnchart_material" style="width: 800px; height: 500px;"></div><br><br>
                <div id="chart_div" style="width: 1050px; height: 500px;"></div>
                <div id="piechart_3d" style="width: 900px; height: 500px;"></div>

                
                

                <?php /*

$sql = mysql_query ("select  celula,count(*) as total,sum(total_enc) as encerradas from CELULAS  group by celula" );




$row = mysql_num_rows($sql);


if (mysql_num_rows($sql) > 0){*/



?>



                



























                <!-- /.row -->



               
              <p style="margin-right:9%; font-size: 10px;"><strong>© Copyright Desenvolvimento Rudinei Rossales  </strong></p>

</body>

</html>
