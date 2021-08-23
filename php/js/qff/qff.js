var db = firebase.firestore();
const settings = {/* your settings... */ timestampsInSnapshots: true};
  db.settings(settings);

var numberRef = db.collection("membership");
const memberName=document.querySelector("#member_name");
const memberRank=document.querySelector("#member_rank");
const memberBal=document.querySelector("#member_bal");
const memberPoints=document.querySelector("#member_points");
var memberPw = 0;


memberNumberVar=document.getElementById("input_membership_number").value;

document.getElementById("member_info").style.display = "none";
document.getElementById("pay_pw").style.display = "none";
document.getElementById("member_logout").style.display = "none";
document.getElementById("member_pw").style.display = "block";
document.getElementById("check_btn").style.display = "none";



function logout() {
    document.getElementById('member_number').style.display = 'none';
        document.getElementById("member_info").style.display = "none";
        document.getElementById("member_logout").style.display = "block";
        setTimeout("location.href = 'http://home.puiching.edu.mo/~0700898-8/qantas/index.php';",5000);

}