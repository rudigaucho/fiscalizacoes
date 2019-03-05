<?php

include 'mpdf/mpdf.php';


 include "conn.php";


 $protocolo =$_GET['protocolo'];
  

$select = mysql_query ("SELECT * FROM fiscal  
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
<span>ENDEREÇO:  $linha[endereco]   </span><br>
<span>CONTATO:  $linha[contato]   </span><br>
<span>TIPO:  $linha[tipo]   </span><br>
<span>GA:  $linha[nome_ga]   </span><br>
<span>TÉCNICO:  $linha[tecnico]   </span><br>
<span>OBS: <br> <fieldset style='border: 1px solid; padding: 12px;'>$linha[obs]   </span></fieldset><br><br>



    
    <table border=1 >
    
    <tr>
    
    
    </tr>
    <tr>
     
      
    </tr>	
    <tr>
    <td> <img src='fotos/$linha[foto1]' width='300' height='300'><br> $linha[leg1]</td>
    <td> <img src='fotos/$linha[foto2]' width='300' height='300'><br> $linha[leg2] </td>
    
    </tr>
    <tr>
    <td> <img src='fotos/$linha[foto3]' width='300' height='300'><br> $linha[leg3]</td>
    <td> <img src='fotos/$linha[foto4]' width='300' height='300'><br> $linha[leg4] </td>
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