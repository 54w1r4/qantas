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

document.getElementById("logout_div").style.display = "none";
document.getElementById("changePW_div").style.display = "none";
document.getElementById("editHWchinese").style.display = "none";
document.getElementById("editHWenglish").style.display = "none";
document.getElementById("editHWmath").style.display = "none";
document.getElementById("editHWadEnglish").style.display = "none";
document.getElementById("editHWdt").style.display = "none";
document.getElementById("editHWphy").style.display = "none";
document.getElementById("editHWbio").style.display = "none";
document.getElementById("editHWchemical").style.display = "none";
document.getElementById("editHWgeo").style.display = "none";
document.getElementById("editHWart").style.display = "none";
document.getElementById("editHWhistory").style.display = "none";
document.getElementById("editHWmusic").style.display = "none";
document.getElementById("changePW_text").style.display = "none";
document.getElementById("login").style.display = "block";
document.getElementById("firebaseui-auth-container").style.display = "none";
document.getElementById("loader").style.display = "none";
newPW_var=document.getElementById("newPW").value;
updateChineseText=document.getElementById("chinese").value;
updateEnglishText=document.getElementById("english").value;
updateMathText=document.getElementById("math").value;
updateHistoryText=document.getElementById("history").value;
updateGeoText=document.getElementById("geo").value;
updateDtText=document.getElementById("dt").value;
updatePhyText=document.getElementById("phy").value;
updateChemicalText=document.getElementById("chemical").value;
updateBioText=document.getElementById("bio").value;
updateArtText=document.getElementById("art").value;
updateMusicText= document.getElementById("music").value;
var ui = new firebaseui.auth.AuthUI(firebase.auth());
var db = firebase.firestore();
  const settings = {/* your settings... */ timestampsInSnapshots: true};
  db.settings(settings);

ui.start('#firebaseui-auth-container', {
  signInOptions: [
    // List of OAuth providers supported.
    firebase.auth.GoogleAuthProvider.PROVIDER_ID,

  ],
  // Other config options...
});

// Initialize the FirebaseUI Widget using Firebase.

var uiConfig = {
  callbacks: {
    signInSuccessWithAuthResult: function(authResult, redirectUrl) {
      // User successfully signed in.
      // Return type determines whether we continue the redirect automatically
      // or whether we leave that to developer to handle.
      document.getElementById("logout").style.display = "block";
      return false;
      

    },
    uiShown: function() {
      // The widget is rendered.
      // Hide the loader.
      document.getElementById('loader').style.display = 'none';
    }
  },
  // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
  signInFlow: 'popup',
  
  signInOptions: [
    // Leave the lines as is for the providers you want to offer your users.
    firebase.auth.GoogleAuthProvider.PROVIDER_ID,
  
  ],
 
};


// The start method will wait until the DOM is loaded.
ui.start('#firebaseui-auth-container', uiConfig);

