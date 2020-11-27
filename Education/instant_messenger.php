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
							<a href="../HomePage.html" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
						</td>
						<td class="mbheadertd"  style="padding-left: 50px;">
							<a href="../Nutrition/Fitness&Nutrition.html" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

						</td>
						<td class="mbheadertd">
							<a href="education.html" class="mbheaderlinkanchors"><p class="mbheaderlinks">Education & Professional Life</p></a>
						</td>
						<td class="mbheadertd">
							<a href="../finances/financepage.html" class="mbheaderlinkanchors"><p class="mbheaderlinks">Finances</p></a>
						</td>
					</tr>
				</table>
			</div>
				
			<div id="mbloginsignupsdiv">
					<div>
						<a href="" class="mbloginbtn">Login</a>
					</div>
					
					<div>
						<a href="" class="mbheaderlinkanchors" style="text-decoration: underline;"><p class="mbheaderlinks">Create an Account</p></a>
					</div>
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
								<td>
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