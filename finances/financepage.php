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
<head>
    <link rel="stylesheet" type = "text/css" href="financepage_css.css"/>
    <link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>
</head>


<div class="body">

    <nav class="mbHeadernav">
        <div class="mbtablediv">
            <table>
                <tr>
                    <td>
                        <img src="finances_img/potentiallogo.png" alt="logo" style="width:50px;height:50px; float: left;">
                    </td>
                    <td>
                        <a href="../HomePage.php" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
                    </td>
                    <td class="mbheadertd"  style="padding-left: 50px;">
                        <a href="../Nutrition/Fitness&Nutrition.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

                    </td>
                    <td class="mbheadertd">
                        <a href="../Education/education.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Education & Professional Life</p></a>
                    </td>
                    <td class="mbheadertd">
                        <a href="financepage.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Finances</p></a>
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

    <div class="MainDivTag">
        
        <div class="picturediv", id="pic1">
            <div class="blackdiv" id="blackdiv1">
                    <p>
                        let money grow on trees
                    </p>
            </div>    
        </div>
        
        <div class="picturediv", id="pic2">
            <div class="blackdiv" id="blackdiv2">
                <p>
                    "the best managment helper ever"
                </p>
            </div>    
            <div class="blackdiv" id="blackdiv3">
                <p>
                    based on experts' opinions
                </p>
            </div>
        </div>

        <div class="picturediv", id="pic3">
            <div class="blackdiv" id="blackdiv4">
                <h1>
                    Benefit From:
                </h1>
                <ul id="blackdiv4ul">
                    <li>
                        Experts' Advices on Investments
                    </li>
                    <li>
                        Database that will hold all your spendings and income information
                    </li>
                    <li>
                        Calculator that shows all the numbers you need for planning
                    </li>
                    <li>
                        Job-locator that informs you of nearby jobs of your interest
                    </li>
                </ul>
            </div>
        </div>
        <p class="blackdivp", style="font-size: 3vw; margin-top: 25%;">Start Earning And Spending</p>
        <a onclick="loadentryform()" style="text-decoration: none;"><p id="createfinanceaccount">Create A Finance Profile Now</p></a>
        <a onclick="loadportal()" style="text-decoration: none;"><p id="alreadyhaveone">I already have a finance profile</p></a>

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

<script>
    function loadentryform() {
        if ('<?php echo isset($_SESSION["username"])?>' == '') {
            alert('You are not Logged in!! Log in first to create a finance profile.')
        } else {
            window.location = 'entryform.php';
        }
    }

    function loadportal() {
        if (!'<?php if(isset($_SESSION["username"])) echo $user->FINANCEACCOUNTEXISTS; else echo('false') ?>') {
            alert("You don't have a finance profile yet!, Create one now!");
        } else {
            window.location = 'financeportal.php';
        }
    }
</script>