function updateChinese() { 
var hwListRef = db.collection("activity_control").doc("hwList");
updateChineseText=document.getElementById("chinese").value;
// Set the "capital" field of the city 'DC'
return hwListRef.update({
    chineseHW: updateChineseText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}

firebase.auth().onAuthStateChanged(function(user) {
  var user = firebase.auth().currentUser;
  if (user != null) {
    // User is signed in.
    if (user.uid == "NaHUGzCJ3kMZPDOTFALHcu0D1ej1") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("editHWchinese").style.display = "block";
        document.getElementById("editHWenglish").style.display = "block";
        document.getElementById("editHWadEnglish").style.display = "block";
        document.getElementById("editHWmath").style.display = "block";
        document.getElementById("editHWdt").style.display = "block";
        document.getElementById("editHWphy").style.display = "block";
        document.getElementById("editHWchemical").style.display = "block";
        document.getElementById("editHWbio").style.display = "block";
        document.getElementById("editHWgeo").style.display = "block";
		document.getElementById("editHWart").style.display = "block";
		document.getElementById("editHWmusic").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "E1vuzW6QDJZmYoK8Anafi3dWEeG3") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("editHWchinese").style.display = "block";
        document.getElementById("editHWdt").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "Yv7lxQP96yOvKm10UPg84UmHGKP2" || user.uid == "PBvwjyLCk2Ttd6TiHNTideY1zCR2") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("editHWenglish").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "EIVGtDsAyzUFF1UAF1RrAhUz69J3" || user.uid == "i3sP2WopGDXef8PUXzhpFAOtyPu2") {
      document.getElementById("logout_div").style.display = "block";
      document.getElementById("changePW_div").style.display = "block";
        document.getElementById("editHWmath").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "kCuwObO7I3fh2DVUv6YEfxrGi733") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("editHWadEnglish").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "J0iJ3uRE6Hg1KxFsQ3InqsG1UXw1") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("editHWchinese").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "PlImgLXneMan56UdR2Ourmb7lHe2") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("editHWphy").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "Sb1vApoAuZePqgamh0AAxtYGnQn2") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("editHWchemical").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "PePo5tmxBsfRMiz2vB84BCibjJD2") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("editHWbio").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("editHWart").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "04tugN9wj3QLllZWXtBUJtggiZf2") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("editHWart").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "LFKLJgEORiUfEfos4xg4npvDRBv2") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("editHWgeo").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "P8LuLMvb1zcdxCtNK4Bl8L0J18r2") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("editHWhistory").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    } else if (user.uid == "C310wqOknGfc5MBvVDkAq3htLFR2") {
        document.getElementById("logout_div").style.display = "block";
        document.getElementById("editHWmusic").style.display = "block";
        document.getElementById("changePW_div").style.display = "block";
        document.getElementById("login").style.display = "none";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none";
    }
    else {
        document.getElementById("logout_div").style.display = "none";
        document.getElementById("login").style.display = "block";
        document.getElementById("firebaseui-auth-container").style.display = "none";
        document.getElementById("loader").style.display = "none"; 
    }
   // ...
  } else {
    document.getElementById("logout_div").style.display = "none";
    document.getElementById("login").style.display = "block";
    document.getElementById("firebaseui-auth-container").style.display = "none";
    document.getElementById("loader").style.display = "none";
  }
});


function login() {
  var emailLogin = document.getElementById("emailValue").value;
  pwLogin = document.getElementById("pwValue").value;

  firebase.auth().signInWithEmailAndPassword(emailLogin, pwLogin).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;

  alert("電子郵件/密碼錯誤 ");
  // ...
});

}

function changePW() {
    document.getElementById("logout_div").style.display = "none";
    document.getElementById("changePW_div").style.display = "none";
    document.getElementById("editHWchinese").style.display = "none";
    document.getElementById("editHWenglish").style.display = "none";
    document.getElementById("editHWmath").style.display = "none";
    document.getElementById("editHWadEnglish").style.display = "none";
    document.getElementById("editHWdt").style.display = "none";
    document.getElementById("editHWphy").style.display = "none";
    document.getElementById("editHWbio").style.display = "none";
    document.getElementById("editHWchemical").style.display = "none";
    document.getElementById("editHWgeo").style.display = "none";
    document.getElementById("editHWart").style.display = "none";
    document.getElementById("editHWhistory").style.display = "none";
    document.getElementById("editHWmusic").style.display = "none";
    document.getElementById("login").style.display = "none";
    document.getElementById("firebaseui-auth-container").style.display = "none";
    document.getElementById("loader").style.display = "none";
    document.getElementById("changePW_text").style.display = "block";
}

