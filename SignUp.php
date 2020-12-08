<?php  ?>

<!DOCTYPE html>
<html>

<head>

<title> Sign up page</title>
<script src="home_js/survey.js"></script>
<link rel="stylesheet" type = "text/css" href="home_css/survey.css"/>
<link rel="stylesheet" type = "text/css" href="home_css/Sign_Up_CSS.css">
<link rel="stylesheet" type = "text/css" href="home_css/menubar+footerCSS.css"/>

</head>
<body>
<nav class="mbHeadernav">
			<div class="mbtablediv">
				<table>
					<tr>
						<td>
							<img src="home_img/potentiallogo.png" alt="logo" style="width:50px;height:50px; float: left;">
						</td>
						<td>
							<a href="HomePage.php" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
						</td>
						<td class="mbheadertd"  style="padding-left: 50px;">
							<a href="Nutrition/Fitness&Nutrition.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

						</td>
						<td class="mbheadertd">
							<a href="Education/education.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Education & Professional Life</p></a>
						</td>
						<td class="mbheadertd">
							<a href="finances/financepage.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Finances</p></a>
						</td>
					</tr>
				</table>
			</div>
				
			<div id="mbloginsignupsdiv">
					<div>
						<a href="Login.php" class="mbloginbtn">Login</a>
					</div>
					
					<div>
						<a href="SignUp.php" class="mbheaderlinkanchors" style="text-decoration: underline;"><p class="mbheaderlinks">Create an Account</p></a>
					</div>
			</div>
		</nav>

<form action = "PHP/Account_Process.php" method="post" enctype="multipart/form-data" style="border:1px solid #ccc" id="SignUpForm">
  <div class="container" id="toHide">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="fName"><b>First name</b></label>
    <input id="fName" type="text" placeholder="Enter first name"  onkeyup="checkFirst();">
    <h3 class = "fail" id="fnamefail1"></h3>

    <label for="lName"><b>Last Name</b></label>
    <input id="lName" type="text" placeholder="Enter last name" onkeyup="checkLast();">
    <h3 class = "fail" id="fnamefail2"></h3>

    <label for="userID"><b>Username</b></label>
    <input id="userID" type="text" placeholder="Username" name="userID" onkeyup="checkUser();">
    <td><h3 class = "msg" id="chckID"></h3></td>

    <label for="psw"><b>Password</b></label>
    <input id="psw" type="password" placeholder="Enter Password" onkeyup="checkpswrd();">
     <h3 class = "fail" id="pwdfail1"></h3>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input id="psw-repeat" type="password" placeholder="Repeat Password" name="psw-repeat"onkeyup="checkequalpsw();">
    <h3 class = "fail" id="pwdfail2"></h3>

    <td><button type= "button" class="button" onclick="validateInput()"> Validate </button>
  </div>

<h3 id="PreSurvey"></h3>

<div class="wrapper" id="survey">
<p class="formP"><strong>Question 1</strong></p>
<p>I need help understanding how to:</p>
  <input type="checkbox" id="FitNutrChoice">
  <label for="q1a"> Maintain a healthy lifestyle as a student.</label><br>

  <input type="checkbox" id="FinanceChoice">
  <label for="q1b"> Maintain a budget as a student </label><br>
  
  <input type="checkbox" id="EduProfChoice">
  <label for="q1c"> Take advantage of career opportunities offered at my University </label><br>

<p><strong>Question 2</strong></p>
<p>I want to see what my school might help me in when it comes to:</p>
  <input type="checkbox" id="FitNutrChoice">
  <label for="q2a"> Food offered at school </label><br>

  <input type="checkbox" id="FinanceChoice">
  <label for="q2b"> Financial Aid and Scholarhips for school </label><br>
  
  <input type="checkbox" id="EduProfChoice">
  <label for="q2c"> The current school calendar career fair events and lunch-and-learns </label><br>

  <p><strong>Question 3</strong></p>
<p>Outside of school I:</p>
  <input type="checkbox" id="FitNutrChoice">
  <label for="q3a"> Find time to work out </label><br>

  <input type="checkbox" id="FinanceChoice">
  <label for="q3b"> Have a job and maintain a budget </label><br>
  
  <input type="checkbox" id="EduProfChoice">
  <label for="q3c"> Look for internship positions </label><br>

    <p><strong>Question 4</strong></p>
<p>The apps and websites you prefer to aid you in your daily life are:</p>
  <input type="checkbox" id="FitNutrChoice">
  <label for="q4a"> Workout, nutrition, and cooking apps </label><br>

  <input type="checkbox" id="FinanceChoice">
  <label for="q4b"> Money management apps </label><br>
  
  <input type="checkbox" id="EduProfChoice">
  <label for="q4c"> Linkedin and sites like indeed </label><br>

  <br>
  <button type="button" onclick="checkboxes()"> Complete Survey </button>
  <div id="hidden">
  <input id="fNameResult" type="text" name="fName">
  <input id="lNameResult" type="text" name="lName">
  <input id="UID" type="text" name="userID">	
  <input id="pswResult" type="text" name="psw">	
  <input id="FinanceResult" type="text" name="FinanceResult">
  <input id="FitnessAndNutritionResult" type="text" name="FitnessAndNutritionResult">
  <input id="EduAnProResult" type="text" name="EduAnProResult">
  </div>
  <input id="resultsSectionBtn" type="submit" name="accnt_pref" value="Click here to finalize your profile!">
