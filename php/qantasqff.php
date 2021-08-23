 <DOCTYPE HTML>
 <html>
<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	 
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <title>QantasPay</title>
      
      <script src="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.css" />

     
      
    </head>
<body>

		<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">QantasPay</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
      </ul>
    </div>
  </nav>

  <div id="member_number">
  	<div class="wrapper">
    <div class="container">
       <div class="row">
        <div class="input-field col s12">
        	會員名稱: <input class="materialize-textarea" type="text" id="input_membership_number" /><br />
   
        </div>
    </div>
</div>
</div>
  </div>
   <div id="check_btn">
    <div class="wrapper">
    <div class="container">
       <div class="row">
        <div class="input-field col s12">
   <center> <input class="btn waves-effect waves-light" type="submit" value="下一步" onclick="check()" /> </center>
        </div>
    </div>
</div>
</div>
  </div>
   <div id="member_pw">
    <div class="wrapper">
    <div class="container">
       <div class="row">
        <div class="input-field col s12">
          密碼: <input class="materialize-textarea" type="password" id="input_membership_password" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" value="Login" onclick="checkPw()" /> </center>
        </div>
    </div>
</div>
</div>
  </div>
  	<div id="member_info">
  		 <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">歡迎！<h6 id="member_name"></h6></span>
          <p id="member_rank"></p>
          <p id="member_bal"></p>
          <p id="member_points"></p>
        </div>
        <div class="card-action">
          <a onclick="pay()">付款</a>
          <a onclick="logout()">登出</a>
        </div>
      </div>
    </div>
  </div>
  	</div>
    <div id="member_logout">
      <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">你已登出<h6 id="member_name"></h6></span>
          <p>你將在五秒後回到澳航主頁</p>
        </div>
        
      </div>
    </div>
  </div>
    </div>
    <div id="pay_pw">
    <div class="wrapper">
    <div class="container">
       <div class="row">
        <div class="input-field col s12">
          密碼: <input class="materialize-textarea" type="text" id="input_pay_password" /><br />
   <center> <input class="btn waves-effect waves-light" type="submit" value="下一步" onclick="checkPw()" /> </center>
        </div>
    </div>
</div>
</div>
  </div>
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
<script src="js/qff.js"></script>
</body>
    </html>
