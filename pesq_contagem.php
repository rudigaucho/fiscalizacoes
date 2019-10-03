<?php include "conn.php"; ?>
<?php 

session_start();


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<style>
img{


width:60%;
height:70%;

}

figure {
  
  
  font-style: italic;
  font-size: smaller;
  text-indent: 0;
  border: thin silver solid;
  
}

figcaption {


font-size:20px;




}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="img/logo_serede.png">

<script language="Javascript">
function confirmacao(protocolo) {
     var resposta = confirm("Deseja remover esse registro?");
 
     if (resposta == true) {
          window.location.href = "deletar.php?protocolo="+protocolo;
     }
}
</script>

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio </x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');
    }

}





</script>


  <link rel="icon" href="img/key.png">
  <title>Fiscalizações</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<nav class="navbar navbar-inverse" style="background-image: url('img/buss.jpg');">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Serede</a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li class="active" style="float:right"> <a href="#" id="test" onClick="javascript:fnExcelReport();">Gerar excel</a></li>
      
      <li class="active" style="float:right"><a href="dashboard.php">Voltar</a></li>
      
      
      
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

<div class="container">
 
  
 

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
        <th>CLIENTE</th>
        <th>CCTO</th>
        <th>DATA</th>
        <th>TIPO</th>
        <th>GA</th>
        <th>TÉCNICO</th>
        <th>FOTOS</th>
        <th>PDF</th>
        <th>DELETAR</th>
        
        
        
        
         
        
      
       
      </tr>
    </thead>
  
  <?php


    
    $ga = $_GET['ga'];

   


$sql = mysql_query ("select  * from fiscal  where  nome_ga = '$ga'  and  week(data) = week(NOW())   and year(data) = year(now())" );

$sql2 = mysql_query ("select  * from fiscal  where  nome_ga = '$ga'  and  week(data) = week(NOW())   and year(data) = year(now())" );
    

  




$row = mysql_num_rows($sql);
$row2 = mysql_num_rows($sql2);

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql )){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody>
      <tr class="success">
        <td> <?php echo $dado ["cliente"];  ?></td>
        <td> <?php echo $dado ["ccto"];  ?></td>
        <td> <?php echo $dado ["data"];  ?></td>
        <td> <?php echo $dado ["tipo"];  ?></td>
        <td> <?php echo $dado ["nome_ga"];  ?></td>
        <td> <?php echo $dado ["tecnico"];  ?></td>
        <td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['protocolo'];  ?>" >Visualizar</button> </td>
        <td> <a href="pdf.php?protocolo=<?php echo $dado["protocolo"];?>" target="_blank" class="btn btn-info btn-xs active" role="button" aria-pressed="true">Gerar Pdf</a></td>
        <td> <a href="javascript:func()"
onclick="confirmacao('<?php echo $dado['protocolo'];?>')" class="btn btn-danger btn-xs active" role="button" aria-pressed="true">Deletar</a></td>

        <?php
        $foto1 = $dado ["foto1"];
        $foto2 = $dado ["foto2"];
        $foto3 = $dado ["foto3"];
        $foto4 = $dado ["foto4"];

        $leg1 = $dado ["leg1"];
        $leg2 = $dado ["leg2"];
        $leg3 = $dado ["leg3"];
        $leg4 = $dado ["leg4"];
        ?>
   <div class="modal fade" id="myModal<?php echo $dado["protocolo"];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">FOTOS <h4>
          

         
          


        <div class="modal-header" style="float:right; margin-top:-26%; margin-right:5%;">
        
            </div>
         
        
        </h4>
        <div class="modal-body">


        
        <?php echo "<figure> <img src='fotos/$foto1' class='img-rounded' alt='' >" ?>
        <?php echo "<figcaption> $leg1 </figcaption></figure>" ?><br>

        <?php echo "<figure> <img src='fotos/$foto2' class='img-rounded' alt='' >" ?>
        <?php echo "<figcaption> $leg2 </figcaption></figure>" ?><br>

        <?php echo "<figure> <img src='fotos/$foto3' class='img-rounded' alt='' >" ?>
        <?php echo "<figcaption> $leg3 </figcaption></figure>" ?><br>

        <?php echo "<figure> <img src='fotos/$foto4' class='img-rounded' alt='' >" ?>
        <?php echo "<figcaption> $leg4 </figcaption></figure>" ?>


        
        


        

         

        
            

        </div>
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          
        </div>
      </div>
      
    </div>
  </div>
  
</div>


  <?php }  }   
   
    ?>



    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>

  
</div>



</body>
</html>

