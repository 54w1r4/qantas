<?php
 $dataFile=fopen("../../../db/science.txt","a"); 
 $date=date("Y/m/d");
 fwrite($dataFile,"$date,$_REQUEST[science]\r\n"); 
 fclose($dataFile);
 header("Location: http://home.puiching.edu.mo/~0700898-8/qantas/index.php");
?>  