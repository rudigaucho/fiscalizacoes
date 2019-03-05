


<?php


//-------------------------------------------  GRAFICO TOTAL MêS GA ----------------------------------------------------------------

$sql1 = mysql_query ("select  count(*) as JAN from fiscal where  MONTH(data) = '01' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql1 )){


  $JAN = $dado["JAN"];

 } 

 $sql2 = mysql_query ("select  count(*) as FEV from fiscal where  MONTH(data) = '02' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql2 )){


  $FEV = $dado["FEV"];

 } 


 $sql3 = mysql_query ("select  count(*) as MAR from fiscal where  MONTH(data) = '03' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql3 )){


  $MAR = $dado["MAR"];

 } 

 $sql4 = mysql_query ("select  count(*) as ABR from fiscal where  MONTH(data) = '04' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql4 )){


  $ABR = $dado["ABR"];

 } 


 $sql5 = mysql_query ("select  count(*) as MAI from fiscal where  MONTH(data) = '05' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql5 )){


  $MAI = $dado["MAI"];

 } 


 $sql6 = mysql_query ("select  count(*) as JUN from fiscal where  MONTH(data) = '06' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql6 )){


  $JUN = $dado["JUN"];

 } 

 $sql7 = mysql_query ("select  count(*) as JUL from fiscal where  MONTH(data) = '07' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql7 )){


  $JUL = $dado["JUL"];

 } 


 $sql8 = mysql_query ("select  count(*) as AGO from fiscal where  MONTH(data) = '08' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql8 )){


  $AGO = $dado["AGO"];

 } 

 $sql9 = mysql_query ("select  count(*) as SETE from fiscal where  MONTH(data) = '09' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql9 )){


  $SET = $dado["SETE"];

 } 


 $sql10 = mysql_query ("select  count(*) as OUTU from fiscal where  MONTH(data) = '10' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql10 )){


  $OUT = $dado["OUTU"];

 } 


  $sql11 = mysql_query ("select  count(*) as NOV from fiscal where  MONTH(data) = '11' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql11 )){


  $NOV = $dado["NOV"];

 } 

  $sql12 = mysql_query ("select  count(*) as DEZ from fiscal where  MONTH(data) = '12' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql12 )){


  $DEZ = $dado["DEZ"];

 } 

//---------------------------------------- GRÁFICO EQUIPES BACKLOG  -------------------------------------------------



 $sql13 = mysql_query ("select  count(*) as OS from fiscal where  tipo = 'OS'  and MONTH(data) = MONTH(NOW())" );
 while ($dado = mysql_fetch_assoc($sql13 )){


  $OS = $dado["OS"];

 } 

 $sql14 = mysql_query ("select  count(*) as BD from fiscal  where  tipo = 'BD'  and MONTH(data) = MONTH(NOW())" );
 while ($dado = mysql_fetch_assoc($sql14 )){


  $BD = $dado["BD"];

 } 
/*
  $sql15 = mysql_query ("select  count(*) as LOG_3 from principal where equipe = 'LOG 3' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql15 )){


  $LOG_3 = $dado["LOG_3"];

 } 



$sql16 = mysql_query ("select  count(*) as LOG_4 from principal where equipe = 'LOG 4' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql16 )){


  $LOG_4 = $dado["LOG_4"];

 }


$sql17 = mysql_query ("select  count(*) as LOG_5 from principal where equipe = 'LOG 5' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql17 )){


  $LOG_5 = $dado["LOG_5"];

 }

 $sql18 = mysql_query ("select  count(*) as LOG_6 from principal where equipe = 'LOG 6' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql18 )){


  $LOG_6 = $dado["LOG_6"];

 }

  $sql19 = mysql_query ("select  count(*) as LOG_7 from principal where equipe = 'LOG 7' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql19 )){


  $LOG_7 = $dado["LOG_7"];

 }
   $sql20 = mysql_query ("select  count(*) as LOG_8 from principal where equipe = 'LOG 8' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql20 )){


  $LOG_8 = $dado["LOG_8"];

 }

 $sql21 = mysql_query ("select  count(*) as LOG_9 from principal where equipe = 'LOG 9' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql21 )){


  $LOG_9 = $dado["LOG_9"];

 }


 $sql22 = mysql_query ("select  count(*) as LOG_10 from principal where equipe = 'LOG 10' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql22 )){


  $LOG_10 = $dado["LOG_10"];

 }

  $sql23 = mysql_query ("select  count(*) as LOG_11 from principal where equipe = 'LOG 11' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql23 )){


  $LOG_11 = $dado["LOG_11"];

 }

  $sql24 = mysql_query ("select  count(*) as LOG_12 from principal where equipe = 'LOG 12' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql24 )){


  $LOG_12 = $dado["LOG_12"];

 }



// ------------------------------------------ GRÁFICO EQUIPE OS----------------------------------------------------




$sql25 = mysql_query ("select  count(*) as OS_1 from principal where equipe = 'OS 1' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql25 )){


  $OS_1 = $dado["OS_1"];

 }


 $sql26 = mysql_query ("select  count(*) as OS_2 from principal where equipe = 'OS 2' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql26 )){


  $OS_2 = $dado["OS_2"];

 }





$sql27 = mysql_query ("select  count(*) as OS_3 from principal where equipe = 'OS 3' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql27)){


  $OS_3 = $dado["OS_3"];

 }

 $sql28 = mysql_query ("select  count(*) as OS_4 from principal where equipe = 'OS 4' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql28)){


  $OS_4 = $dado["OS_4"];

 }


 


   $sql30 = mysql_query ("select  count(*) as OS_5 from principal where equipe = 'OS 5' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql30)){


  $OS_5 = $dado["OS_5"];

 }



 



   $sql31 = mysql_query ("select  count(*) as OS_6 from principal where equipe = 'OS 6' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql31)){


  $OS_6 = $dado["OS_6"];

 }

 $sql32 = mysql_query ("select  count(*) as OS_7 from principal where equipe = 'OS 7' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql32)){


  $OS_7 = $dado["OS_7"];

 }




 

  $sql33 = mysql_query ("select  count(*) as OS_8 from principal where equipe = 'OS 8' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql33)){


  $OS_8 = $dado["OS_8"];

}


  $sql34 = mysql_query ("select  count(*) as OS_9 from principal where equipe = 'OS 9' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql34)){


  $OS_9 = $dado["OS_9"];

}

  $sql35 = mysql_query ("select  count(*) as OS_10 from principal where equipe = 'OS 10' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql35)){


  $OS_10 = $dado["OS_10"];

}

$sql37 = mysql_query ("select  count(*) as OS_11 from principal where equipe = 'OS 11' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql37)){


  $OS_11 = $dado["OS_11"];

}


 



*/


?>

