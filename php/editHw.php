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
      <a href="#" class="brand-logo center">Qantas</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
      </ul>
    </div>
  </nav>
 
  <div id="firebaseui-auth-container"></div>
<div id="loader">Loading...</div>

<div id="login">
  <div class="wrapper">
    <div class="container">
       <div class="row">
        <div class="input-field col s12">
     Email: <input class="materialize-textarea" type="text" id="emailValue" /><br />
 Password: <input class="materialize-textarea" type="password" id="pwValue" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Login" onclick="login()" /> </center>
</div>
</div>
</div>
</div>
</div>
<div id="editHWchinese">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

中文: <input class="materialize-textarea" type="text" id="chinese" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" value="Save" onclick="updateChinese()" /> </center>

  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWenglish">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

English: <input class="materialize-textarea" type="text" id="english" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" onclick="updateEnglish()" /> </center>
    
  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWadEnglish">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

Advanced English: <input class="materialize-textarea" type="text" id="adEnglish" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" /> </center>
    
  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWmath">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

數學: <input class="materialize-textarea" type="text" id="math" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" onclick="updateMath()" /> </center>
    
  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWdt">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

 設計與科學: <input class="materialize-textarea" type="text" id="dt" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" onclick="updateDt()" /> </center>
    
  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWphy">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

 物理: <input class="materialize-textarea" type="text" id="phy" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" onclick="updatePhy()" /> </center>
    
  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWchemical">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

 化學: <input class="materialize-textarea" type="text" id="chemical" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" onclick="updateChemical()" /> </center>
    
  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWbio">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

 生物: <input class="materialize-textarea" type="text" id="bio" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" onclick="updateBio()" /> </center>
    
  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWgeo">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

 地理: <input class="materialize-textarea" type="text" id="geo" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" onclick="updateGeo()" /> </center>
  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWart">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

 視藝: <input class="materialize-textarea" type="text" id="art" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" onclick="updateArt()" /> </center>
  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWhistory">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

 歷史: <input class="materialize-textarea" type="text" id="history" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" onclick="updateHistory()" /> </center>
  </div>
</div>
    </div>
  </div>
</div>
<div id="editHWmusic">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

 音樂: <input class="materialize-textarea" type="text" id="music" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Save" onclick="updateMusic()" /> </center>
  </div>
</div>
    </div>
  </div>
</div>
<div id="changePW_div" >
  <div class="wrapper">
    <div class="container">
       <div class="row">
        <div class="input-field col s12">
    
    
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="變更密碼" onclick="changePW()" /> </center>
</div>
</div>
</div>
</div>
</div>
<div id="logout_div" >
  <div class="wrapper">
    <div class="container">
       <div class="row">
        <div class="input-field col s12">
    
    
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="Logout" onclick="logout()" /> </center>
</div>
</div>
</div>
</div>
</div>

<div id="changePW_text">
  <div class="wrapper">
    <div class="container">
<div class="row">
  <div class="input-field col s12">

 新密碼(密碼至少是六個位元): <input class="materialize-textarea" type="text" id="newPW" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" name="submit" value="變更" onclick="newPWchange()" /> </center>
  </div>
</div>
    </div>
  </div>
</div>

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
<script src="js/login.js"></script>
<script type="text/javascript">
  firebase.auth().setPersistence(firebase.auth.Auth.Persistence.SESSION)
  .then(function() {
    // Existing and future Auth states are now persisted in the current
    // session only. Closing the window would clear any existing state even
    // if a user forgets to sign out.
    // ...
    // New sign-in will be persisted with session persistence.
    return firebase.auth().signInWithEmailAndPassword(email, password);
  })
  .catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
  });

</script>
    </body>
</html>