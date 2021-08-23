<!DOCTYPE html>
<html>
<head>
  <title>Qantas Control System</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
  
</head>
<body> 
    
    <nav class="nav-extended">
    <div class="nav-wrapper">
       
    <center>  <a href="#" class="brand-logo">Qantas</a></center>
     
      
    </div>
   <div class="nav-content">
   <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#CON1">TEST</a></li>
        <li class="tab"><a href="#CON2">STATUS & NOTICE</a></li>
        <li class="tab"><a href="#next">NEXT UP</a></li>
        <li class="tab"><a href="#contact">CONTACT</a></li>
        <li class="tab"><a href="#about">ABOUT</a></li>
      </ul>
    </div>
  </nav>
  </div>
   <div id="CON1" class="col s12">
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
</div>
</div>

</body>
</html>