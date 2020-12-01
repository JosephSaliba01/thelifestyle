<?php
require 'Filebase/vendor/autoload.php';
session_start();

//database
$database = new \Filebase\Database([
    'dir' => 'Filebase/Database/users',
	'backupLocation' => 'Filebase/Database/Backup'
]);
if(isset($_SESSION['username']))
{
   $title = "<center><h1> Hello, ".$_SESSION['username']."!</h1></center>";
   $Name = "<h2>".$_SESSION["firstName"]. " ".$_SESSION["lastName"]."</h2>";
   $Finance = $_SESSION["financePref"];
   $FitNutr = $_SESSION["fitNutrPref"];
   $EduPro = $_SESSION["eduProfPref"];
   $button1 = "<a href='Profile.php' class='mbloginbtn'>Profile</a>";
   $button2 = "<a href='PHP/LogOut.inc.php' class='mbloginbtn'>Log Out</a>";
   $usrname = $_SESSION["username"];
   $user = $database->get($usrname);
   $_SESSION["hasPfp"] = $user->hasProfilePicture;
   if ($_SESSION["hasPfp"] == true) {
   	$profilePicLink = $user->profilePicture;
   }
}
else//should not go here for any reason but good for precautionary measures
{
	$title = "<h1> Hello USER</h1>";
	$Name = "<h3>DEFAULT</h3>";
	$button1 = "<a href='Login.php' class='mbloginbtn'>Login</a>";
	$button2 = "<a href='SignUp.html' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}

//Profile Picture
///////////////////////////////////////////////////////////////////////////////////////
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{

//img upload code
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false)
  {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } 
  else 
  {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	{
			echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
			if($database->has($_SESSION["username"]))
			{
				$user->profilePicture = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
				$profilePicLink = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
				$user->hasProfilePicture = true;
				$_SESSION["hasPfp"] = true;
				$user->save();
			}	
	}
	else 
	{
    echo "Sorry, there was an error uploading your file.";
    }
}
}
//////////////////////////////////////////////////////////////////////////////////////////

//Schedule builder code PHP can go here






////////////////////////////////////////
?>
<!DOCTYPE html>
<html>

<head>

<title> Profile </title>
<link rel="stylesheet" type = "text/css" href="home_css/Sign_Up_CSS.css">
<link rel="stylesheet" type = "text/css" href="home_css/menubar+footerCSS.css"/>
<style type="text/css">
	.float-container 
	{
		 display: flex;
  justify-content: space-around;
	}
    .Profile 
    {
    	outline-style: solid;
      	outline-color: black;
      	width: 25%;
      	border: 5px solid #cc6699;
      	box-shadow: 0 5px 15px;
      }
      .ScheduleBuilder
      {
      	outline-style: solid;
      	outline-color: black;
      	width: 70%;
      	border: 5px solid #3399ff;
      	box-shadow: 0 5px 15px;
      }
      h1
      {
      	font-family: Arial Narrow, sans-serif;
      }

</style>

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
							<a href="Nutrition/Fitness&Nutrition.html" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

						</td>
						<td class="mbheadertd">
							<a href="Education/education.html" class="mbheaderlinkanchors"><p class="mbheaderlinks">Education & Professional Life</p></a>
						</td>
						<td class="mbheadertd">
							<a href="finances/financepage.html" class="mbheaderlinkanchors"><p class="mbheaderlinks">Finances</p></a>
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

<?php
	echo "$title";
?>
<div class="float-container">
<div class="Profile">
	<?php
	if(isset($_SESSION["hasPfp"]) && $_SESSION["hasPfp"] == true)
	{
		echo "<img src= 'uploads/$profilePicLink' alt='User pf pic' class='rounded-circle' width='150'>";
	}
	else{
		echo "	<img src='home_img/default.png' alt='Default' class='rounded-circle' width='150'>";
	}
	?>
	<form action="" method="post" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload Image" name="submit">
	</form>

	<?php 
	echo "$Name"; 
	if(0 != $Finance)
	{
		echo "<h4>Finance profile: </h4>";
        echo "<a href='FinanceProfile.php'>Finance Profile</a>";
    }
    if(0 != $FitNutr)
    {
    	echo "<h4>Fitness and Nutrition profile: </h4>";
    	echo "<a href='FitnessAndNutritionProfile.php'>Fitness and Nutrition Profile</a>";
    }
    if(0 != $EduPro)
    {
    	echo "<h4>Education/Professional profile: </h4>";
        echo "<a href='EducationAndProProfile.php'>Education/Professional Profile</a>";
    }                

    ?>
</div>
<div class="ScheduleBuilder">
	<center><h1>Schedule Builder</h1></center>



</div>
</div>
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
</body>

</html>