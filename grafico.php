


<?php


//-------------------------------------------  GRAFICO ANUAL FISCAL-------------------------

$sql1 = mysql_query ("select  count(*) as JAN,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '01' and year(data) = year(NOW()) and year(data) = year(now()))  as JAN_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '01' and year(data) = year(NOW()) and year(data) = year(now()))  as JAN_BD from fiscal where  MONTH(data) = '01' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql1 )){


  $JAN = $dado["JAN"];
  $JAN_OS = $dado["JAN_OS"];
  $JAN_BD = $dado["JAN_BD"];

 } 

 $sql2 = mysql_query ("select  count(*) as FEV,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '02' and year(data) = year(NOW()) and year(data) = year(now()))  as FEV_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '02' and year(data) = year(NOW()) and year(data) = year(now()))  as FEV_BD from fiscal where  MONTH(data) = '02' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql2 )){


  $FEV = $dado["FEV"];
  $FEV_OS = $dado["FEV_OS"];
  $FEV_BD = $dado["FEV_BD"];

 } 


 $sql3 = mysql_query ("select  count(*) as MAR,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '03' and year(data) = year(NOW()) and year(data) = year(now()))  as MAR_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '03' and year(data) = year(NOW()) and year(data) = year(now()))  as MAR_BD from fiscal where  MONTH(data) = '03' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql3 )){


  $MAR = $dado["MAR"];
  $MAR_OS = $dado["MAR_OS"];
  $MAR_BD = $dado["MAR_BD"];

 } 

 $sql4 = mysql_query ("select  count(*) as ABR,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '04' and year(data) = year(NOW()) and year(data) = year(now()))  as ABR_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '04' and year(data) = year(NOW()) and year(data) = year(now()))  as ABR_BD from fiscal where  MONTH(data) = '04' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql4 )){


  $ABR = $dado["ABR"];
  $ABR_OS = $dado["ABR_OS"];
  $ABR_BD = $dado["ABR_BD"];

 } 


 $sql5 = mysql_query ("select  count(*) as MAI,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '05' and year(data) = year(NOW()) and year(data) = year(now()))  as MAI_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '05' and year(data) = year(NOW()) and year(data) = year(now()))  as MAI_BD from fiscal where  MONTH(data) = '05' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql5 )){


  $MAI = $dado["MAI"];
  $MAI_OS = $dado["MAI_OS"];
  $MAI_BD = $dado["MAI_BD"];

 } 


 $sql6 = mysql_query ("select  count(*) as JUN,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '06' and year(data) = year(NOW()) and year(data) = year(now()))  as JUN_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '06' and year(data) = year(NOW()) and year(data) = year(now()))  as JUN_BD from fiscal where  MONTH(data) = '06' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql6 )){


  $JUN = $dado["JUN"];
  $JUN_OS = $dado["JUN_OS"];
  $JUN_BD = $dado["JUN_BD"];

 } 

 $sql7 = mysql_query ("select  count(*) as JUL,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '07' and year(data) = year(NOW()) and year(data) = year(now()))  as JUL_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '07' and year(data) = year(NOW()) and year(data) = year(now()))  as JUL_BD from fiscal where  MONTH(data) = '07' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql7 )){


  $JUL = $dado["JUL"];
  $JUL_OS = $dado["JUL_OS"];
  $JUL_BD = $dado["JUL_BD"];

 } 


 $sql8 = mysql_query ("select  count(*) as AGO,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '08' and year(data) = year(NOW()) and year(data) = year(now()))  as AGO_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '08' and year(data) = year(NOW()) and year(data) = year(now()))  as AGO_BD from fiscal where  MONTH(data) = '08' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql8 )){


  $AGO = $dado["AGO"];
  $AGO_OS = $dado["AGO_OS"];
  $AGO_BD = $dado["AGO_BD"];


 } 

 $sql9 = mysql_query ("select  count(*) as SETE,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '09' and year(data) = year(NOW()) and year(data) = year(now()))  as SETE_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '09' and year(data) = year(NOW()) and year(data) = year(now()))  as SETE_BD from fiscal where  MONTH(data) = '09' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql9 )){


  $SET = $dado["SETE"];
  $SETE_OS = $dado["SETE_OS"];
  $SETE_BD = $dado["SETE_BD"];

 } 


 $sql10 = mysql_query ("select  count(*) as OUTU,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '10' and year(data) = year(NOW()) and year(data) = year(now()))  as OUTU_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '10' and year(data) = year(NOW()) and year(data) = year(now()))  as OUTU_BD from fiscal where  MONTH(data) = '10' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql10 )){


  $OUT = $dado["OUTU"];
  $OUT_OS = $dado["OUTU_OS"];
  $OUT_BD = $dado["OUTU_BD"];

 } 


  $sql11 = mysql_query ("select  count(*) as NOV,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '11' and year(data) = year(NOW()) and year(data) = year(now()))  as NOV_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '11' and year(data) = year(NOW()) and year(data) = year(now()))  as NOV_BD from fiscal where  MONTH(data) = '11' and year(data) = year(NOW())
  " );
 while ($dado = mysql_fetch_assoc($sql11 )){


  $NOV = $dado["NOV"];
  $NOV_OS = $dado["NOV_OS"];
  $NOV_BD = $dado["NOV_BD"];

 } 

  $sql12 = mysql_query ("select  count(*) as DEZ,(SELECT count(*) from fiscal where tipo = 'OS' and MONTH(data) = '12' and year(data) = year(NOW()) and year(data) = year(now()))  as DEZ_OS,(SELECT count(*) from fiscal where tipo = 'BD' and MONTH(data) = '12' and year(data) = year(NOW()) and year(data) = year(now()))  as DEZ_BD from fiscal where  MONTH(data) = '12' and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql12 )){


  $DEZ = $dado["DEZ"];
  $DEZ_OS = $dado["DEZ_OS"];
  $DEZ_BD = $dado["DEZ_BD"];

 } 

//---------------------------------------- GRÁFICO OS E BD  -------------------------------------------------



 $sql13 = mysql_query ("select  count(*) as OS from fiscal where  tipo = 'OS'  and MONTH(data) = MONTH(NOW())" );
 while ($dado = mysql_fetch_assoc($sql13 )){


  $OS = $dado["OS"];

 } 

 $sql14 = mysql_query ("select  count(*) as BD from fiscal  where  tipo = 'BD'  and MONTH(data) = MONTH(NOW())" );
 while ($dado = mysql_fetch_assoc($sql14 )){


  $BD = $dado["BD"];

 } 

 //---------------------------------------- GRÁFICO ANUAL REPETIDO  -------------------------------------------------

  $sql15 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '01' and year(data) = year(NOW())) as jan_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '01' and year(data) = year(NOW())) as jan_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '01' and year(data) = year(NOW())) as jan_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '01' and year(data) = year(NOW())) as jan_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql15 )){


  $jan_rep_pr = $dado["jan_rep_pr"];
  $jan_rep_sc = $dado["jan_rep_sc"];
  $jan_acao_pr = $dado["jan_acao_pr"];
  $jan_acao_sc = $dado["jan_acao_sc"];
  $jan_media =   $dado["jan_rep_pr"] + $dado["jan_rep_sc"] ;

 } 



