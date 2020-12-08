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
	<script   type="text/javascript" src="Fitness&Nutrition_js/Marathon.js"></script>
	<script   type="text/javascript" src="Fitness&Nutrition_js/form.js"></script>
	<?php
		echo '<script type="text/JavaScript">  
			AOS.init({
			duration: 1200,
			});
		</script>' 
		; 
	?>
   <link rel="stylesheet" type = "text/css" href="Fitness&Nutrition_css/Marathon.css?v=<?php echo time(); ?>"/>
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
				<li><a href="Strength.php">Strength Training</a></li>
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
								<h2 style="font-size:50px;"> Before The Run</h2>
								<p> Before any run, it’s important to have the proper gear <br> 
									such as shoes and clothing. These videos will guide you <br>
									in the type of gear you should get depending on the distance <br>
									and the terrain that you will be running on.
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
											<iframe width="700" height="445" src="https://www.youtube.com/embed/Y8lIFxCE5Ro" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/TfbpfteKN5A" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/yyHott_ltE4" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/KdGkGlQalVE" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/IsjLIr2tLmI" frameborder="0"
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
											<iframe width="700" height="445" src="https://www.youtube.com/embed/DdiBikKi85w" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/ZEF-DrIMW0k" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/jmyLSQ0REmo" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/21zzg-qr-tc" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/Q-Hfw4gADx4" frameborder="0"
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
								<h2 style="font-size:50px;"> Train For It <br></h2>
								<p> Your training starts now! Whether you are training <br>
									for a 5km to a 42km marathon, it’s important to know <br>
									the do’s and don’ts in order to be ready for the big day.<br> 
									<br>
									
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
								<h2 style="font-size:50px;"> The Big Day </h2>
								<p> Today is the day. After weeks of running, you are finally <br>
									ready to take on that distance. Here are a couple of things <br>
									to keep in mind during the run. <br>
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
											<iframe width="700" height="445" src="https://www.youtube.com/embed/kI79u0ym8yM" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide3">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/3ItnxJLAOeY" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide3">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/bZ5I1kGd9dg" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide3">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/Yb_9o7YTmiU" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
												allowfullscreen>
											</iframe>
										</div>
										<div class="slide3">
											<iframe width="700" height="445" src="https://www.youtube.com/embed/lOuZ5iavrhs" frameborder="0"
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