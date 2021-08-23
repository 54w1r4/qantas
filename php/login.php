<DOCTYPE HTML>
<html>
<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	 
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <title>Login</title>
      
      <script src="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.css" />

     
      
    </head>

    <body>
       
       <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Login</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
      </ul>
    </div>
  </nav>
 
  <div id="firebaseui-auth-container"></div>
<div id="loader">Loading...</div>

  <!-- <div class="row">
    <form class="col s12">
		<div class="row">
        <div class="input-field col s10">
          <center><input placeholder="Email..." id="email" type="email" class="validate"></center>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s10">
          <input placeholder="Password..." id="password" type="password" class="validate">
        </div>
      </div>
      </form>
      </div>
      <button class="waves-effect waves-light btn" onclick="login();">Login</button> -->
   
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>
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

    </body>
</html>