</div>

</form>

</body>

<script>
	var fName;
	var lName;
	var uID;
	var pwd;
	var pwd2;

	var fNameLen;
	var lNameLen;
	
	var fnameCheck = false;
	var lnameCheck = false;
	var uIDCheck = false;
	var pwdCheck1 = false;
	var pwdCheck2 = false;
	//https://regex101.com/r/LdW1Tv/1  <-- Explenation to regex.
	//(?=.*...) any character including nothing followed by a ...
	//(?!.*\s) no space characters that immediately follow current string
	// If the password or usrnme is empty
	var pswrdMatch=  /^(?=(.*[^A-Za-z0-9]))(?=(.*[a-z]+))(?=(.*[A-Z]){2,})(?=(.*\d+)).{8,}/;

function checkUser()
{

uID = document.getElementById("userID").value;
directory = "Filebase\\Database\\users\\" + uID + ".json";

if(!fileExists(directory)){
	uIDCheck = true;
	document.getElementById("chckID").style.color = "green";
	document.getElementById("chckID").innerHTML = "Unique username, you may claim it";
}
else{
	uIDCheck = false;
	document.getElementById("chckID").style.color = "red";
	document.getElementById("chckID").innerHTML = "Username already exists!";
}

}

function fileExists(url)
{
    var http = new XMLHttpRequest();
    http.open('HEAD', url, false);
    http.send();
    return http.status!=404;
}

function checkFirst() 
{ 
		// retrieve the datas entered
	  fName= document.getElementById("fName");
	//  lName = document.getElementById("lName").value;
	  fNameLen = fName.value.length;
	  //lNameLen = lName.value.length;

	if (fNameLen == 0) 
	 {
	 	fnameCheck = false;
	    document.getElementById("fnamefail1").innerHTML = "First Name cannot be blank";
	 }
	 else
	 {
	 	fnameCheck = true;
	 	document.getElementById("fnamefail1").innerHTML = "";
	 }

}

function checkLast() 
{ 
	// retrieve the datas entered
	lName = document.getElementById("lName");
	lNameLen = lName.value.length;

	if (lNameLen == 0) 
	 {
	 	lnameCheck = false;
	    document.getElementById("fnamefail2").innerHTML = "Last Name cannot be blank";
	 }
	 else
	 {
	 	lnameCheck = true;
	 	document.getElementById("fnamefail2").innerHTML = "";
	 }
}

function checkpswrd()
{
	pwd = document.getElementById("psw");
	if (pwd.value.match(pswrdMatch)==null) 
	{
		document.getElementById("pwdfail1").style.color = "red";
		document.getElementById("pwdfail1").innerHTML = "Password must contain at least two uppercase characters, 1 lowercase character, \n 1 special character from {!, @, #, $, %, ^, &}, 1 digit and a minimum length of 8 characters";
		pwdCheck1 = false;
	}
	else
	{
		document.getElementById("pwdfail1").style.color = "green";
		document.getElementById("pwdfail1").innerHTML = "Good";
		pwdCheck1 = true;
	}
}

function checkequalpsw(){
	pwd2 = document.getElementById("psw-repeat").value;
	if(pwd == null){
		pwdCheck2 = false;
		document.getElementById("pwdfail2").style.color = "red";
		document.getElementById("pwdfail2").innerHTML = "Please fill out the first password field";
	}
	else if(pwd.value == pwd2 && pwdCheck1){
		pwdCheck2 = true;
		document.getElementById("pwdfail2").style.color = "green";
		document.getElementById("pwdfail2").innerHTML = "Passwords match";
	} 
	else{
		pwdCheck2 = false;
		document.getElementById("pwdfail2").style.color = "red";
		document.getElementById("pwdfail2").innerHTML = "Passwords do NOT match!";
	}
}

function validateInput(){
	if(fnameCheck && lnameCheck && pwdCheck1 && pwdCheck2 && uIDCheck){
		document.getElementById("PreSurvey").style.color = "green";
		document.getElementById("PreSurvey").innerHTML = "Awesome! We have your account details, please fill out this survey to get to know you better! After you have completed this survey, your acocunt will be stylized based off your results.";
		document.getElementById("toHide").style.display = "none";
		document.getElementById("survey").style.display = "block";
	}
	else{
		document.getElementById("PreSurvey").style.color = "red";
		document.getElementById("PreSurvey").innerHTML = "Error occured, check information filled or refresh page";
	}
}

</script>

</html>