var clicked = 0;
function popupSite(id){
	
	if(id == "Eng" && clicked == 0){
		document.getElementById("popUp").innerHTML = "<iframe class='embededPage' src='https://www.jobbank.gc.ca/marketreport/summary-occupation/2757/ca' title='Mechanical Engineer prospects'></iframe>";
		clicked++;
	}
	else if(id == "IT" && clicked == 0){
		document.getElementById("popUp2").innerHTML = "<iframe class='embededPage' src='https://www.jobbank.gc.ca/marketreport/summary-occupation/22492/ca' title='Information Technology prospects'></iframe>";
		clicked++;
	}
	else if(id == "Hlth" && clicked == 0){
		document.getElementById("popUp3").innerHTML = "<iframe class='embededPage' src='https://www.jobbank.gc.ca/marketreport/summary-occupation/24432/ca' title='Health prospects'></iframe>";
		clicked++;
	}
	else if(id == "Bs" && clicked == 0){
		document.getElementById("popUp4").innerHTML = "<iframe class='embededPage' src='https://www.jobbank.gc.ca/marketreport/summary-occupation/15951/ca' title='Health prospects'></iframe>";
		clicked++;
	}
	else if(id == "Mrkt" && clicked == 0){
		document.getElementById("popUp5").innerHTML = "<iframe class='embededPage' src='https://www.jobbank.gc.ca/marketreport/outlook-occupation/3871/ca' title='Marketing prospects'></iframe>";
		clicked++;
	}
	else if(id == "Law" && clicked == 0){
		document.getElementById("popUp6").innerHTML = "<iframe class='embededPage' src='https://www.jobbank.gc.ca/marketreport/summary-occupation/15815/ca' title='Law prospects'></iframe>";
		clicked++;
	}
	else if(id == "Rtl" && clicked == 0){
		document.getElementById("popUp7").innerHTML = "<iframe class='embededPage' src='https://www.jobbank.gc.ca/marketreport/summary-occupation/20599/ca' title='Retailing prospects'></iframe>";
		clicked++;
	}
	else if((id == "Eng")&& clicked == 1){
		document.getElementById("popUp").innerHTML = "";
		clicked = 0;
	}
	else if((id == "IT")&& clicked == 1){
		document.getElementById("popUp2").innerHTML = "";
		clicked = 0;
	}
	else if((id == "Hlth")&& clicked == 1){
		document.getElementById("popUp3").innerHTML = "";
		clicked = 0;
	}
	else if((id == "Bs")&& clicked == 1){
		document.getElementById("popUp4").innerHTML = "";
		clicked = 0;
	}
	else if((id == "Mrkt")&& clicked == 1){
		document.getElementById("popUp5").innerHTML = "";
		clicked = 0;
	}
	else if((id == "Law")&& clicked == 1){
		document.getElementById("popUp6").innerHTML = "";
		clicked = 0;
	}
	else if((id == "Rtl")&& clicked == 1){
		document.getElementById("popUp7").innerHTML = "";
		clicked = 0;
	}
	return false;
}