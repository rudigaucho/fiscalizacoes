<?php

include 'mpdf/mpdf.php';


 include "conn.php";


 $protocolo =$_GET['protocolo'];
  

$select = mysql_query ("SELECT * FROM repetido  
							WHERE protocolo ='$protocolo'
			");
	$linha = mysql_fetch_array($select);//atribui o array recebido a variavel $linha
	
	$row = mysql_num_rows($select);
  
  $html2 .= "<img src='img/logo_serede.png' alt='' width='80' height='80'  > <br><br>
  <H3>Relatorio Fiscalizações - PROTOCOLO - $linha[protocolo]</H3> 
  	";
  do  
  {
    $html .= "
    
<span>DATA:  $linha[data]   </span><br>
<span>CLIENTE:  $linha[cliente]   </span><br>
<span>CCTO:  $linha[ccto]   </span><br>
<span>AÇÃO:  $linha[acao]   </span><br>
<span>GA:  $linha[nome_ga]   </span><br>
<span>LOCALIDADE:  $linha[local]   </span><br>


<span>OBS INICIAL: <br> <fieldset style='border: 1px solid; padding: 12px;'>$linha[obs_ini]   </span></fieldset><br><br>
<span>OBS REPETIDO: <br> <fieldset style='border: 1px solid; padding: 12px;'>$linha[obs_rep]   </span></fieldset><br><br>
<span>OBS PLANO AÇÃO: <br> <fieldset style='border: 1px solid; padding: 12px;'>$linha[obs_acao]   </span></fieldset><br><br>




    
    <table border=1 >
    
    <tr>
    
    
    </tr>
    <tr>
     
      
    </tr>	
    <tr>
    <td> <img src='fotos/$linha[foto1]' width='300' height='300'><br> $linha[leg1]</td>
    <td> <img src='fotos/$linha[foto2]' width='300' height='300'><br> $linha[leg2] </td>
    
    </tr>
    
    
   
   
</table>";
  } while ($linha = mysql_fetch_array($select));

	
//==============================================================
//==============================================================
//==============================================================

include("../mpdf/mpdf.php");

$mpdf=new mPDF(); 
$css = file_get_contents("../css/styleRelatotio.css");
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html2.$html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>