$sql16 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '02' and year(data) = year(NOW())) as fev_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '02' and year(data) = year(NOW())) as fev_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '02' and year(data) = year(NOW())) as fev_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '02' and year(data) = year(NOW())) as fev_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql16 )){


  $fev_rep_pr = $dado["fev_rep_pr"];
  $fev_rep_sc = $dado["fev_rep_sc"];
  $fev_acao_pr = $dado["fev_acao_pr"];
  $fev_acao_sc = $dado["fev_acao_sc"];
  $fev_media =   $dado["fev_rep_pr"] + $dado["fev_rep_sc"] ;

 }


$sql17 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '03' and year(data) = year(NOW())) as mar_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '03' and year(data) = year(NOW())) as mar_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '03' and year(data) = year(NOW())) as mar_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '03' and year(data) = year(NOW())) as mar_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql17 )){


  $mar_rep_pr = $dado["mar_rep_pr"];
  $mar_rep_sc = $dado["mar_rep_sc"];
  $mar_acao_pr = $dado["mar_acao_pr"];
  $mar_acao_sc = $dado["mar_acao_sc"];
  $mar_media =   $dado["mar_rep_pr"] + $dado["mar_rep_sc"] ;

 }

 $sql18 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '04' and year(data) = year(NOW())) as abr_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '04' and year(data) = year(NOW())) as abr_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '04' and year(data) = year(NOW())) as abr_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '04' and year(data) = year(NOW())) as abr_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql18 )){


  $abr_rep_pr = $dado["abr_rep_pr"];
  $abr_rep_sc = $dado["abr_rep_sc"];
  $abr_acao_pr = $dado["abr_acao_pr"];
  $abr_acao_sc = $dado["abr_acao_sc"];
  $abr_media =   $dado["abr_rep_pr"] + $dado["abr_rep_sc"] ;

 }

  $sql19 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '05' and year(data) = year(NOW())) as mai_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '05' and year(data) = year(NOW())) as mai_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '05' and year(data) = year(NOW())) as mai_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '05' and year(data) = year(NOW())) as mai_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql19 )){


  $mai_rep_pr = $dado["mai_rep_pr"];
  $mai_rep_sc = $dado["mai_rep_sc"];
  $mai_acao_pr = $dado["mai_acao_pr"];
  $mai_acao_sc = $dado["mai_acao_sc"];
  $mai_media =   $dado["mai_rep_pr"] + $dado["mai_rep_sc"] ;

 }


   $sql20 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '06' and year(data) = year(NOW())) as jun_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '06' and year(data) = year(NOW())) as jun_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '06' and year(data) = year(NOW())) as jun_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '06' and year(data) = year(NOW())) as jun_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql20 )){


  $jun_rep_pr = $dado["jun_rep_pr"];
  $jun_rep_sc = $dado["jun_rep_sc"];
  $jun_acao_pr = $dado["jun_acao_pr"];
  $jun_acao_sc = $dado["jun_acao_sc"];
  $jun_media =   $dado["jun_rep_pr"] + $dado["jun_rep_sc"] ;

 }

 $sql21 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '07' and year(data) = year(NOW())) as jul_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '07' and year(data) = year(NOW())) as jul_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '07' and year(data) = year(NOW())) as jul_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '07' and year(data) = year(NOW())) as jul_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql21 )){


  $jul_rep_pr = $dado["jul_rep_pr"];
  $jul_rep_sc = $dado["jul_rep_sc"];
  $jul_acao_pr = $dado["jul_acao_pr"];
  $jul_acao_sc = $dado["jul_acao_sc"];
  $jul_media =   $dado["jul_rep_pr"] + $dado["jul_rep_sc"] ;

 }


 $sql22 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '08' and year(data) = year(NOW())) as ago_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '08' and year(data) = year(NOW())) as ago_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '08' and year(data) = year(NOW())) as ago_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '08' and year(data) = year(NOW())) as ago_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql22 )){


  $ago_rep_pr = $dado["ago_rep_pr"];
  $ago_rep_sc = $dado["ago_rep_sc"];
  $ago_acao_pr = $dado["ago_acao_pr"];
  $ago_acao_sc = $dado["ago_acao_sc"];
  $ago_media =   $dado["ago_rep_pr"] + $dado["ago_rep_sc"] ;

 }

  $sql23 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '09' and year(data) = year(NOW())) as sete_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '09' and year(data) = year(NOW())) as sete_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '09' and year(data) = year(NOW())) as sete_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '09' and year(data) = year(NOW())) as sete_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql23 )){


  $sete_rep_pr = $dado["sete_rep_pr"];
  $sete_rep_sc = $dado["sete_rep_sc"];
  $sete_acao_pr = $dado["sete_acao_pr"];
  $sete_acao_sc = $dado["sete_acao_sc"];
  $sete_media =   $dado["sete_rep_pr"] + $dado["sete_rep_sc"] ;

 }

  $sql24 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '10' and year(data) = year(NOW())) as outu_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '10' and year(data) = year(NOW())) as outu_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '10' and year(data) = year(NOW())) as outu_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '10' and year(data) = year(NOW())) as outu_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql24 )){


  $outu_rep_pr = $dado["outu_rep_pr"];
  $outu_rep_sc = $dado["outu_rep_sc"];
  $outu_acao_pr = $dado["outu_acao_pr"];
  $outu_acao_sc = $dado["outu_acao_sc"];
  $outu_media =   $dado["outu_rep_pr"] + $dado["outu_rep_sc"] ;

 }







