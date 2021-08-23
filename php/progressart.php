<?php
 $dataFile=fopen("../../../db/art.txt","a"); 
 $date=date("Y/m/d");
 fwrite($dataFile,"$date,$_REQUEST[art]\r\n"); 
 fclose($dataFile);
 header("Location: http://home.puiching.edu.mo/~0700898-8/qantas/index.php");
?>  