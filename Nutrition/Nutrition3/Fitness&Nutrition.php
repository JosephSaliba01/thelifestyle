

<?php

require '../Filebase/vendor/autoload.php';
session_start();


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
else
{
    $title = "<h1> Welcome to the LIFESTYLE.CA!</h1>";
    $button1 = "<a href='../Login.php' class='mbloginbtn'>Login</a>";
    $button2 = "<a href='../SignUp.html' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}

?>

<!DOCTYPE HTML>
<html>

	<head>

	   <meta charset="UTF-8" />
	   <title></title>
	     <link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>
	   <link rel="stylesheet" type = "text/css" href="Fitness&Nutrition_css/Fitness&Nutrition_css.css?v=<?php echo time(); ?>"/>
	   <link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css?v=<?php echo time(); ?>"/>


	</head>
	<body>
		
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
                        <a href="Nutrition/Fitness&Nutrition.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

                    </td>
                    <td class="mbheadertd">
                        <a href="../Education/education.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Education & Professional Life</p></a>
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
		
		<!------------ Banner -------------->
		<section class="MainDivTag">
			<div class="picturediv", id="pic1">
				<div class="blackdiv">
					<div class="banner-text">
						<h1 style="font-size:50px; "> Work Hard, Train Hard & Eat Right! </h1>
						<p> Keep It Real </p>
					</div>
				</div>
			</div>
		</section>
		<!------------ Body content -------------->
		
		<!------------ Fitness -------------->
		<section class="MainDivTag">
			<div class="picturediv", id="pic4">
				<div class="blackdiv">
					<div class="banner-text">
						<h1 style="font-size:50px; "> Fitness </h1>
					</div>
				</div>
			</div>
		</section>
	
		<!--- Yoga--->
		<section class="MainDivTag">
			<div class="picturediv", id="pic5">
				<div class="blackdiv">
					<div class="banner-text">
						<p class = "text" >Work hard, train hard and eat right in order to achieve results. No matter what your goal is, we can help you achieve it. 
						Fitness is the first step to living a healthy lifestyle. Browse the sections below for fitness video guides. <br> New videos will be added weekly! <br><br><br><br>
						</p>
					</div>
				</div>
			</div>
		</section>
		
		<div class="3-menu-wrap"><h1 style="font-family:Didot; text-align:center; font-size: 40px"> <b>What would you like to focus on? </b></h1>
			<table  class="Table2">
				<tr>
					<td>
						<a href="Strength.php" style="text-decoration:none">
							<div class="card card-1">
								<image src="Fitness&Nutrition_img/arm.png" class="mini-Image">
								<h2 style="font-size:40px"> Strength </h2>
								<p>Focus on building full body strength training </p>
							</div>
						</a>
					</td>
				
					<td>
						<a href="Marathon.php" style="text-decoration:none">
							<div class="card card-1">
								<image src="Fitness&Nutrition_img/run3.png" class="mini-Image2">
								<h2 style="font-size:40px"> Running </h2>
								<p style="text-align:center;"> Train your body to keep up with your goals </p>
							</div>
						</a>
					</td>
					
					<td>
						<a href="Lifestyle.php" style="text-decoration:none">
							<div class="card card-1">
							<image src="Fitness&Nutrition_img/yoga1.png" class="mini-Image3">
							<h2 style="font-size:40px">Lifestyle</h2>
							<p> Learn the basics of <br>stretching and balance </p>
							</div>
						</a>
					</td>
				</tr>
			</table>
		</div>
		<br><br>
		<section class="SecondMainDivTag">
		
			<!------------ Nutrition -------------->	
		
			<section class="MainDivTag">
				<div class="picturediv", id="pic2">
					<div class="blackdiv">
							<div class="banner-text">
								<br><br><h1 style="font-size:50px; "> Health & Nutrition </h1>
							</div>
					</div>
				</div>
			</section>
			<section class="MainDivTag">
				<div class="picturediv", id="pic3">
					<div class="blackdiv">
						<div class="Pyramid-pic1">
							<table>
								<tr>
									<td class="pic-Pyramid">
									<image src="Fitness&Nutrition_img/pyramid.jpg" width="500px" height="350px" style="border: 1px solid black; display: block" >
									</td>
							
								</tr>
							</table>	
						</div>
						<div class="Pyramid-pic2">
							<table>
								<tr>
									<td class="white-box">
										<p> <br><br><br>&nbsp;&nbsp; &nbsp;&nbsp;
												Nutrition begins with a well balanced meal. At some point, <br><br>
											you have probably already seen a healthy food pyramid such <br> <br>
											as the one below. Take a moment to review the basics of how <br><br>
											much you should be consuming from each category. Everyone <br><br>
											has different needs when it comes down to exact numbers so <br><br>
											our pyramid is simple. The bottom tiers are larger and therefore,<br><br>
											should make up the larger part of your daily intake. In your <br><br>
											user profile, you will find an app that you can use to customize <br><br>
											and track your daily nutrition intake.<br><br><br><br><br><br><br> 
										</p>
									</td>
								</tr>
							</table>	
						</div>
					</div>
				</div>
				
					<p style="text-align:center;"> <button style="padding: 10px 25px;"  onclick = "window.location.href = '../FooDDataBase.php' ">Click here</button> </p>
				
				
			</section>
		
			<br><br>
			<br><br>
			
			<div class="MainDivTagBanner">
				<p><b> Click here to start your jouney!  </b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<a href="../survey/quiz.html" class="loginbtn">Survey</a>  </p>   
				<p> If you have any questions, please consult our F.A.Q section where we show you how to set up your account, 
				navigate the website and use the tools provided at your discretion.</p>
			</div>
			
		</section> 
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