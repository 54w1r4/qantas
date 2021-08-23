<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <title>QantasSystemStatus</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script src="jquery.lazyload.js" type="text/javascript"> </script> 
 

<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: none;
}


</style>
   <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

    </head>



<body class="index-page" onload="myFunction()"  >

     <div id="loader"></div>
  
 <!-- <div class="progress">
      <div class="indeterminate"></div>
  </div>-->
  
 <nav class="nav-extended">
    <div class="nav-wrapper">
       
    <center>  <a href="#" class="brand-logo">Qantas</a></center>
     
      
    </div>
   <div class="nav-content">
   <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#today">SYSTEM STATUS</a></li>
       
      </ul>
    </div>
  </nav>
 
 <div style="display:none;" id="myDiv" class="animate-bottom">

  <div id="today" class="col s12">
      <div class="container">

 
    
  </div>
</div>
  <div class="container">
  <div class="card">
    <div class="card-content">
      <p><i class="material-icons">cloud</i></p><p>系統狀態</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a class="active" href="#web">狀態</a></li>
        
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="web">
         <p><i class="small material-icons">cloud_off</i> &nbsp; &nbsp; IQUI 1.8 : 已關閉</p>
        <p><i class="small material-icons">cloud_off</i> &nbsp; &nbsp; IQUI 2.6 : 已關閉</p>
                <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; IQUI 3.0 : 正常</p>
                  <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; Qantas行李托運 : 正常</p>
              <p><i class="small material-icons">cloud_off</i> &nbsp; &nbsp; Qantas QFF : 已關閉</p>
              <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; 功課列表 : 正常</p>
              <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; 航班狀態表 : 正常</p>
              <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; Next Up (Test & Dict & Exam) : 正常</p>
              <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; Next Up (Events) : 正常</p>
             <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; 停航公告 : 正常</p>
             <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; 公告 : 正常</p>
             <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; QantasApp自動更新服務 : 正常</p>
             <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; QantasApp啟動服務 : 正常</p>
              <p><i class="small material-icons">cloud_off</i> &nbsp; &nbsp; QantaWiFi : 已關閉</p>
                <p><i class="small material-icons">cloud_done</i> &nbsp; &nbsp; TIME MACHINE : 正常</p>
      </div>
      
    </div>
  </div>
</div>
 
 

 
    </div>


          




 
               
  
   <form name=form1 id=form1 method=get action=/eBoard/collect.php>
<input type=hidden name=nfc id=nfc>
<input type=hidden name=className id=className value=S2E>
<div class="main main-raised">
    <div class="section section-basic">
        <div class="container">
              
              
<!-- hitwebcounter Code START -->
                                  
                            
                            
                            

  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
            
                
       
       
        </div>  
       
             
        </div>
         </form>
          
      <!-- Modal content-->
     
      
  

</body>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>




