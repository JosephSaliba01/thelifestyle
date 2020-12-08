
function set_cookie(){
	
	var email = document.getElementById("email").value;
	if(email == ""){
		alert("Username or Email empty! You must enter a username and email to join!");
		return false;
	}
	document.cookie = "userEmail="+email;
	document.getElementById("setid").innerHTML = "";//Deletes set button so the cookie cannot be changed
	return true;
}
function get_cookie(key) {
	var name = key + "=";
	var cookie = document.cookie;
	var cookieArray = cookie.split(';');
	for(var i = 0; i <cookieArray.length; i++) {
		if (cookieArray[i].indexOf(name) == 0) {
		  return cookieArray[i].substring(name.length, cookieArray[i].length);
		}
	}
	return "";
}
function updateMessagesOnPage(){//displays messages
	var textList = "";
	
	var xmlhttp = new XMLHttpRequest();
	
	var update = setInterval(function(){
		var email = get_cookie("userEmail");
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				var result = xmlhttp.responseText.split("\n");
				var newMsg = "";
				var text_message = "";
				
				for(var i = 0; i < result.length; i++){
					newMsg = result[i].split("\\");
				
					if(newMsg[1] == email && newMsg[0] != "" && !textList.includes(newMsg[2])){
						if(document.getElementById("msg_list").innerHTML.includes(newMsg[0])){
							continue;
						}
						text_message = "<ul id='sent_msg' style='text-align:right; padding:5px;'><li style='font-family: Arial, Helvetica,sans-serif;font-size:12px;'>"+ 
						newMsg[1] +"</li><li class='txt_bub' style='background-color: #004BAA;color:white;'>"+ 
						newMsg[0]+"</li></ul>\n";
						document.getElementById("msg_list").innerHTML += text_message;
						textList += (text_message+newMsg[2]);
						document.getElementById("msg_list").scrollTop = document.getElementById("msg_list").scrollHeight;
					}
					else if(newMsg[1] != email && newMsg[0] != "" && !textList.includes(newMsg[2])){
						text_message = "<ul id='sent_msg' style='text-align:left; padding:5px;'><li style='font-family: Arial, Helvetica,sans-serif;font-size:12px;'>"+
						newMsg[1]+"</li><li class='txt_bub' style='background-color:#f0ede6;color:black;'>"+
						newMsg[0]+"</li></ul>\n";
						document.getElementById("msg_list").innerHTML += text_message;
						textList += (text_message+newMsg[2]);
						document.getElementById("msg_list").scrollTop = document.getElementById("msg_list").scrollHeight;
					}
					

				}
			}
		};
		xmlhttp.open("GET","retrieve_messages.php",true);
		xmlhttp.send();
	},1000);	
	
}
function set_message(){//sends messages to database
	var text_message = document.getElementById("txtbox").value;
	var username = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	
	if(text_message != "" && username != "" && email != ""){
		var xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				
				document.getElementById("txtbox").value = "";
				document.getElementById("msg_list").scrollTop = document.getElementById("msg_list").scrollHeight;
			}
		};
		xmlhttp.open("GET","set_messages.php?name="+username+"&email="+email+"&textmessage="+text_message+"&send=Send",true);
		xmlhttp.send();
		
	}
	else if(username == "" || email == ""){
		alert("Username or Email empty! You must enter a username and email to join!");
		return false;
	}
	
	return true;
	
}
