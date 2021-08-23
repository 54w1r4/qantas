var db = firebase.firestore();
const settings = {/* your settings... */ timestampsInSnapshots: true};
  db.settings(settings);
 
const memberName=document.querySelector("#member_name");
const memberRank=document.querySelector("#member_rank");
const memberBal=document.querySelector("#member_bal");
const memberPoints=document.querySelector("#member_points");
var memberPw = 0;
targetUserBal = 0;

var memberNumberVar=document.getElementById("input_membership_number").value;
var transferTarget=document.getElementById("transfer_target").value;
var transferCash=document.getElementById("transfer_cash").value;
memberPwVar=document.getElementById("input_membership_password").value;

document.getElementById("member_info").style.display = "none";
document.getElementById("pay_pw").style.display = "none";
document.getElementById("member_logout").style.display = "none";
document.getElementById("member_pw").style.display = "block";
document.getElementById("change_pw").style.display = "none";
document.getElementById("top-up-1").style.display = "none";
document.getElementById("transfer_page").style.display = "none";

function login() {
var memberNumberVar=document.getElementById("input_membership_number").value;
memberPwVar=document.getElementById("input_membership_password").value;
firebase.auth().signInWithEmailAndPassword(memberNumberVar, memberPwVar).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  console.log(errorMessage);
   $('#login_error').modal('open');
  document.getElementById("member_info").style.display = "none";
        document.getElementById("pay_pw").style.display = "none";
        document.getElementById("member_logout").style.display = "none";
       document.getElementById("member_pw").style.display = "block";
       document.getElementById("member_number").style.display = "block";
  // ...
});

firebase.auth().onAuthStateChanged(function(user) {
  var user = firebase.auth().currentUser;
  if (user != null) {
    // User is signed in.
	  Uid = user.uid;
    var numberRef = db.collection("membership").doc(Uid);
    numberRef.get().then(function(doc) {
    if (doc.exists) {
        const memberData=doc.data();
        document.getElementById("member_info").style.display = "block";
        document.getElementById("pay_pw").style.display = "none";
        document.getElementById("member_logout").style.display = "none";
        document.getElementById("member_pw").style.display = "none";
        document.getElementById("member_number").style.display = "none";
        memberName.innerText=memberData.Name;
        memberBal.innerText=memberData.Bal;
        web_pop = memberData.web_pop;
        if (web_pop == true) {
          $('#promote_app').modal('open');
        }  else {

        }
        //var nowUserBal = memberData.Bal;
    } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
        
        document.getElementById("member_info").style.display = "none";
        document.getElementById("pay_pw").style.display = "none";
        document.getElementById("member_logout").style.display = "none";
       document.getElementById("member_pw").style.display = "block";
    }
}).catch(function(error) {
    console.log("Error getting document:", error);
});
  } else {
   
  }
});

}

function nevershow_webPop() {
   return db.collection("membership").doc(Uid).update({
    web_pop: false,
})
.then(function() {
   
})
.catch(function(error) {
    // The document probably doesn't exist.
   
});
}

 function turnStatusDone() {
          return db.collection("membership").doc(Uid).update({
    transaction_done: false,
    transacting: false
})
.then(function() {
   
})
.catch(function(error) {
    // The document probably doesn't exist.
   
});
        }

function logout() {
  document.getElementById('member_number').style.display = 'none';
        document.getElementById("member_info").style.display = "none";
        document.getElementById("member_logout").style.display = "block";
        Uid = 0;
        setTimeout("location.href = 'http://home.puiching.edu.mo/~0700898-8/qantas/php/qpay.php';",100);
}

function generateBarCode() 
{
    var nric = Uid;
    var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
    $('#barcode').attr('src', url);
}

function changePW() {
  document.getElementById("member_info").style.display = "none";
  document.getElementById("pay_pw").style.display = "none";
  document.getElementById("member_logout").style.display = "none";
  document.getElementById("change_pw").style.display = "block";
}

function changeSavePW() {
  newPwVar=document.getElementById("change_membership_password").value;

  var user = firebase.auth().currentUser;

user.updatePassword(newPwVar).then(function() {
   $('#changedPW').modal('open');
}).catch(function(error) {
  $('#changedPW_error').modal('open');
});

}

function changePW_back() {
        document.getElementById("member_info").style.display = "block";
        document.getElementById("pay_pw").style.display = "none";
        document.getElementById("member_logout").style.display = "none";
        document.getElementById("member_pw").style.display = "none";
        document.getElementById("member_number").style.display = "none";
        document.getElementById("change_pw").style.display = "none";
        document.getElementById("transfer_page").style.display = "none";
}

function topup1() {
 
 /* JsBarcode("#barcode2", nric, {
  format: "CODE128",
  lineColor: "#000",
   width: 0.5,
  height: 40,
  displayValue: true
}); */
var nric = Uid;
    var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
    $('#barcode2').attr('src', url);
  $('#top-up').modal('open');
}

function transfer() {
  document.getElementById("transfer_page").style.display = "block";
  document.getElementById("member_info").style.display = "none";
  document.getElementById("pay_pw").style.display = "none";
  document.getElementById("member_logout").style.display = "none";
}

function transfer_check() {
  var transferTarget=document.getElementById("transfer_target").value;
  var transferCash=document.getElementById("transfer_cash").value;
  var nowUserBal=document.querySelector("#member_bal").innerText;
  var targetRef = db.collection("member_nameToUid").doc(transferTarget);

  targetRef.get().then(function(doc) {
    if (doc.exists) {
       const targetData=doc.data();
       userUidJava = targetData.user_uid;
        if (transferCash<=nowUserBal) {
          
        
          $('#processing_REpayment').modal('open');
          var newUserBal = (nowUserBal)-transferCash;
          memberBal.innerText=newUserBal;
         
          var selfRef = db.collection("membership").doc(Uid);
        
          targetUserBalRef = db.collection("membership").doc(userUidJava);
          targetUserBalRef.get().then(function(doc) {
    if (doc.exists) {
        const transferUidRefData = doc.data();
        var targetUserBal = transferUidRefData.Bal;
        var transferCash=document.getElementById("transfer_cash").value;
        var transferCash2=parseInt(transferCash);
       // console.log(transferCash2);
         var newUserBal2 = Number(targetUserBal) + Number(transferCash);
         var newUserBal3=parseInt(newUserBal2);
         //  console.log(newUserBal3);
         targetUserBalRef.update({
        Bal: newUserBal3
      })
      .then(function() {
    //console.log("TransferChangeSuccess");
          })
    .catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
}); 
     selfRef.update({
    Bal: newUserBal
})
.then(function() {
    //console.log("SelfChangeSuccess");
      $('#processing_REpayment').modal('close');
       $('#processing_REpayment_success').modal('open');

})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
});
    } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
 
        console.log(userUidJava);
    }
}).catch(function(error) {
    console.log("Error getting document:", error);
}); 

        } else if (transferCash>nowUserBal) {
          $('#transfer_amount_error').modal('open');
          console.log(nowUserBal);
          console.log(transferCash);
        }
    } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
        $('#transfer_read_error').modal('open');
       
    } // else close targetRef
}).catch(function(error) {
    console.log("Error getting document:", error);
    $('#transfer_error').modal('open');
}); //catch close
} //transfer function close
function setPersistence() {
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
}
