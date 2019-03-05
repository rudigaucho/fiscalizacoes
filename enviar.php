<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_fiscal.php'",4000);
	
	
}
</script> 

<?php
include "conn.php";

session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}


/*
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  */
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
	$permite = array('image/jpg', 'image/jpeg' , 'image/png');
    $type =$_FILES['foto1'] ['type'];
    $type2 =$_FILES['foto2'] ['type'];
    $type3 =$_FILES['foto3'] ['type'];
    $type4 =$_FILES['foto4'] ['type'];


//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 = $_FILES['foto1']['size'];
            $tamanho2 = $_FILES['foto2']['size'];
            $tamanho3 = $_FILES['foto3']['size'];
            $tamanho4 = $_FILES['foto4']['size'];



// ------------------------------------------------------------- verificar vazios---

            if (empty($type))
            {

               $type = 'image/png';



            }

             if (empty($type2))
            {

               $type2 = 'image/png';



            }
            if (empty($type3))
            {

               $type3 = 'image/png';



            }
            if (empty($type4))
            {

               $type4 = 'image/png';



            }
             



            

//-----------------------------------------------------------------------------------









	$extensao = strtolower(substr($_FILES['foto1'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";








    $extensao2 = strtolower(substr($_FILES['foto2'] ['name'], -4));
	$novo_nome2  = md5(mt_rand(1, 1000) . microtime()). $extensao2;
    $diretorio = "fotos/";

    $extensao3 = strtolower(substr($_FILES['foto3'] ['name'], -4));
	$novo_nome3  = md5(mt_rand(1, 1000) . microtime()). $extensao3;
    $diretorio = "fotos/";

    $extensao4 = strtolower(substr($_FILES['foto4'] ['name'], -4));
	$novo_nome4  = md5(mt_rand(1, 1000) . microtime()). $extensao4;
    $diretorio = "fotos/";




	







if (!in_array($type,$permite) || !in_array($type2,$permite ) || !in_array($type3,$permite ) || !in_array($type4,$permite ))
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
   echo "<script>saidasuccessfully()</script>";
   break;
}

if ( ($tamanho1 > 1000000) || ($tamanho2 > 1000000)  || ($tamanho3 > 1000000) || ($tamanho4 > 1000000))
{

echo "TAMANHO MÁXIMO DA IMAGEM 1MB!";
  echo "<script>saidasuccessfully()</script>";
  break;
}
else
{
move_uploaded_file ($_FILES['foto1'] ['tmp_name'], $diretorio.$novo_nome )	;
move_uploaded_file ($_FILES['foto2'] ['tmp_name'], $diretorio.$novo_nome2 )	;
move_uploaded_file ($_FILES['foto3'] ['tmp_name'], $diretorio.$novo_nome3 )	;
move_uploaded_file ($_FILES['foto4'] ['tmp_name'], $diretorio.$novo_nome4 )	;







	

	
}




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/serede.png">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_fiscal.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/serede.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>FISCALIZAÇÃO</title>


</head>



<body>








<?php




$cliente =$_POST['cliente'];
$ccto =$_POST['ccto'];
$endereco =$_POST['endereco'];
$contato =$_POST['contato'];
$tecnico =$_POST['tec'];
$tipo =$_POST['tipo'];
$obs =$_POST['obs'];
$leg1 =$_POST['leg1'];
$leg2 =$_POST['leg2'];
$leg3 =$_POST['leg3'];
$leg4 =$_POST['leg4'];














	/*

if(!preg_match('/^\d{9}$/',$dc))
{

echo 'erro, B.A invalido, o B.A deve conter 9 digitos!';




}



else if  ($vist_cb != is_numeric($vist_cb) or $post_subs != is_numeric($post_subs)  or $post_aprum != is_numeric($post_aprum) or $read_rede != is_numeric($read_rede)  or $redis_cabo != is_numeric($redis_cabo) or $lanc_cb != is_numeric($lanc_cb) or $poda != is_numeric($poda) or $post_imp != is_numeric($post_imp)  ){
   echo "Verifique os campos que recebem apenas números!!";
}



else if (!preg_match('/^\-?\d{2}(\.)\d{6}$/', $coord1) || !preg_match('/^\-?\d{2}(\.)\d{6}$/', $coord2) )

{


echo 'erro, coordenadas invalidas  exemplo correto: -25.476079!';



}
*/
/*
$sql = mysql_query ("select * from celulas where celula = '$celula' and logradouro = '$logradouro' and fachada = '$fachada'" );
$row = mysql_num_rows($sql);
 if  ($row == 1)
{


   
  

  
}

*/

  






$query1 = "insert into fiscal (cliente,ccto,endereco,contato,data,tipo,nome_ga,id_ga,tecnico,obs,foto1,foto2,foto3,foto4,leg1,leg2,leg3,leg4)";

    $query1.= "values ('$cliente','$ccto','$endereco','$contato',NOW(),'$tipo','".$_SESSION['nome']."','".$_SESSION['id']."','$tecnico','$obs','$novo_nome','$novo_nome2','$novo_nome3','$novo_nome4','$leg1','$leg2','$leg3','$leg4')";
 

   
    
 
 $sql1 = mysql_query($query1);













if($sql1)
{
	
	
		echo ' <h2>ENVIADA COM SUCESSO!';
	
	echo "<script>saidasuccessfully()</script>";
	

	
}
else
{
	
	echo "<h2>Erro no cadastro!</h2> ";
	
}




 
 








    





?>

























</body>


</html>