

function set_message(){
	var text_message = document.getElementById("txtbox").value;
	var username = document.getElementById("name").value;
	var email = document.getElementById("email");
	
	if(text_message != "" && username != "" && email != ""){
		
		var xmlhttp=new XMLHttpRequest();
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("msg_list").innerHTML = "";//Text bubble, added via list
				//msgarea.innerHTML += "<div class=\"msgc\" style=\"margin-bottom: 30px;\"> <div class=\"msg msgfrom\">" + message + "</div> <div class=\"msgarr msgarrfrom\"></div> <div class=\"msgsentby msgsentbyfrom\">Sent by " + username + "</div> </div>";
				document.getElementById("txtbox").value = "";
			}
		}
		
	}
	
	
	
	
}