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
   <link rel="stylesheet" type = "text/css" href="Fitness&Nutrition_css/video.css?v=<?php echo time(); ?>"/>
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
							<a href="../HomePage.html" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
						</td>
						<td class="mbheadertd"  style="padding-left: 50px;">
							<a href="Fitness&Nutrition.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

						</td>
						<td class="mbheadertd">
							<a href="../Education/education.html" class="mbheaderlinkanchors"><p class="mbheaderlinks">Education & Professional Life</p></a>
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
								<h1 style="font-family:Didot; text-align:center; font-size: 40px"> <b>What would you like to focus on? </b></h1>
							</td>
						</tr>
					</table>
				</div>
				<br><br>
			
			
				<table  class="Table3">
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
						<p> Learn the basics of stretching and balance </p>
						</div>
						</td>
					</tr>
				</table>
			
				<br><br><br><br>
				
				<div class="MainDivTagBanner">
				<p> <b> Click here to start your jouney!  </b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="../survey/quiz.html" class="loginbtn">Survey</a>   </p>   
			
				<p> If you have any questions, please consult our F.A.Q section where we show you how to set up your account, 
				navigate the website and use the tools provided at your discretion.</p>
				<br>
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