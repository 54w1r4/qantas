<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <title>Qantas :: 澳洲航空</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />

    
    
    <script src="js/jquery.lazyload.js" type="text/javascript"> </script> 
 

<style>
/* Center the loader */

li {
  list-style-type: none;
}

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

/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
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
<!-- Firebase App is always required and must be first -->
<script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-app.js"></script>

<!-- Add additional services that you want to use -->
<script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-firestore.js"></script>


<!-- Comment out (or don't include) services that you don't want to use -->
<!-- <script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-storage.js"></script> -->

<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAwYAh4Rs4hJbOkfrkkwUkeOm4E4MTM3QA",
    authDomain: "qantasinflightmanagementsystem.firebaseapp.com",
    databaseURL: "https://qantasinflightmanagementsystem.firebaseio.com",
    projectId: "qantasinflightmanagementsystem",
    storageBucket: "qantasinflightmanagementsystem.appspot.com",
    messagingSenderId: "262712817852"
  };
  firebase.initializeApp(config);
</script>

<!--<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

</script> -->
    </head>



<body class="index-page" onload="myFunction()"  >
   
<!-- <script>
  function Monday() {
    var RealTime = d.getTime();
    var d = new Date();

  }
  document.getElementById("reTime").innerHTML = Monday.RealTime; 
