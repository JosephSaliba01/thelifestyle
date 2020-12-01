<html>

<head>

<style type="text/css">
	/* unvisited link */
a:link {
  color: blue;
}

/* mouse over link */
a:hover {
  color: green;
}

/* selected link */
a {
  color: blue;
}	

</style>
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


$FirstName = $_POST['fName'];
$LastName = $_POST['lName'];
//$email = $_POST['email'];
$Password = $_POST['psw'];
$Username = $_POST['userID'];

$Finance = $_POST['FinanceResult'];
$FitNutr = $_POST['FitnessAndNutritionResult'];
$EduPro = $_POST['EduAnProResult'];

echo "<p>Welcome, $FirstName, your profile is set up and you may now go to the home page and log in with your new account. When you log in, the home page will be catered to what you showed interest in from the survey. Good luck and enjoy!</p>";
echo "<h3>- THELIFESTYLE Team</h3>";

$user = $database->get($Username);
    $user->name = $FirstName;
    $user->lname = $LastName;
    //$user->email = $email;
	$user->password = $Password ;
	$user->username = $Username ;

	$user->hasProfilePicture = false;

	$user->Finance = $Finance;
	$user->FitnessNutrition = $FitNutr;
	$user->EducationProfesional = $EduPro;

    $user->save();

?>
<br><br>
<br><br>
<a href="../HomePage.php"><h1 id="mbMainMenuHeader">CLICK HERE TO GO HOME</h1></a>
<img src="img/checkmark.png" alt="Account Creation Succesful" width="300" height="300">

<br>
<br>
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