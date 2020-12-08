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



<!DOCTYPE HTML>
<html>

<head>

   <meta charset="UTF-8" />
   <title></title>
   <link rel="stylesheet" type = "text/css" href="Fitness&Nutrition_css/Strength.css?v=<?php echo time(); ?>"/>
   <link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css?v=<?php echo time(); ?>"/>


</head>
	<body>
			<nav class="mbHeadernav">
		<div class="mbtablediv">
			<table>
				<tr>
					<td>
						<img src="Fitness&Nutrition_img/potentiallogo.png" alt="logo" style="width:50px;height:50px; float: left;">
					</td>
					<td>
						<a href="../HomePage.php" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
					</td>
					<td class="mbheadertd"  style="padding-left: 50px;">
						<a href="Fitness&Nutrition.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

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
		
		<section class="MainDivTag">
			
			
			
			
			<!------------ Banner -------------------------->
			<div class="MainDivTagBanner">
				<div class="banner-image" >	
					<div id=container>
							Train For It 
							<div id=flip>
								<div><div>Step</div></div>
								<div><div>One</div></div>
								<div><div>At A Time!</div></div>
						  </div>
							Keep It Real!
					</div>
				</div>
			</div>
			
			<div class="menuVideos">
			<ul>
				<li><a href="Videos.php">Home</a></li>
				<li><a href="#">Strength Training</a></li>
				<li><a href="Marathon.php">Marathon</a></li>
				<li><a href="Lifestyle.php">Lifestyle</a></li>
			</ul>
				<br style="clear:left"/>
			</div>
			
			<!--------------------- Body Content ------------------->
			<section class="SecondMainDivTag">
				<br>
				<br>

				<div class="background-section2">
					<table  class="Table2">
						
						
						<tr>
							<td>
								<ul>
								<h2 style="font-size:50px;"> Great Ab Exercises</h2>
								<p> Follow these videos to develop your abs the right way <br> with the help of Jeff Cavaliere. With discipline and <br>
								dedication every day, you will reach that perfect 6 pack <br> in no time!
								</p>
							
								</ul>
							</td>
							<td >
								<div class="slidershow">
									<div class="slides">
										<input type="radio" name="r" id="r1" checked>
										<input type="radio" name="r" id="r2">
										<input type="radio" name="r" id="r3">
										<input type="radio" name="r" id="r4">
										<input type="radio" name="r" id="r5">
										<div class="slide s1">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/MQe3wUNk2Yc" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/qk97w6ZmV90" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/MY6nKL59L1o" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/DHD1-2P94DI" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/rxEMKXW2Wqs" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
									</div>
									<div class="navigation">
										<label for="r1" class="bar"></label>
										<label for="r2" class="bar"></label>
										<label for="r3" class="bar"></label>
										<label for="r4" class="bar"></label>
										<label for="r5" class="bar"></label>
									</div>
								</div>
							</td>
							
							
						</tr>
					</table>
				</div>
				
				<table  class="Table3">
					<tr>
							<td >
								<div class="slidershow2">
									<div class="slides2">
										<input type="radio" name="r" id="rr1" checked>
										<input type="radio" name="r" id="rr2">
										<input type="radio" name="r" id="rr3">
										<input type="radio" name="r" id="rr4">
										<input type="radio" name="r" id="rr5">
										<div class="slide s1">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/k8mkr459wA8" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/JPBVWO6ABwU" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/JPBVWO6ABwU" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/CbD3wGzrO5s" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/P01H0XpNpk0" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
									</div>
									<div class="navigation2">
										<label for="rr1" class="bar2"></label>
										<label for="rr2" class="bar2"></label>
										<label for="rr3" class="bar2"></label>
										<label for="rr4" class="bar2"></label>
										<label for="rr5" class="bar2"></label>
									</div>
								</div>
								<br><br>
							</td>
							<td>
								<ul>
								<h2 style="font-size:50px;"> Tricep Exercises</h2>
								<p> Follow Jeff Cavaliere again to learn his secrets to <br> 
									bigger triceps. Did you know, your triceps make up 2/3 <br>
									of your biceps?
								</p>
							
								</ul>
							</td>
						</tr>
				</table>
		
				<br><br>
			
				<div class="background-section2">
					<table  class="Table4">
					
						<tr>
							<td>
								<ul>
								<h2 style="font-size:50px;"> Bicep Exercises </h2>
								<p> Train your biceps quickly and efficiently without wasting <br>
									time. Follow Jeff Cavailiere throughout these <br>
									videos for this week to reach your bicep goals<br> 
									with the help of Jeff Cavaliere.
								</p>
								<br><br><br><br>
								</ul>
							</td>
							<td >
								<div class="slidershow3">
									<div class="slides3">
										<input type="radio" name="r" id="rrr1" checked>
										<input type="radio" name="r" id="rrr2">
										<input type="radio" name="r" id="rrr3">
										<input type="radio" name="r" id="rrr4">
										<input type="radio" name="r" id="rrr5">
										<div class="slide s1">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/v07X1a7nOAE" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide3">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/hOWn9fZ2-0M" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide3">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/gozU3CUIizs" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide3">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/CR3zP0aqG3w" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide3">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/wxyH1-B4Y7s" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
									</div>
									<div class="navigation3">
										<label for="rrr1" class="bar3"></label>
										<label for="rrr2" class="bar3"></label>
										<label for="rrr3" class="bar3"></label>
										<label for="rrr4" class="bar3"></label>
										<label for="rrr5" class="bar3"></label>
									</div>
									
								</div><br><br><br><br>
							</td>
						</tr>
					</table>
				</div>
			
				<div class="MainDivTagFooter">
				<br><br>
				<h2 Style="text-align:center; font-size:40px"> Come back every week as we upload new videos and workout routines for you to try out as you train! </h2>
				<br><br>
				</div>
					<div class="MainFooterWrapper">
						<br><br><br><br><br><br><p><b> Click here to start your jouney!  </b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
						<a href="../survey/quiz.html" class="loginbtn">Survey</a>
						</p>
						<p> If you have any questions, please consult our F.A.Q section where we show you how to set up your account, 
						navigate the website and use the tools provided at your discretion.</p>
					</div>
				
				<script>
					var myIndex = 0;
					var myIndex2 = 0;
					image();
					text();

					function image() {
						var i;
						var x = document.getElementsByClassName("mySlides");
						var y = document.getElementsByClassName("mySlides2");
						var z = document.getElementsByClassName("mySlides3");
						var w = document.getElementsByClassName("mySlides4");
						var v = document.getElementsByClassName("mySlides5");
					  
					  for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
						 y[i].style.display = "none"; 
						 z[i].style.display = "none";  
						 w[i].style.display = "none"; 
						 v[i].style.display = "none";  
						
						}
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  
					  if (myIndex > y.length) {myIndex = 1}    
					  y[myIndex-1].style.display = "block"; 
					  
						if (myIndex > z.length) {myIndex = 1}    
					  z[myIndex-1].style.display = "block"; 
					  
						if (myIndex > w.length) {myIndex = 1}    
					  w[myIndex-1].style.display = "block"; 
					  
						if (myIndex > v.length) {myIndex = 1}    
					  v[myIndex-1].style.display = "block"; 
					  setTimeout(image, 3000); // Change image every 2 seconds
					}

					function text() {
					  var k;
					  var y = document.getElementsByClassName("myText");
					  for (k = 0; k < y.length; k++) {
						y[k].style.display = "none";  
					  }
					  myIndex2++;
					  if (myIndex2 > y.length) {myIndex2 = 1}    
					  y[myIndex2-1].style.display = "block";  
					  setTimeout(text, 3000); // Change image every 2 seconds
					}
				</script>
			</section> 
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