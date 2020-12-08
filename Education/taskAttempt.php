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
	<title>Study task manager</title>
	<link rel="stylesheet" type = "text/css" href="edu_css/educationCSS.css"/>
	<link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>
	<script type="text/javaScript" src="get_set_tasks.js"></script>
</head>
<body class="body"onload="display_task()">
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

	<br>
	<nav class="mbHeadernav2" id="mbMainMenuHeader" style="background-color:#f0ede6; padding:20px;">
		<label>Student task manager</label>
		<input type="button" value="Add task" name="Addtask" id="addTaskButton" onclick="set_task()"/>
	</nav>
	<div class="board">
	
		<table style="width:100%; padding:10px;">
			<tr>
				<td>
					<div class="board_list" id="queue" style="height:950px;">
						<section class="section" id="boardBox">
							In Queue
						</section>
						<section class="task_List" id="task_List1">
						
						</section>
					</div>
				</td>
				<td>
					<div class="board_list" id="executing" style="height:950px;">
						<section class="section" id="boardBox">
							Executing
						</section>
						<section class="task_List" id="task_List2">
						
						</section>
					</div>
				</td>
				<td>
					<div class="board_list" id="finished" style="height:950px;">
						<section class="section" id="boardBox">
							Finished
						</section>
						<section class="task_List" id="task_List3">
						
						</section>
					</div>
				</td>
			</tr>
		</table>
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