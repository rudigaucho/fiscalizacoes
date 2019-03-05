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
 
  
  <form class="form-inline" role="form"  method="POST" action="pesq_per.php"  style="margin-left:10%;">
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;} </style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div style="float:left;" class="bootstrap-iso">
  
  <div class="row">
   <label  for="data">
      Período
      </label>
    
     <div class="form-group ">
      
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="DE" type="text"  autocomplete="off" required/>
        <input class="form-control" id="date2" name="date2" placeholder="ATÉ"  autocomplete="off" type="text" required/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
 $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>
<script>
 $(document).ready(function(){
  var date_input=$('input[name="date2"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
   orientation: 'top',
  })
 })
</script>
    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
</div>

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
        <th>CLIENTE</th>
        <th>CCTO</th>
        <th>DATA</th>
        <th>TIPO</th>
        <th>GA</th>
        <th>PDF</th>
        
        
        
        
         
        
      
       
      </tr>
    </thead>
  
  <?php
if (isset($_POST ['submit']) )
{

    $data = $_POST['date'];
    $data2 = $_POST['date2'];

    if($_SESSION['acesso'] == "GA" )
    {


$sql = mysql_query ("select * from fiscal where data BETWEEN '$data' and '$data2' and id_ga = '".$_SESSION['id']."' order by tecnico" );

$sql2 = mysql_query ("select * from fiscal where data BETWEEN '$data' and '$data2' and id_ga = '".$_SESSION['id']."' order by tecnico" );
    }

    else
    {

        $sql = mysql_query ("select * from fiscal where data BETWEEN '$data' and '$data2' group by nome_ga" );

        $sql2 = mysql_query ("select * from fiscal where data BETWEEN '$data' and '$data2'  group by nome_ga" );




    }




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
        <td> <a href="pdf.php?protocolo=<?php echo $dado["protocolo"];?>" target="_blank" class="btn btn-info btn-xs active" role="button" aria-pressed="true">Gerar Pdf</a></td>




  <?php }  } }   
   
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

