var db = firebase.firestore();
  const settings = {/* your settings... */ timestampsInSnapshots: true};
  db.settings(settings);

//String KEY_CHINESE = "chinese";
const TextField=document.querySelector("#lessonText");
const mathHwText_Script=document.querySelector("#mathHwText");
const dtHwText_Script=document.querySelector("#dtHwText");
const chineseHwText_Script=document.querySelector("#chineseHwText");
const englishHwText_Script=document.querySelector("#englishHwText");
const phyHwText_Script=document.querySelector("#phyHwText");
const artHwText_Script=document.querySelector("#artHwText");
const geoHwText_Script=document.querySelector("#geoHwText");
const historyHwText_Script=document.querySelector("#historyHwText");
const chemicalHwText_Script=document.querySelector("#chemicalHwText");
const bioHwText_Script=document.querySelector("#bioHwText");
const musicHwText_Script=document.querySelector("#musicHwText");
var r=0

var lessonRef = db.collection("activity_control").doc("lesson");


lessonRef.get().then(function(doc) {
	if (doc.exists) {
		//console.log("Yes !");
		const status=doc.data();
		// console.log(status);
		if (status.chinese == true) {
		TextField.innerText="目前狀態 : 中文";
	}
	if (status.english == true) {
		TextField.innerText="目前狀態 : 英文";
	}
	if (status.math == true) {
		TextField.innerText="目前狀態 : 數學";
	}
	if (status.history == true) {
		TextField.innerText="目前狀態 : 歷史";
	}
	if (status.geo == true) {
		TextField.innerText="目前狀態 : 地理";
	}if (status.computer == true) {
		TextField.innerText="目前狀態 : 資訊科技";
	}if (status.phy == true) {
		TextField.innerText="目前狀態 : 物理";
	}
	if (status.bio == true) {
		TextField.innerText="目前狀態 : 生物";
	}
	if (status.chemical == true) {
		TextField.innerText="目前狀態 : 化學";
	}
	if (status.music == true) {
		TextField.innerText="目前狀態 : 音樂";
	}
	if (status.art == true) {
		TextField.innerText="目前狀態 : 藝術";
	}
	if (status.dt == true) {
		TextField.innerText="目前狀態 : 設科";
	}
	if (status.pe == true) {
		TextField.innerText="目前狀態 : 體育";
	}
	if (status.genten == true) {
		TextField.innerText="目前狀態 : 品德公民";
	}
	if (status.landed == true) {
		TextField.innerText="目前狀態 : 已降落";
	}
	if (status.rest == true) {
		TextField.innerText="目前狀態 : 小息";
	}
	if (status.boarding == true) {
		TextField.innerText="目前狀態 : 現正登機";
	}else if (status.cancel == true) {
		TextField.innerText="目前狀態 : 已取消";
	}
	} else {
		console.log("Failed !");
	}
}).catch(function(error) {
	console.log("Error getting document !", error);
});

var hwListRef = db.collection("activity_control").doc("hwList");

hwListRef.get().then(function(doc) {
    if (doc.exists) {
    	const hwData = doc.data();
        mathHwText_Script.innerText=hwData.mathHW;
        dtHwText_Script.innerText=hwData.dtHW;
        chineseHwText_Script.innerText=hwData.chineseHW;
        englishHwText_Script.innerText=hwData.englishHW;
        phyHwText_Script.innerText=hwData.phyHW;
        artHwText_Script.innerText=hwData.artHW;
        geoHwText_Script.innerText=hwData.geoHW;
        historyHwText_Script.innerText=hwData.historyHW;
        chemicalHwText_Script.innerText=hwData.chemicalHW;
        bioHwText_Script.innerText=hwData.bioHW;
        musicHwText_Script.innerText=hwData.musicHW;
    } else {
        // doc.data() will be undefined in this case
        console.log("No such document!");
    }
}).catch(function(error) {
    console.log("Error getting document:", error);
});

function loop_hw() {
	 
if (r = 0) {
	document.getElementById("first_zone").style.display = "block";
        document.getElementById("second_zone").style.display = "none";
        document.getElementById("third_zone").style.display = "none";
        document.getElementById("four_zone").style.display = "none";

        setTimeout(switch_1, 10000);
} else if (r = 1) {
        	setTimeout(switch_2, 10000);
        } else if (r = 2) {
        	setTimeout(switch_3, 10000);
        }  
}

function switch_1() {
	 document.getElementById("second_zone").style.display = "block";
        document.getElementById("third_zone").style.display = "none";
        document.getElementById("four_zone").style.display = "none";
         document.getElementById("first_zone").style.display = "none";
        r = 1;

}

function switch_2() {
	document.getElementById("second_zone").style.display = "none";
        document.getElementById("third_zone").style.display = "block";
        document.getElementById("four_zone").style.display = "none";
         document.getElementById("first_zone").style.display = "none";

         r = 2;
}

function switch_3() {
	document.getElementById("second_zone").style.display = "none";
        document.getElementById("third_zone").style.display = "none";
        document.getElementById("four_zone").style.display = "block";
         document.getElementById("first_zone").style.display = "none";

         r = 0;
}