$sql25 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = '11' and year(data) = year(NOW())) as nov_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = '11' and year(data) = year(NOW())) as nov_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = '11' and year(data) = year(NOW())) as nov_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '11' and year(data) = year(NOW())) as nov_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql25 )){


  $nov_rep_pr = $dado["nov_rep_pr"];
  $nov_rep_sc = $dado["nov_rep_sc"];
  $nov_acao_pr = $dado["nov_acao_pr"];
  $nov_acao_sc = $dado["nov_acao_sc"];
  $nov_media =   $dado["nov_rep_pr"] + $dado["nov_rep_sc"] ;

 }


 $sql26 = mysql_query ("SELECT count(*) as total ,(SELECT count(*) from repetido where uf ='PR' and MONTH(data) = 'dez' and year(data) = year(NOW())) as dez_rep_pr,(SELECT count(*) from repetido where uf ='SC' and MONTH(data) = 'dez' and year(data) = year(NOW())) as dez_rep_sc,(SELECT count(*) from repetido where uf ='PR' and acao = 'SIM' and MONTH(data) = 'dez' and year(data) = year(NOW())) as dez_acao_pr,(SELECT count(*) from repetido where uf ='SC' and acao = 'SIM' and MONTH(data) = '12' and year(data) = year(NOW())) as dez_acao_sc" );
 while ($dado = mysql_fetch_assoc($sql26 )){


  $dez_rep_pr = $dado["dez_rep_pr"];
  $dez_rep_sc = $dado["dez_rep_sc"];
  $dez_acao_pr = $dado["dez_acao_pr"];
  $dez_acao_sc = $dado["dez_acao_sc"];
  $dez_media =   $dado["dez_rep_pr"] + $dado["dez_rep_sc"] ;

 }


/*


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

