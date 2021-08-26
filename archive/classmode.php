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
       
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    
    
    <script src="jquery.lazyload.js" type="text/javascript"> </script> 
 

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
<script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-functions.js"></script>

<!-- Comment out (or don't include) services that you don't want to use -->
<!-- <script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-storage.js"></script> -->

<script>
  var config = {
    // ...
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
       
    <center>  <a href="#" class="brand-logo"><h3>功課列表</h3>  </a></center>
     
      
    </div>
   <div class="nav-content">
   <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#today">TODAY</a></li>
      </ul>
    </div>
  </nav>
 
 <div style="display:none;" id="myDiv" class="animate-bottom">

  <div id="today" class="col s12">
      <div class="container">

  
 
  <div class="row">
    
     <!-- <div class="card">
    <div class="card-content">
     <p> <i class="material-icons">assignment</i> &nbsp; &nbsp;功課列表</p> -->
        <div id="first_zone">
      <h2>數學</h2>
      <h3><p id="mathHwText"></p><h3>
    
       <h2>設科</h2>
      <h3><p id="dtHwText"></p></h3>
    
      <h2>中文</h2>
      <h3><p id="chineseHwText"></p></h3>
   </div>
   <div id="second_zone" style="display: none;">
    <h3>英文</h3>
     <h3><p id="englishHwText"></p></h3>

     <h3>物理</h3>
     <h3><p id="phyHwText"></p></h3>

    <h2>視藝</h2>
    <h3><p id="artHwText"></p></h3>

   </div>
     
      <div id="third_zone" style="display: none;">
        <h2>地理</h2>
        <h3><p id="geoHwText"></p></h3>

        <h2>歷史</h2>
        <h3><p id="historyHwText"></p></h3>

         <h2>化學</h2>
        <h3><p id="chemicalHwText"></p></h3>

      </div>
      
     <div id="four_zone" style="display: none;">
      <h2>生物</h2>
     <h3><p id="bioHwText"></p></h3>
    <h2>音樂</h2>
      <h3><p id="musicHwText"></p></h3>
    </div>
   
 </div>


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
    

<script src="https://www.gstatic.com/firebasejs/5.3.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.3.0/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.4.2/firebase.js"></script>
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
       
       
        
       
          
      <!-- Modal content-->
     
      
  
<script src="https://www.gstatic.com/firebasejs/5.4.2/firebase.js"></script>
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
<script src="index.js"></script>
</body>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>




