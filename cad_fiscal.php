



<!DOCTYPE html>



<html lang="pt-br">
<head>

  <?php session_start(); ?>

 <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
<link rel="icon" href="img/serede.png">






<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">

<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">



<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacao.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>









<link rel="icon" href="img/logo_oi.ico">




<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
  .container-fluid
  {
  background-color: orange;
  }
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
  <title>CADASTRO DE FISCALIZAÇÕES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

</head>
<body>


<?php 

 include "conn.php";

/* session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'GA' ))
{
  header("Location: index.html");
  exit;
  
  
} */



?>




  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
       
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dashboard.php">Voltar</a></li>
      
        
       


 
      
 
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>


<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

   

  <form class="form" role="form" name="seachform" method="post" action="enviar.php " enctype="multipart/form-data" >

   

  <div class="form-group">

      <label for="email">Cliente:</label>  
      <input type="text" class="form-control" id="cliente" name="cliente"  maxlength="65" required >
    </div>

    
    <div class="form-group">

      <label for="email">Ccto:</label>  
      <input type="text" class="form-control"  name="ccto"  maxlength="7" required >
    </div>
    <div class="form-group">

      <label for="email">Endereço:</label>  
      <input type="text" class="form-control"  name="endereco"  maxlength="100" required >
    </div>

     <div class="form-group">

      <label for="email">Contato:</label>  
      <input type="text" class="form-control"  name="contato"  maxlength="100" required >
    </div>
    <div class="form-group">

     <div class="form-group">
       <label for="email" >Técnico:</label> 
       <select  class="form-control" name="tec">
       <option value="0">Escolha um técnico</option>
        <?php 
           $escolha = $_SESSION['id'];
          
         $sql = "SELECT * FROM equipe where id_ga = '$escolha' ORDER BY nome ASC";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['nome'].'">'.$ln['nome'].'</option>';
         } 
      ?>
        
    </select>
    </div>
   <div class="form-group">
    <label for="email">Tipo:</label>  
     <select class="form-control " id="tipo" name="tipo">
<option value="OS">  OS </option>
 <option value="BD">  BD </option>


</select>
    </div>

    
    <div class="form-group">
    <label for="email">OBS: </label>
  <textarea class="form-control" rows="5" id="obs" name="obs" maxlength="500"></textarea>
    </div>


    


    <fieldset style="border: 1px solid black; padding: 8px; "> 
<span><strong>FOTOS:</strong></span><br><br>
<div class="form-group" >
    <label for="email">Fotos: </label> <label style="font-size: 12px; color: red;" >(Permitido apenas fotos menores que 1MB)</label>
    <input type="file"  id="foto1" name="foto1" required />
    <input type="text"  placeholder="Legenda da foto"  name="leg1" maxlength="85" required /><br><br>


    <input type="file"  id="foto2" name="foto2" required />
    <input type="text"  placeholder="Legenda da foto"  name="leg2" maxlength="85" required /><br><br>


    <input type="file"  id="foto3" name="foto3" required />
    <input type="text"  placeholder="Legenda da foto"  name="leg3" maxlength="85" required /><br><br>
    <input type="file"  id="foto4" name="foto4" required />
    <input type="text"  placeholder="Legenda da foto"  name="leg4" maxlength="85" required /><br><br>
    
   


   
 
    
     </div>


   

</fieldset>  


  
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="submit" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>

 </div>




</body>
</html>


<script>
  
$(function() {

/*var  availableTags = [

"ajskkdp",
"iiisosoa",
"ooiismsm",
"aassdddd",
"ooedmmmd",
"iisoosoos"
];

$( "#cabo" ).autocomplete({
  source: availableTags

  });
*/

$.getJSON("listar_cabos.php", function(data){
//console.log(data);
var retorno = [];


$(data).each( function (key, value){

 // console.log(value.cabo);

 retorno.push(value.cabo);


});
$("#cabo").autocomplete({
  source: retorno ,

 

  });




  });
});






</script>

<!--
<script>
  
$(function() {



$.getJSON("listar_cabos.php", function(data2){
//console.log(data);
var retorno2 = [];


$(data2).each( function (key2, value2){

 // console.log(value.cabo);

 retorno2.push(value2.trecho);


});
$("#localidade").autocomplete({
  source: retorno2

  });




  });
});






</script>
-->