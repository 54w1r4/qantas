var Paydb = firebase.firestore();
const Paysettings = {/* your settings... */ timestampsInSnapshots: true};
  Paydb.settings(Paysettings);
 firebase.auth().onAuthStateChanged(function(user) {
 if (user != null) {
    // User is signed in.
	  Uid = user.uid;
    Paydb.collection("membership").doc(Uid)
     .onSnapshot({
        // Listen for document metadata changes
        includeMetadataChanges: true
    }, function(doc) {
         if (doc.exists) {
        const PayData=doc.data();
       	PayProcessing = PayData.transacting;
       	PayStatusDone = PayData.transaction_done;

       	if (PayProcessing == false) {
       		$('#processing_REpayment').modal('close');
       		 $('#processing_payment_success').modal('close');
       	} else if (PayProcessing == true) {
       		 $('#pay').modal('close');
       		 $('#processing_REpayment').modal('open');
       	}

       	if (PayStatusDone == false) {

       	} else if (PayStatusDone == true) {
       		 $('#processing_REpayment').modal('close');
       		 $('#processing_payment_success').modal('open');
       	}
        //var nowUserBal = memberData.Bal;
       
    } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
        
       
    }
    });


    
  } else {
   
  }
});