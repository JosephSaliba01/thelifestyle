function set_cookie(){
	var username = document.getElementById("name").value;
	var email = document.getElementById("email");
	if(username == "" || email == ""){
		alert("Username or Email empty! You must enter a username and email to join!");
		return false;
	}
	document.cookie = "userName="+username;
	document.cookie = "userEmail="+email;
	return true;
}

function set_message(){
	var text_message = document.getElementById("txtbox").value;
	var username = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	
	if(text_message != "" && username != "" && email != ""){
		document.getElementById("msg_list").innerHTML += "<ul id='sent_msg' style='text-align:right; padding:5px;'><li style='font-family: Arial, Helvetica,sans-serif;font-size:12px;'>"+ 
		email +"</li><li class='txt_bub' style='background-color: #004BAA;color:white;'>"+ 
		text_message+"</li></ul>";
		document.getElementById("txtbox").value = "";	
	}
	else if(username == "" || email == ""){
		alert("Username or Email empty! You must enter a username and email to join!");
		return false;
	}
	document.getElementById("msg_list").scrollTop = document.getElementById("msg_list").scrollHeight;
	return true;
	
}