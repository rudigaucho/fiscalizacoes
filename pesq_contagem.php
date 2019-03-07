<?php include "conn.php"; ?>
<?php 

session_start();


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="img/logo_serede.png">

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



<nav class="navbar navbar-inverse">
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
        <th>PDF</th>
        
        
        
        
         
        
      
       
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
        <td> <a href="pdf.php?protocolo=<?php echo $dado["protocolo"];?>" target="_blank" class="btn btn-info btn-xs active" role="button" aria-pressed="true">Gerar Pdf</a></td>




  <?php }  }   
   
    ?>



    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>
<?php 

if (isset($_POST ['ok']) )
{

$id =$_POST['id'];
$serie =$_POST['n_serie'];


$query = "insert into carga_colaborador (n_serie,id_col,data)";
$query.= "values ('$serie','$id',NOW())";
$query2 = "delete from pendente where n_serie = '$serie'";

$sql = mysql_query($query);
$sql2 = mysql_query($query2);
if($sql && $sql2)
{
  
  echo "<h2>Enviado com sucesso!</h2>";
  echo "<script>loginsuccessfully()</script>";
  
}
else
{
  
  echo "Erro no cadastro!";
  
}







}

?>



</body>
</html>

