<?php

require '../Filebase/vendor/autoload.php';
session_start();


if(isset($_SESSION["username"])){
$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
    'backupLocation' => '../Filebase/Database/Backup'
]);

$user = $database->get($Username);

$title;
$button1;
$button2;
if(isset($_SESSION['username']))
{

   $title = "<h1> Welcome, ".$_SESSION['username']."!</h1>";
   $button1 = "<a href='../Profile.php' class='mbloginbtn'>Profile</a>";
   $button2 = "<a href='../PHP/LogOut.inc.php' class='mbloginbtn'>Log Out</a>";

}

}
else{
 $title = "<h1> Welcome to the LIFESTYLE.CA!</h1>";
 $button1 = "<a href='../Login.php' class='mbloginbtn'>Login</a>";
 $button2 = "<a href='../SignUp.php' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>TheLifestyle Instant Messenger</title>
	<link rel="stylesheet" type = "text/css" href="edu_css/educationCSS.css"/>
	<link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>
	<script type="text/javaScript" src="get_set_msg.js"></script>
</head>

<body class="body" style="background-color:#3399ff;" onload="updateMessagesOnPage()">
	<nav class="mbHeadernav">
			<div class="mbtablediv">
				<table>
					<tr>
						<td>
							<img src="edu_img/potentiallogo.png" alt="logo" style="width:50px;height:50px; float: left;">
						</td>
						<td>
							<a href="../HomePage.php" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
						</td>
						<td class="mbheadertd"  style="padding-left: 50px;">
							<a href="../Nutrition/Fitness&Nutrition.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

						</td>
						<td class="mbheadertd">
							<a href="education.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Education & Professional Life</p></a>
						</td>
						<td class="mbheadertd">
							<a href="../finances/financepage.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Finances</p></a>
						</td>
					</tr>
				</table>
			</div>
				
		 <div id="mbloginsignupsdiv">
                <?php
                echo "$button1";
                ?>
                <?php
                echo "$button2";
                ?>
            </div>
		</nav>

	
	
	<div class="msg_general_div">
		
		<section class="msg_titleBar">
			</br><span class="boxLabels">Public Chatroom: Network with other people!</span></br>
			
		</section>
			<section class="msg_list" id="msg_list">
				
			</section>
			
				<section class="msg_txtbox">
				
						<table class="inputTxt">
							<tr rowspan="2">
								<td>
									</br><input type="text" name="name" id="name" style="height:30px;" placeholder="Name"/>
								</td>
								<td>
									</br><input type="text" name="email" id="email" style="height:30px;" placeholder="Email"/>
								</td>
								<td id="setid">
									</br><input name="set" type="button"  id="sendBtn" style="height:30px; background-color:#7db3e3;" value="Set" onclick="set_cookie()"/>
								</td>
								
							</tr>
							<tr>
								<td colspan="3">
									<textarea name="textmessage" id="txtbox" rows="4" placeholder="Write message" style="width:97.9%;" ></textarea>
								</td>
								<td>
									</br><input name="send" type="button"  id="sendBtn" style="height:30px; background-color:#7db3e3;" value="Send" onclick="set_message()"/>
								</td>
							</tr>
						</table>
					
				</section>
			
	</div>
	
</body>

<div class="homepagefooter">
	<div class="footerdiv">
		<h1 class="footerheading">Start with the change now</h1>
		<div class="EmailAddressDiv">
			<input type="text" placeholder="Email Address" id="EmailAddressInput">
			<a href="" class="beginnow">Begin Now</a>
		</div>
		
	</div>

	<div class="footerlinkswrapper">
		<div class="footerlinksdiv">
			<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Sections</p>
			<p><a href="">Education</a></p>
			<p><a href="">Finances</a></p>
			<p><a href="">Health And Fitness</a></p>
		</div>
		<div class="footerlinksdiv">
			<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Go To</p>
			<p><a href="">Sign in my account</a></p>
			<p><a href="">Schedule Builder</a></p>
		</div>
		<div class="footerlinksdiv">
			<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">About us</p>
			<p><a href="">Contact</a></p>
			<p><a href="">FAQ</a></p>
			<p><a href="">Account</a></p>
		</div>
		<div class="footerlinksdiv">
			<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Why us?</p>
			<p><a href="">Our Values</a></p>
			<p><a href="">Our Mission</a></p>
		</div>
		<div class="footerlinksdiv">
			<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Follow us on</p>
			<p><a href="">Twitter</a></p>
			<p><a href="">Instagram</a></p>
			<p><a href="">Facebook</a></p>
		</div>
	</div>
</div>

</html>