</script> -->

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
        <li class="tab"><a class="active" href="#today">TODAY</a></li>
        <li class="tab"><a href="#annce">STATUS & NOTICE</a></li>
        <li class="tab"><a href="#next">NEXT UP</a></li>
        <li class="tab"><a href="#contact">CONTACT</a></li>
        <li class="tab"><a href="#about">ABOUT</a></li>
      </ul>
    </div>
  </nav>
 
 <div style="display:none;" id="myDiv" class="animate-bottom">

  <div id="today" class="col s12">
      <div class="container">

  <div class="col s12 m7">
  
      <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="../pcmsboard/google-now-wallpaper-1.png">
         
        </div>
        <div class="card-content">
           <p><h4><font>Today</font></h4></p>
           <p><h5><font>歡迎回來</font></h5></p>
        <p> <?php echo(strftime("%m/%d/%Y %H:%M")); ?></p>
        </div>
        
      </div>
    </div>
  </div>
  </div>
 <p> <i class="material-icons">assignment</i> &nbsp; &nbsp;功課列表</p> 
  <div class="row">
    
     <!-- <div class="card">
    <div class="card-content">
     <p> <i class="material-icons">assignment</i> &nbsp; &nbsp;功課列表</p> -->
     <ui class="collapsible popout">
      <li>   
      <div class="collapsible-header"><i class="material-icons">functions</i>數學</div>
      <div class="collapsible-body"> <p><?php $file = fopen("../../db/math.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?>    </p><p id="mathHwText"></p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">developer_mode</i>設科</div>
      <div class="collapsible-body"> <p><?php $file = fopen("../../db/dt.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?></p><p id="dtHwText"></p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">edit</i>中文</div>
      <div class="collapsible-body"> <p><?php $file = fopen("../../db/chinese.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?></p><p id="chineseHwText"></p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">font_download</i>英文</div>
      <div class="collapsible-body"> <p><?php $file = fopen("../../db/english.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?></p><p id="englishHwText"></p></div>
    </li>
     <li>
      <div class="collapsible-header"><i class="material-icons">lightbulb_outline</i>物理</div>
      <div class="collapsible-body"> <?php $file = fopen("../../db/p.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?><p id="phyHwText"></p></div>
    </li>
     <li>
      <div class="collapsible-header"><i class="material-icons">gesture</i>視藝</div>
      <div class="collapsible-body"><p><?php $file = fopen("../../db/art.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?> </p><p id="artHwText"></p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">gps_fixed</i>地理</div>
      <div class="collapsible-body"><p><?php $file = fopen("../../db/geo.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?></p><p id="geoHwText"></p></div>
    </li>
     <li>
      <div class="collapsible-header"><i class="material-icons">history</i>歷史</div>
      <div class="collapsible-body"><p><?php $file = fopen("../../db/history.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>" ; }
                 fclose($file); ?></p><p id="historyHwText"></p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">opacity</i>化學</div>
      <div class="collapsible-body"><p><?php $file = fopen("../../db/chemical.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>" ; }
                 fclose($file); ?></p><p id="chemicalHwText"></p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">streetview</i>生物</div>
      <div class="collapsible-body"><p><?php $file = fopen("../../db/bio.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>" ; }
                 fclose($file); ?></p><p id="bioHwText"></p></div>
    </li>
     <li>
      <div class="collapsible-header"><i class="material-icons">library_music</i>音樂</div>
      <div class="collapsible-body"><p><?php $file = fopen("../../db/music.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>" ; }
                 fclose($file); ?></p><p id="musicHwText"></p></div>
    </li>
     </ui>
   
 </div>

</ui>
    <!-- <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a class="active" href="#math">數學</a></li>
        <li class="tab"><a href="#sub2">設科</a></li>
        <li class="tab"><a href="#sub3">中文</a></li>
        <li class="tab"><a href="#sub4">英文</a></li>
        <li class="tab"><a href="#sub5">物理</a></li>
         <li class="tab"><a href="#sub6">視藝</a></li>
         <li class="tab"><a href="#sub7">地理</a></li>
         <li class="tab"><a href="#sub8">歷史</a></li>
         <li class="tab"><a href="#sub9">化學</a></li>
        <li class="tab"><a href="#sub10">生物</a></li>
        <li class="tab"><a href="#sub11">音樂</a></li>
      </ul>
    </div> -->
   
  

<ul class="collapsible popout">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">update</i>
      TIME MACHINE
      <!-- <span class="new badge">4</span> -->
    </div>
    <div class="collapsible-body">
    <div class="card">
    <div class="card-content">
      <p>TIME MACHINE</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a class="active" href="#timemachine">功課列表</a></li>
        
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="timemachine"><p><?php $file = fopen("../../db/timemachine/homeworklist.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?>    </p></div>
      
     
    </div>
  </div>
    </div>
  </li>
  
</ul>
   

  </div>
</div>
  <div id="annce" class="col s12">
    
     <div class="container">
    
      
    
      <h6><p><i class="material-icons">airplanemode_active</i> &nbsp; &nbsp; 目前所有航班的情況</p></h6>
    
   
    
          <ul class="collapsible popout">
            <li>
              <div class="collapsible-header">QFS3E</div>
      <div class="collapsible-body">
        <p><?php $file = fopen("../../db/mainstatus.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file);

              /*  function countdown() {
                   $rem = strtotime('20:00:00') - time(); // change date and time to suit.
        $hr  = floor(($rem % 86400) / 3600);
        $min = floor(($rem % 3600) / 60);
        $sec = ($rem % 60);
        if($hr) echo $hr. "Hours ";
        if($min) echo $min. "Minutes ";
        if($sec) echo $sec. "Seconds left";
        if ($hr == 0 && $min == 0 && $sec == 0) {
          countdown2();
          exit();
        }
                }

                function countdown2() {
                    echo "TimeOut!";
                }
       
         countdown();
         
          if ($week == Mon) {
              if (condition) {
                # code...
              }
          } else if ($week == Thr) {
            
          } else if ($week == Wed) {
           
          } else if ($week == Thu) {
          
          } else if ($week == Fri) {
           
          } else if ($week == Sat) {
            
          } else {

          } */

                 ?><p id="lessonText"></p>
               </p></div>
             </li>
                </ul>
               
               <!--<p>登機閘口 : C203</p><p>機型 : Boeing 787-800 Dreamliner (VH-HYY)</p>-->
      <!--<div id="QFS2E--FTC"><p>此航班已被取消或永久停止服務</p><!--<p>登機閘口 : 劉冠華前地</p><p>機型 :Airbus Industrie A330-200 (VH-GCT)</p></div>-->
      
    

  <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><i class="material-icons">announcement</i> &nbsp; 停航公告</span>
          <p><?php $file = fopen("../../db/stopnotice.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?></p>
        </div>
        
      </div>
    </div>
  </div>
   <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><i class="material-icons">announcement</i> &nbsp; 公告</span>
          <p><?php $file = fopen("../../db/notice.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?></p>
        </div>
        
      </div>
    </div>
  </div>
  <ul class="collapsible popout">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">update</i>
      TIME MACHINE
      <!-- <span class="new badge">4</span> -->
    </div>
    <div class="collapsible-body">
    <div class="card">
    <div class="card-content">
      <p>TIME MACHINE</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a class="active" href="#timemachine_notice">公告</a></li>
        
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="timemachine_notice"><p><?php $file = fopen("../../db/timemachine/notice.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?>    </p></div>
      
     
    </div>
  </div>
    </div>
  </li>
  
</ul>
     </div>

  </div>
  <div id="next" class="col s12">
    
    <div class="container">
       <div class="row">
     <div class="col s12 m7">
   
    <div class="card horizontal">
      <div class="card-image waves-effect waves-block waves-light">

        <img class="activator" src="../pcmsboard/google-material-design-wallpaper-17.jpg">
      </div>
      
        <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Test & Dict & Exam <p>Next up</p><p>輕觸以檢視</p></span>
       </div>
         <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Test & Dict & Exam <p>Next up :</p><i class="material-icons right">close</i></span>
                  <p>

                <?php $file = fopen("../../db/subjectnextup.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?>
                  </p>
                    
                 </div>
        </div>
        
      
    </div>
  </div>
   <div class="row">
     <div class="col s12 m7">
   
    <div class="card horizontal">
      <div class="card-image waves-effect waves-block waves-light">

        <img class="activator" src="../pcmsboard/material-design-4k.png">
      </div>
      
        <div class="card-content">
         <span class="card-title activator grey-text text-darken-4"> Events <p>Next up</p><p>輕觸以檢視</p></span>
       </div>
         <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Events<p>Next up :</p><i class="material-icons right">close</i></span>
                  <p>
                <?php $file = fopen("../../db/eventsnextup.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?>
                  
                </p>
                    
                 </div>
        </div>
        
      
    </div>
  </div>
  <ul class="collapsible popout">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">update</i>
      TIME MACHINE
      <!-- <span class="new badge">4</span> -->
    </div>
    <div class="collapsible-body">
    <div class="card">
    <div class="card-content">
      <p>TIME MACHINE</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a class="active" href="#timemachine">NEXT UP</a></li>
        
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="timemachine"><p><?php $file = fopen("../../db/timemachine/nextup.txt", "r");
              while (!feof($file)) {
                $lot = fgets($file);
                echo "<ul>$lot</ul>";
                }

                fclose($file); ?>    </p></div>
      
     
    </div>
  </div>
    </div>
  </li>
  
</ul>
    </div>

  </div>
  <div id="contact" class="col s12">
         <div class="container">
          <div class="row">
        <div class="col s12 m7">
          <div class="card">

            <div class="card-image">
              <img src="./assets/qantas1401294851.jpg">
              <span class="card-title"><font color="blue"><b></b></font></span>
            </div>
            <div class="card-content">
              <p>如果您對作業有疑問，請聯繫該科的客服主管
如果您發現作業列表有問題，請盡快聯繫你當地的澳航辦事處。若你對此有問題，並且在12個小時內起飛，請立即聯絡你的澳航辦事處。</p>
            </div>
            <div class="card-action">
              <a href="https://goo.gl/forms/btOBBuJccFO0QH873"><b>聯絡</b></a>
               <a href="https://goo.gl/forms/C6i7AhTrjA4zTFbZ2"><b>Contact (English Version) </b></a>
            </div>
          </div>
        </div>
      </div>
         </div>
  </div>
 <div id="about" class="col s12">
   <div class="container">
 <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">關於</span>
          <p>IQUI 3.1(0918)</p>
           
        </div>
        <div class="card-action">
          <a href="systemstatus.php">系統狀態</a>
          <!-- <a href="classmode.php" >課室模式</a> -->
        </div>
      </div>
    </div>
  </div>
</div>
 </div>


 
    </div>


              
              
<!-- hitwebcounter Code START -->
                                  
                            
                            
                            

  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
            
               <!--  <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script> -->
   

<script src="js/index.js"></script>
</body>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>




