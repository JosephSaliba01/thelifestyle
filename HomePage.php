<?php
	
	session_start();
$title;
$button1;
$button2;
$displaySignUp = true;
if(isset($_SESSION['username']))
{

   $title = "<h1> Welcome, ".$_SESSION['username']."!</h1>";
   $button1 = "<a href='Profile.php' class='mbloginbtn'>Profile</a>";
   $button2 = "<a href='PHP/LogOut.inc.php' class='mbloginbtn'>Log Out</a>";
   $displaySignUp = false;

}
else
{
	$title = "<h1> Welcome to the LIFESTYLE.CA!</h1>";
	$button1 = "<a href='Login.php' class='mbloginbtn'>Login</a>";
	$button2 = "<a href='SignUp.html' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}


?>

<!DOCTYPE HTML>
<html>

	<head>
	<meta charset="UTF-8" />
	<title></title>
	<link rel="stylesheet" type = "text/css" href="home_css/homepage_css.css"/>
	<link rel="stylesheet" type = "text/css" href="home_css/menubar+footerCSS.css"/>


	</head>

	<div class="body">
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
		<div class="MainDivTag">
			<div class="SecondMainDivTag">

				<div class="horizontalwrapper">
					<div class="homepagecontainers">
						<table class="imageSlidesTable" style="max-width:800px">
							<tr >
								<td>
									<div class="Images with text" style="max-width:500px">	
									<img class="mySlides" src="home_img/img1.jpg" style="width:100%">
									<img class="mySlides" src="home_img/img2.jpg" style="width:100%">
									<img class="mySlides" src="home_img/img3.jpg" style="width:100%">
									</div>
								</td>
								
								<td>
									<p class="myText" value="test" > Learn about efficient budget management <br> </p>
									<p class="myText" value="test2">Nutrition and Fitness advice</p>
									<p class="myText" value="test3" >Professional and educational  tips </p>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="horizontalwrapper">
					<div class="homepagecontainers">
						<p class = "text">Thelifestyle.ca is a website dedicated to self-improvement. In this website we offer resources, tools and knowledge to anyone who wants to better his or her life.
							You will find in here a lot of content and information regarding the different sections but also some interactives features.
							By answering our surveys, we will give you advices tailored to your specific needs. </p>
					</div>
				</div>	

				<div class="horizontalwrapper">
					<div class="homepagecontainers">
						<table  class="imageSlidesTable" style="max-width:800px">
							<tr>
								<td>
									<ul>
										<h1 >Dynamic functionalities to keep track of your progress </h1>
										<li> Schedule builder to set up the events related to your goals    </li>
										<br>
										<li>Personal account to adapt your experience to the desired content section  </li>
										<br>
										<li>  Caloric intake calculator    </li>
										<br>
										<li>  Price comparator for different products </li>
									</ul>
								</td>
								<td>
									<div class="Images with text" style="max-width:300px" >	
										<img class="mySlides2" src="home_img/scheduel.jpg" style="width:100%">
										<img class="mySlides2" src="home_img/account.jpg" style="width:100%">
										<img class="mySlides2" src="home_img/Price.jpg" style="width:100%">
									</div>
								</td>
							</tr>
						</table>
					</div> 
				</div>

				<div class="horizontalwrapper">
					<div class="homepagecontainers">
						<table class="imageSlidesTable" style="max-width:800px">
							<tr>
								<td>
									<ul>
										<h1 >Get your financial life together &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h1>
										<li> Financial advice on budget management &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
										<br>
										<li> Investment and consumer best practices &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
										<br>
										<li> How and why to save money  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
									</ul>
								</td>
								<td>
									<div class="Images with text" style="max-width:300px" >	
										<img class="mySlides3" src="home_img/budget.jpg" style="width:100%">
										<img class="mySlides3" src="home_img/investement.jpg" style="width:100%">
										<img class="mySlides3" src="home_img/savings.jpg" style="width:100%">
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="horizontalwrapper">
					<div class="homepagecontainers">
						<table  class="imageSlidesTable" style="max-width:800px" >
							<tr>
								<td>
									<ul>
										<h1 >Educational and Professional life </h1>
										<li> Networking to get your career to greater heights  </li>
										<br>
										<li> Interactive survey to lead you towards the right career choice  </li>
										<br>
										<li>  Job market statistics   </li>
									
									</ul>
								</td>
								<td>
									<div class="Images with text" style="max-width:300px" >	
										<img class="mySlides4" src="home_img/networking.jpg" style="width:100%">
										<img class="mySlides4" src="home_img/survey.jpg" style="width:100%">
										<img class="mySlides4" src="home_img/statistics.jpg" style="width:100%">
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				
				<div class="horizontalwrapper">
					<div class="homepagecontainers">
						<table  class="imageSlidesTable" style="max-width:800px" >
							<tr>
								<td>
									<ul>
										<h1 >Learn about your body and how to optimize your life to the utmost  </h1>
										<li> The fundamentals of the nutritional pyramid and hypertrophy pyramid    </li>
										<br>
										<li> Nutrition Plans and workout programs detailed and explained   </li>
										<br>
										<li> Relevant video resources and scientific literature to answer your questions    </li>
									</ul>
								</td>
								<td>
									<div class="Images with text" style="max-width:300px" >	
										<img class="mySlides5" src="home_img/npyramid.jpg" style="width:100%">
										<img class="mySlides5" src="home_img/hpyramid.jpg" style="width:100%">
										<img class="mySlides5" src="home_img/science.jpg" style="width:100%">
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>

				
			<?php
			if ($displaySignUp) {
				echo "<p>
				Thank you for visiting our website your attention means a lot to us.
			</p>
			<p> <b> Click the 'Sign up' button to start your jouney!  </b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='SignUp.html' class='loginbtn'>Sign up</a></p>   
				
				<p> If you have any questions about anything feel free to consult our F.A.Q section where we would show you how to set up your account, 
				navigate through the website and use the tools at your disposition.</p>";
			}
			?>

			</div> 
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
</html>