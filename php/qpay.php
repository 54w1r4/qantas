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

      
      
     <!-- <script src="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.1.1/firebaseui.css" /> -->

     
      
    </head>
<body>

		<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">QantasPay</a>
       <a class='modal-trigger btn-floating btn-large halfway-fab waves-effect waves-light teal' href='#login_info' style="float: right;"><i class="material-icons">check_circle</i></a>
       <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    
  </ul>
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
   
   <div id="member_pw">
    <div class="wrapper">
    <div class="container">
       <div class="row">
        <div class="input-field col s12">
          密碼: <input class="materialize-textarea" type="password" id="input_membership_password" /><br />
   <center> <a class="btn-floating btn-large waves-effect waves-light red" onclick="login()" ><i class="material-icons">vpn_key</i></a></center>
        </div>
    </div>
</div>
</div>
  </div>
  <div id="change_pw">
    <div class="wrapper">
    <div class="container">
       <div class="row">
        <div class="input-field col s12">
          <p>變更密碼時 :</p>
              <p>請注意密碼必須至少有6位字元，且密碼必須為英數混合密碼。</p>
          變更密碼: <input class="materialize-textarea" type="password" id="change_membership_password" /><br />
   <center><a class="btn-floating btn-large waves-effect waves-light red" onclick="changePW_back()" ><i class="material-icons">arrow_back</i></a> <a class="btn-floating btn-large waves-effect waves-light green" onclick="changeSavePW()" ><i class="material-icons">vpn_key</i></a></center>
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
          餘額(MOP) :<p id="member_bal"></p>
          <p id="member_points"></p>
        </div>
        
      </div>
    </div>
    
  </div>
  <div class="row">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-floating btn-large waves-effect waves-light green modal-trigger" href="#pay" onclick="generateBarCode()"><i class="material-icons">flip</i></a>付款&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-floating btn-large waves-effect waves-light red " onclick="changePW()"><i class="material-icons">vpn_key</i></a>變更密碼&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-floating btn-large waves-effect waves-light green " onclick="topup1()"><i class="material-icons">attach_money</i></a>充值&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-floating btn-large waves-effect waves-light green " onclick="transfer()"><i class="material-icons">swap_horiz</i></a>轉賬&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-floating btn-large waves-effect waves-light red "onclick="logout()"><i class="material-icons">exit_to_app</i></a>登出
  </div>
  	</div>
    <div id="top-up-1"></div>
     <div id="transfer_page">
       <div class="wrapper">
    <div class="container">
       <div class="row">
        <div class="input-field col s12">
          轉帳對象: (收款人@qpay.com)<input class="materialize-textarea" type="text" id="transfer_target" /><br />
          轉帳金額:<input class="materialize-textarea" type="number" id="transfer_cash" /><br />
   <center><a class="btn-floating btn-large waves-effect waves-light red" onclick="changePW_back()" ><i class="material-icons">arrow_back</i></a> <a class="btn-floating btn-large waves-effect waves-light green" onclick="transfer_check()" ><i class="material-icons">swap_horiz</i></a></center>
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
          <p>請稍候...</p>
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


   <!-- Modal Structure -->
  <div id="pay" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Pay :: 付款</h4>
      
    <img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=50x50"/>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">完成</a>
    </div>
  </div>
  <div id="top-up" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Top Up :: 充值</h4>
      <!-- <svg id="barcode2"></svg> -->
    <img id='barcode2' src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=50x50"/>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">完成</a>
    </div>
  </div>
 <div id="login_info" class="modal">
    <div class="modal-content">
      <h4>INFO :: 資訊</h4>
     <p>你的連線已被QantasPay認證及保護。</p>
      <p>Your connection is verified and seurced by QantasPay.</p>
    </div>
    <div class="modal-footer">

      <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
   <div id="changedPW" class="modal">
    <div class="modal-content">
      <h4>INFO :: 資訊</h4>
     <p>密碼已成功更新。</p>
      <p>Your password has successfully changed.</p>
    </div>
    <div class="modal-footer">

      <a href="#!" class="modal-close waves-effect waves-green btn-flat" onclick="logout()">OK</a>
    </div>
  </div>
  <div id="changedPW_error" class="modal">
    <div class="modal-content">
      <h4>ERROR :: 錯誤</h4>
     <p>抱歉!</p>
     <p>現時我們無法更新你的密碼，請檢查密碼格式，並稍後再試。如你持續不能更改密碼，請聯絡澳航辦事處，或親臨澳航中央辦事處。</p>
      <p>Sorry!</p>
      <p>We cannot update your password at this moment, please check your password format, then try again. If you still can't change your password, please contact Qantas, or find us at The Qantas Central Office.</p>
    </div>
    <div class="modal-footer">

      <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
   <div id="transfer_error" class="modal">
    <div class="modal-content">
      <h4>ERROR :: 錯誤</h4>
     <p>抱歉!</p>
     <p>現時我們無法處理你的要求，請稍後再試。如你的要求持續不能處理，請聯絡澳航辦事處，或親臨澳航中央辦事處。</p>
      <p>Sorry!</p>
      <p>We cannot process your request at this moment, please try again later. If you still can't process later, please contact Qantas, or find us at The Qantas Central Office.</p>
    </div>
    <div class="modal-footer">

      <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
  <div id="transfer_read_error" class="modal">
    <div class="modal-content">
      <h4>ERROR :: 錯誤</h4>
     <p>收款人不存在</p>
      <p>The user you are looking for is not in system.</p>
    </div>
    <div class="modal-footer">

      <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
  <div id="transfer_amount_error" class="modal">
    <div class="modal-content">
      <h4>ERROR :: 錯誤</h4>
     <p>錢包餘額不足</p>
      <p>Not enough cash in your QantasPay wallet.</p>
    </div>
    <div class="modal-footer">

      <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
  <div id="login_error" class="modal">
    <div class="modal-content">
      <h4>ERROR :: 錯誤</h4>
     <p>登入電郵或密碼錯誤，請檢查後再試。如你持續不能登入，請聯絡澳航辦事處，或親臨澳航中央辦事處。</p>
      <p>There is something wrong in the Email or Password field, please check then login again! If you still can't login, please contact Qantas, or find us at The Qantas Central Office.</p>
    </div>
    <div class="modal-footer">

      <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
  <div id="processing_REpayment" class="modal">
    <div class="modal-content">
      <h4>Processing :: 正在處理</h4>
     <p>正在聯絡QantasPay協同付款處理器...</p>
      <p>Contacting the QantasPay Payment Server...</p>
    </div>
    
  </div>
  <div id="processing_REpayment_success" class="modal">
    <div class="modal-content">
      <h4>Success :: 成功</h4>
     <p>轉賬成功</p>
      <p>Transfer Success</p>
    </div>
    <div class="modal-footer">

      <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
  <div id="processing_payment_success" class="modal">
    <div class="modal-content">
      <h4>Success :: 成功</h4>
     <p>交易成功</p>
      <p>Transaction Success</p>
    </div>
    <div class="modal-footer">

      <a href="#!" class="modal-close waves-effect waves-green btn-flat" onclick="turnStatusDone()">OK</a>
    </div>
  </div>
  <div id="promote_app" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Info :: 資訊</h4>
     <p>看來你並未下載全新的QantasPay 移動應用程式，下載應用程式可以讓你：</p>
     <p>(1)比起網頁版擁有更多功能</p>
     <p>(2)不需每次重新啟動網頁時都要重新登入帳戶</p>
     <p>(3)比起網頁版擁有更高安全性</p>
      <p>Looks like you haven't installed the new QantasPay App yet, download the new app can let you...</p>
      <p>(1) More features than the web version.</p>
      <p>(2) Don't need to sign in again when you refresh the website.</p>
      <p>(3) More secure than the web version.</p>
    </div>
    <div class="modal-footer">

      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Download :: 下載</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close :: 關閉</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat" onclick="nevershow_webPop();">Never show again :: 不要再顯示</a>
    </div>
  </div>
   <!-- Dropdown Structure -->
  
<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBk-z156Orj5B0WekVeAWFiXzrLwBkkKVA",
    authDomain: "qantas-pay.firebaseapp.com",
    databaseURL: "https://qantas-pay.firebaseio.com",
    projectId: "qantas-pay",
    storageBucket: "qantas-pay.appspot.com",
    messagingSenderId: "138631898892"
  };
  firebase.initializeApp(config);
</script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/qpay.js"></script>
<script src="js/payment.js"></script>
<script src="js/materialize.min.js"></script>
<!-- <script src="js/JsBarcode.all.min.js"></script> -->

<script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
  });
</script>

<script type="text/javascript">
  
  $(document).ready(function(){
    $('.dropdown-trigger').dropdown();
  });
  
</script>
</body>
    </html>
