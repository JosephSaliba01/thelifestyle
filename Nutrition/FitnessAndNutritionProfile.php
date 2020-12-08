

<?php
	
	require '../Filebase/vendor/autoload.php';
    session_start();
    
$title;
$button1;
$button2;
if(isset($_SESSION['username']))
{

   $title = "<h1> Welcome, ".$_SESSION['username']."! ";
   $button1 = "<a href='../profile.php' class='mbloginbtn'>Profile</a>";
   $button2 = "<a href='../PHP/LogOut.inc.php' class='mbloginbtn'>Log Out</a>";

}
else
{
	$title = "<h1> Welcome to the LIFESTYLE.CA!</h1>";
	$button1 = "<a href='../Login.php' class='mbloginbtn'>Login</a>";
	$button2 = "<a href='../SignUp.php' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}


$Verif = false;




echo $title;

$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);

$user = $database->get($Username);

 if($user->AddedBMR )
echo  "Surplus is ". $user->surplus . " Deficit is  " . $user->Deficit  , "maintenance is " . $user->Maintenance ;



/*
 $user->CaloricIntake = $_SESSION["Calories"];
  $user->ProteinIntake = $_SESSION["Proteins"];
  $user->CarbIntake = $_SESSION["Carbs"];
 $user->FatIntake = $_SESSION["Fats"] ;


*/


?>
<!DOCTYPE html>
<html>

<head>

<title> Profile </title>
<link rel="stylesheet" type = "text/css" href="../home_css/Sign_Up_CSS.css">
<link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>
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
		
		height : 550px;
      }
      .ScheduleBuilder
      {
      	outline-style: solid;
      	outline-color: black;
      	width: 70%;
      	border: 5px solid #3399ff;
      	box-shadow: 0 5px 15px;
		
		 font-size: 25px;
		
      }
	  
	 
	  
	  #activities {
width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

 font-size: 15px;

}
	  
      h1
      {
      	font-family: Arial Narrow, sans-serif;
      }



.float-container{
	
	height : 800px;
	
	width : 400 px;
	
}

.ScheduleBuilder{
	height: 500 px;
}


</style>

</head>
<body>
<nav class="mbHeadernav">
			<div class="mbtablediv">
				<table>
					<tr>
						<td>
							<img src="../home_img/potentiallogo.png" alt="logo" style="width:50px;height:50px; float: left;">
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

<br> 
<div class="float-container"  id ="container">

 
<div class="Profile">
<canvas id="Calories" width="50" height="50"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3"></script>

</div>
<div class="ScheduleBuilder">
	<center><h1>Caloric intake calculaor</h1></center>
							<form>
									<label for="age">Age </label> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
										<input type="text" id="age" name="age"><br><br>
									<label for="lname">Height in cm</label>
										<input type="text" id="height" name="height"><br><br> 
									<label for="lname">Weight in kg</label>
										<input type="text" id="weight" name="weight"><br><br>
										Gender ?   <input type="radio" id="male" name="gender" value="male">&nbsp;
									<label for="male">Male</label>&nbsp;
										<input type="radio" id="female" name="gender" value="female">
									<label for="female">Female</label>&nbsp;
										<br> <br>
									<label for="activity">What is your weekly level of physical activity ? </label>
									<select name="activity" id="activities">
										<option value="Sedentary" id="Sedentary" >Sedentary or very minimum exercise.</option>
										<option value="Light" id="Light" >Light exercise 1 to 3 times a week.</option>
										<option value="Average" id="Average" >Average intensity 3 to 5 times a week.</option>
										<option value="High" id="High" >High intensity 3 to 5 times a week.</option>
										<option value="Intense" id="Intense" >Extremly intense and high activity the entire week.</option>
									</select>
										<br><br>
										<button type="button" value="Submit"   onclick="CaloricIntake()" >Submit</button>
										<br>
									
							</form>
							
							<p id = "p3" style="font-size:15px">   </p> 
						<p id = "p4" style="font-size:15px">   </p> 
						<p id = "p5" style="font-size:15px">   </p> 

</div>
</div>

<br>
<br>

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



<script>

function CaloricIntake(){

	
	var age = document.getElementById('age').value;
	
	var countainer = document.getElementById('container');
	
	var height = document.getElementById('height').value;
	var weight = document.getElementById('weight').value;
	
	var gender;
	
	
	if (document.getElementById('male').checked) {
gender = document.getElementById('male').value;
}


if (document.getElementById('female').checked) {
gender = document.getElementById('female').value;
}

var LevelOfActivity = document.getElementById('activities').value;
	
	
	var Level = 0;
	
         if (LevelOfActivity == "Sedentary"){
			   Level = 1.2; 
		 }
		 	
		  else if(LevelOfActivity == "Light"){
			   Level = 1.375; 
		   }
		   
		  else if(LevelOfActivity == "Average"){
			   Level = 1.55; 
		   }
		   
		   else if(LevelOfActivity == "High"){
			   Level = 1.725; 
		   }
		   
		   else if (LevelOfActivity == "Intense"){
			   Level = 1.9; 
		   }


var BMR;

if(gender == "male" ) {
	BMR  = Math.round((88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age))* Level);
	
}

if(gender == "female" )
	BMR  = Math.round((447.593 + (9.247 * weight) + (3.098  * height) - (4.330  * age)*Level));



var s = "The age is " + age + " the height is " + height  + " the weight is " + weight  + " the gender is " + gender  +" the level of activity is " + LevelOfActivity;
	
	var calories;
	
	var text = document.getElementById('p3');
	var text2 = document.getElementById('p4');
	var text3 = document.getElementById('p5');
	
	var surplus =Math.round(1.07*BMR) ;
	var deficit = Math.round(0.9* BMR);
	
	var surplus2 = Math.round(surplus - BMR);
	
	var deficit2 = Math.round (BMR - 0.9* BMR);
	
	
	text.innerHTML = "Your basic caloric intake  is " + BMR +" calories a day.";
	text2.innerHTML = "If you want to gain muscle on lean bulk you can go with  " + surplus + " calories with a " +  surplus2 + " calories surplus.";
	text3.innerHTML = "If you want to lose weight  you can go with " + deficit +" calories  with a " +  deficit2  + " calories deficit.";



	Graph(BMR,surplus,deficit);
	
	
	
	countainer.style.height = "1000px";
	
	
	text.style.color = "#483D8B";
text2.style.color = "#483D8B";
text3.style.color = "#483D8B";


text.style.fontSize = "25px";
text2.style.fontSize = "25px";
text3.style.fontSize = "25px";

/*

Men BMR = 88.362 + (13.397 x weight in kg) + (4.799 x height in cm) - (5.677 x age in years)
Women BMR = 447.593 + (9.247 x weight in kg) + (3.098 x height in cm) - (4.330 x age in years)


*/
	
}



function Update( a , b , c){
    // Create our XMLHttpRequest object
	
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "Information.php";
	
    var vars = "Maintenance="+a+"&Bulk="+b+"&Cut="+c;
	
	
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
  
}


function Graph (a , b ,c ){
	
	
 var text = document.getElementById('p3');
	var text2 = document.getElementById('p4');
	var text3 = document.getElementById('p5');
	
var ctx = document.getElementById('Calories').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Maintenance', 'Bulk', 'Cut'],
        datasets: [{
            //label: 'Number of calories per day.',
            data: [a, b, c],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
		legend: {
    display: false
  }
    }
});


Update(a,b,c);


}





</script>


















</html>