<html>

<head>


<link rel="stylesheet" type = "text/css" href="../home_css/Sign_Up_CSS.css">
<link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>


<nav class="mbHeadernav">
			<div class="mbtablediv">
				<table>
					<tr>
						<td>
							<img src="../home_img/potentiallogo.png" alt="logo" style="width:50px;height:50px; float: left;">
						</td>
						<td>
							<a href="../HomePage.PHP" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
						</td>
					</tr>
				</table>
			</div>
</nav>

</head>

<body>
<?php

require '../Filebase/vendor/autoload.php';

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);

echo "<h1>Account creation succesful!</h1>";
echo "<p>Nice! You made an account. Well in order for us to get to know you better please fill out this survey to know what type of content you'd like to see! Once you are done, each page might have an event you might be intereted in to add it to your profile specific schedule-builder. More on that later!";

$FirstName = $_POST['fName'];
$LastName = $_POST['lName'];
//$email = $_POST['email'];
$Password = $_POST['psw'];
$Username = $_POST['userID'];

$user = $database->get($Username);
    $user->name = $FirstName;
    $user->lname = $LastName;
    //$user->email = $email;
	$user->password = $Password ;
	$user->username = $Username ;
	
    $user->save();

?>
<div class="wrapper">

</div>



</div>

	<div class="homepagefooter">
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

</body>


</html>