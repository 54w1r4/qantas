<?php
 $dataFile=fopen("../../../db/geok.txt","a"); 
 $date=date("Y/m/d");
 fwrite($dataFile,"$date,$_REQUEST[geok]\r\n"); 
 fclose($dataFile);
 header("Location: http://home.puiching.edu.mo/~0700898-8/qantas/qantas.php");
?>  