function newPWchange() {
  var user = firebase.auth().currentUser;
  newPW_var=document.getElementById("newPW").value;
    user.updatePassword(newPW_var).then(function() {
  alert("完成 !");
  firebase.auth().signOut().then(function() {
   document.getElementById("logout_div").style.display = "none";
document.getElementById("login").style.display = "block";
document.getElementById("firebaseui-auth-container").style.display = "none";
document.getElementById("loader").style.display = "none";
setTimeout("location.href = 'http://home.puiching.edu.mo/~0700898-8/qantas/php/editHW.php';",10);
}).catch(function(error) {
   document.getElementById("logout_div").style.display = "none";
document.getElementById("login").style.display = "block";
document.getElementById("firebaseui-auth-container").style.display = "none";
document.getElementById("loader").style.display = "none";
});
}).catch(function(error) {
  alert("目前無法處理你的要求，請重新登入，並稍後再試 !");
  console.log(error);
});

}

function updateEnglish() { 
var hwListRef = db.collection("activity_control").doc("hwList");
updateEnglishText=document.getElementById("english").value;
// Set the "capital" field of the city 'DC'
return hwListRef.update({
    englishHW: updateEnglishText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}

function updateMath() { 
var hwListRef = db.collection("activity_control").doc("hwList");
updateMathText=document.getElementById("math").value;
// Set the "capital" field of the city 'DC'
return hwListRef.update({
    mathHW: updateMathText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}

function updateHistory() { 
var hwListRef = db.collection("activity_control").doc("hwList");
// Set the "capital" field of the city 'DC'
updateHistoryText=document.getElementById("history").value;
return hwListRef.update({
    HistoryHW: updateHistoryText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}

function updateGeo() { 
var hwListRef = db.collection("activity_control").doc("hwList");

updateGeoText=document.getElementById("geo").value;
// Set the "capital" field of the city 'DC'
return hwListRef.update({
    geoHW: updateGeoText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}

function updateDt() { 
var hwListRef = db.collection("activity_control").doc("hwList");
updateDtText=document.getElementById("dt").value;
// Set the "capital" field of the city 'DC'
return hwListRef.update({
    dtHW: updateDtText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}

function updateArt() { 
var hwListRef = db.collection("activity_control").doc("hwList");
updateArtText=document.getElementById("art").value;
// Set the "capital" field of the city 'DC'
return hwListRef.update({
    artHW: updateArtText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}

function updatePhy() { 
var hwListRef = db.collection("activity_control").doc("hwList");
updatePhyText=document.getElementById("phy").value;
// Set the "capital" field of the city 'DC'
return hwListRef.update({
    phyHW: updatePhyText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}



function updateChemical() { 
var hwListRef = db.collection("activity_control").doc("hwList");
// Set the "capital" field of the city 'DC'
updateChemicalText=document.getElementById("chemical").value;
return hwListRef.update({
    chemicalHW: updateChemicalText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}

function updateBio() { 
var hwListRef = db.collection("activity_control").doc("hwList");
// Set the "capital" field of the city 'DC'
updateBioText=document.getElementById("bio").value;
return hwListRef.update({
    bioHW: updateBioText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}

function updateMusic() { 
var hwListRef = db.collection("activity_control").doc("hwList");
// Set the "capital" field of the city 'DC'
updateMusicText= document.getElementById("music").value;
return hwListRef.update({
    musicHW: updateMusicText
})
.then(function() {
    console.log("Document successfully updated!");
   alert("Success!");
})
.catch(function(error) {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
    alert("Failed, please retry !");
});

}

function logout() {
   firebase.auth().signOut().then(function() {
   document.getElementById("logout_div").style.display = "none";
document.getElementById("login").style.display = "block";
document.getElementById("firebaseui-auth-container").style.display = "none";
document.getElementById("loader").style.display = "none";
setTimeout("location.href = 'http://home.puiching.edu.mo/~0700898-8/qantas/php/editHW.php';",10);
}).catch(function(error) {
   document.getElementById("logout_div").style.display = "none";
document.getElementById("login").style.display = "block";
document.getElementById("firebaseui-auth-container").style.display = "none";
document.getElementById("loader").style.display = "none";
});
}