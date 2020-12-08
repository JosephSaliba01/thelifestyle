
<?php
	require '../Filebase/vendor/autoload.php';
	session_start();
$title;
$button1;
$button2;
if(isset($_SESSION['username'] ) )
{

   $title = "<h1> Welcome, ".$_SESSION['username']."!  You can now  design your own database of food</h1>";
   $button1 = "<a href='../profile.php' class='mbloginbtn'>Profile</a>";
   $button2 = "<a href='../PHP/LogOut.inc.php' class='mbloginbtn'>Log Out</a>";

}
else
{
	$title = "<h1> Welcome to the LIFESTYLE.CA!</h1>";
	$button1 = "<a href='../Login.php' class='mbloginbtn'>Login</a>";
	$button2 = "<a href='../SignUp.php' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}


$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);

$user = $database->get($Username);

 if($user->AddedMacros)
echo  "Calories: ". $user->DailyCaloricIntake . " Proteins: " . $user->DailyProteinIntake  ." Fats: " . $user->DailyFatIntake . " carbs " .  $user->CarbsFatIntake;
echo $title;

echo $_SESSION['username'];

echo "<br>";

$_SESSION['FoodData']  = "";

	foreach ($user->FooDataBase as $value){
	$_SESSION['FoodData']  .= $value . "+";
	
	echo  $value ." ";
  
}



	
?>

<!DOCTYPE HTML>
<html>

	<head>

		<meta charset="UTF-8" />
		<title>Food App</title>   
		<script   type="text/javascript" src="Fitness&Nutrition_js/FoodData.js"> </script>
	   
		<script>
			var value1 = "0";
			var value2 = "0";
			var value3 = "0";
			var value4 = "0";
		</script>
	   
		<style>                
			body  {  
				background-image: url("empty-blackboard.jpg");
			}
			
			.body{
				
			}
			   
			#Myapp{
				width:800px; 
				margin:0 auto;
				background-color: yellow;
				border-style: solid;
				width: 455px;
				color: silver;
			}


			h1{
				text-align: center;
				font-family: "Helvetica";
				font-size:0.8rem;
			}

			#color{
				background-color: #F8F8F8;
				height: 535px;
				width : 500px;
			}

			#Tag1{
				background-color: #F8F8F8;
			}

			#Titles{
				background-color: white;
				font-size: 35px;
				color : black;
			}

			#IDZ {
				height: 380px;
				width : 460px;
			}

			h1{
				size : 37px;
			}

			#MyTitle{
				font: 30px Arial, sans-serif;
			}

			#gram{	
				font: 30px Arial, sans-serif;
			}
			
			.li{
				font: 10px Arial, sans-serif;
			}

			#color2{
				width: 460px;
				height: 520px;
				background-color: #F8F8F8;
			}
			
			#TableApp{
				margin:0 auto;
				background-color: #00001a;
				border-style: solid;
				width: 1200px;
				color: white;
				overflow: scroll;
				height: 500px;
			}

			#Thebutton {
				background-color: #8B0000; 
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
				font-size : 20px;
			}

			#Log{
				background-color: #8B0000; 
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
				font-size : 20px;
			}

			#image {
				position: relative;
				top: 0px; left: 80px;
			}
			
			#activities {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}


			#weight {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			#Field {
				width: 460px;
				height: 540px;
				background-color: #F8F8F8;
				color: black;
			}

			#weight{
				width: 30%;
			}
			
			#NutritionTable{
				margin:0 auto;
				height: 950px;
				width: 1700px;
				font-family: Arial;
				background: rgba(255, 255, 255, 0.5);
				color : black;
				font: 30px Arial, sans-serif;
				border-style: solid;
				outline-style: solid;
				outline-color: black;
				border: 1px solid black;
				box-shadow: 5px 10px 10px black;
			}

			#row {
			  width: 600px;
			}

			td.row2 {
			  width: 400px;
			}
			
			#Proteins{
				height:15px;
				width:30px; 
			}

			#Title {
				color : black;
				text-align:center;
				float:center;
				margin:0;
			}

			#info{
				font: 35px Arial, sans-serif;	
			}

			#Title2 {
				font: 30px Arial, sans-serif;
				color : black;
			}

			#titleA{
				color : black;
				font-family: Verdana, Geneva, Tahoma, sans-serif;
				font-size:40px;
				margin:0 auto;
				text-align: center;
			}

			#Carbs{
				height:15px;
				width:30px; 
			}

			#Fats{
				height:15px;
				width:30px; 
			}

			#SecondTable{
				width: 800px;
				border: 1px solid black;
				width: 100%;
				display: table;
			}

			#title{
				margin:0 auto;
				text-align: center;
				font-size: 30px;
			}

			#MyHeader{
				margin:0 auto;
				text-align: center;
				font-size: 40px;	
			}
			
			#info{
			 font-size: 25px;
			}

			#Title{
			 font-size: 25px;
			}
			
			.chalkboard{
			
			}
			
			#Description{
				margin:5%;
			}
			
			#mbloginsignupsdiv{
				margin-left:0;
			}

	   </style> 
	   <!-- <link rel="stylesheet" type = "text/css" href="Fitness&Nutrition_css/Fitness&Nutrition_css.css"/> -->
	   <!-- <link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/> -->
	   <link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css?v=<?php echo time(); ?>"/>
	</head>

	<body>
		<div class="body">
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
		</div>
		
		<div  class="chalkboard">
			<table  id="TableApp">
				<tr>
					<td>
						<h1 id="Titles" >  Your own goals   </h1>
						 <div id="color2" >
							<canvas id="Test" width="200" height="190"></canvas>

							<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3"></script>
							
								<script> 
								
									function Graph3(a , b ,c ){
										var text = document.getElementById('p3');
										var text2 = document.getElementById('p4');
										var text3 = document.getElementById('p5');
									
										var ctx = document.getElementById('Test').getContext('2d');
										var myChart = new Chart(ctx, {
											type: 'bar',
											data: {
												labels: [ 'Cut','Maintenance', 'Bulk'],
												datasets: [{
													labels: ['Maintenance', 'Bulk', 'Cut'],
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
									}

									var maintenance='<?php echo $user->Maintenance; ?>';
									var FinanceJobArray='<?php echo $user->FinanceJobArray; ?>';
									var deficit ='<?php echo $user->Deficit; ?>';
									var surplus ='<?php echo $user->surplus; ?>';

							 
									//console.log(maintenance);
									//alert("Maintenance is " + maintenance + "deficit is " + deficit +  " suprlus is " + surplus );
							  
									Graph3(deficit,maintenance,surplus);
									
								</script>
							<!-- <div id ="MenuStyle" > -->
					</td>
					<td  id "IDZ">
						<!-- <br> <br> <br> <br> <br> <br> -->
					
						<form id="MyFORM">
							<fieldset id="Field">
								<h1 id="MyHeader" > Your nutrition maximizer </h1>
								<br> <br> <br>
								Food choice
								<select name="activity" id="activities">
								
									<!--
									<option value="Almonds" id="Almonds" >Almonds</option>
									<option value="Apple" id="Apple" >Apple</option>
									<option value="Brocoli" id="Brocoli" >Brocoli</option>
									<option value="Banana" id="Banana" >Banana</option>
									<option value="Butter" id="Butter" >Butter</option>
									<option value="Bacon" id="Bacon" >Bacon</option>
									<option value="Brown Rice" id="Brown Rice" >Brown Rice</option>
									<option value="Basmati Rice" id="Basmati Rice" >Basmati Rice</option>
									<option value="Brown Bread" id="Brown Bread" >Brown Bread</option>
									<option value="Chicken" id="Chicken" >Chicken</option>
									<option value="Milk" id="Milk" >Milk, low fat (1%) </option>
									<option value="Eggs" id="Eggs" >Eggs </option>
									<option value="Salmon" id="Salmon" >Pink Salmon</option>
									<option value="Steak" id="Steak" >Steak</option>
									<option value="Tomatoe" id="Tomatoe" >Tomato</option>
									<option value="White Rice" id="White Rice" >White Rice</option>
									<option value="White Bread" id="White Bread" >White Bread</option>
									<option value="Olive oil" id="Olive oil" >Olive oil </option>
									<option value="Peanut Butter" id="Peanut Butter" >Peanut Butter </option>										
									-->
						
						
								</select>
								<br> <br> 
								<label for="wheight">Weight in g</label>
									<input type="text" id="weight" name="weight"><br><br>
								<button type="button" value="Submit"   onclick="Calculation()" id= "Thebutton" >Verify</button>
								&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  
								<button type="button" value="Add"   onclick="mySort()"  id= "Thebutton" );> Add </button>
								&nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
								<button type="button" value="Log"   onclick="racking()"  id= "Log" >Log</button>
								<br>
								<br>
								&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; 
								&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
								<button type="button" value="Try"   onclick="Remove()"  id= "Thebutton" >Remove</button>
							</fieldset>	
					</td>
					<td>
						<div id="Tag1">
							<h1 id="Title" style="display:inline;"><b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							Daily food consumption </b></h1>
							<script>

								var a = <?php echo ( json_encode ($user->FooDataBase )) ?>;

								//alert(a);

								var b = <?php echo ( json_encode ($user->AddedFoodArray )) ?>;

								//alert(b);
								//appeding the values to the drop down menu

								//alert(localStorage.getItem(name+"Verif") );
								//if(localStorage.getItem(name+"Verif") == "true" ){

								var array= JSON.stringify('<?php echo $_SESSION["FoodData"]; ?>');
								var name = ('<?php echo $user->username ; ?>');
								var res = array.split("+");
								var index1 = res[0].split("");
								var Index1True ="";

								for(var i = 0 ; i < index1.length-1 ; i++){
									
									if(i>0)
									Index1True+= index1[i];
									
									
								}
								res[0] = Index1True;

								var select2 = document.getElementById("activities"); 
								var options = ["Appended"]; 

								for(var i = 0; i < res.length ; i++) {
									
									if(res[i].length != 1){
									var opt = res[i];
									var el = document.createElement("option");
									el.textContent = opt;
									el.value = opt;
									//alert( el.value);
									select2.appendChild(el);
									}

								}
								//}
								//localStorage.setItem(name+"Verif", "false");
								//alert(localStorage.getItem(name+"Verif") );
							</script>

							<div  id="Proteins2"  style="display:inline">  </div>  
							<p  id="P2" style="display:inline">  
								&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
								&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
								<div  id="Carbs2" style="display:inline">     </div>   
								<p  id="C2"  style="display:inline">   </p>
								&nbsp;  &nbsp;  &nbsp;  
								<div  id="Fats2"  style="display:inline">  </div>
								<p  id="F2"  style="display:inline">   </p>
								&nbsp;  &nbsp;  &nbsp; 
								<div  id="Calories2"  style="display:inline">  </div>
								<p  id="CAL2"  style="display:inline">   </p>

							</p>
						</div>
						<div id="color"> 
						
							<canvas id="Tracking" width="300" height="300"></canvas>

							<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

							<script>
								var ctx = document.getElementById('Tracking').getContext('2d');

								function racking() {

									var header = document.getElementById('Title');
									header.innerHTML = "";

									ctx.canvas.width =300;
									ctx.canvas.height = 300;

									var weight = document.getElementById("weight");
									
									if(weight.value =="")
									alert("Please enter a value for weight and verify the food you're entering before logging the value. ");
								
									else {

										var text = document.getElementById('calor');
										var text2 = document.getElementById('protein');
										var text3 = document.getElementById('carbs');
										var text4 = document.getElementById('fats');

										/*
										$_SESSION["Calories"] = $user->CaloricIntake;
										$_SESSION["Proteins"] = $user->ProteinIntake;
										$_SESSION["Carbs"] = $user->CarbIntake;
										$_SESSION["Fats"] = $user->FatIntake;

										*/
										
										Graph2(text2.innerHTML,text4.innerHTML,text3.innerHTML,text.innerHTML );
									}
								
									function Graph2(a , b , c ,d ){

										value1 =  parseInt(value1) + parseInt(a) ; 
										value2 = parseInt(value2) + parseInt(b) ; 
										value3 =  parseInt(value3) + parseInt(c) ; 
										value4 =  parseInt(value4) + parseInt(d) ; 


										Update( value1 , value2 , value3 , value4)

										const sum = parseInt(a) +parseInt(b) + parseInt(c)+ parseInt(d) ;

										const PourcentageA = Math.round(100* a/sum);	

										const PourcentageB = Math.round(100* b/sum);

										const PourcentageC = Math.round(100* c/sum);

										const PourcentageD = Math.round(100* d/sum);

										var labelProtein = document.getElementById('Proteins2');
										var labelCarbs = document.getElementById('Carbs2');
										var labelFats = document.getElementById('Fats2');
										var labelCalories = document.getElementById('Calories2');

										var Protein = document.getElementById('P2');
										var Carbs = document.getElementById('C2');
										var Fats = document.getElementById('F2');
										var Calories2 = document.getElementById('CAL2');

										Protein.innerHTML = "{"+PourcentageA + "% " + " | "+Math.round(value1) +" grams" +"}     ";
										Carbs.innerHTML = "{"+PourcentageB + "% " + " | " + Math.round(value2) +" grams" +"}";
										Fats.innerHTML ="{"+ PourcentageC + "% "  + " | "+ Math.round(value3) +" grams" +"}";
										Calories2.innerHTML ="{"+PourcentageD + "% "  + " | "+ Math.round(value4) +" grams" +"}";

										Protein.style.fontSize = "medium";
										Carbs.style.fontSize = "medium";
										Fats.style.fontSize = "medium";
										Calories2.style.fontSize = "medium";


										labelProtein.style.color = "black";
										labelCarbs.style.color = "black";
										labelFats.style.color = "black";
										labelCalories.style.color = "black";

										Protein.style.color = "black";
										Carbs.style.color = "black";
										Fats.style.color = "black";
										Calories2.style.color = "black";



										labelProtein.style.backgroundColor =  'rgba(255, 99, 132, 0.2)';
										labelCarbs.style.backgroundColor =   'rgba(54, 162, 235, 0.2)';
										labelFats.style.backgroundColor =  'rgba(255, 159, 64, 0.2)';
										labelCalories.style.backgroundColor =  'rgb(152,251,152)';

										labelProtein.innerHTML = "Proteins";
										labelCarbs.innerHTML = "Fats";
										labelFats.innerHTML = "Carbs";
										labelCalories.innerHTML = "Calories";

										var myChart = new Chart(ctx, {
											
											type: 'bar',label: 'Number of calories per day.',
											tooltipTitleFontSize: 0,
											data: {
												labels: ['Proteins', 'Fats', 'Carbs ' ,'Calories '],
												datasets: [{
												 // label: 'Fats',
													data: [value1, value2, value3,value4],
													backgroundColor: [
														'rgba(255, 99, 132, 0.2)',
														'rgba(54, 162, 235, 0.2)',
														'rgba(255, 159, 64, 0.2)',
														'rgb(152,251,152)'
													],
													borderColor: [
														'rgba(255, 99, 132, 1)',
														'rgba(54, 162, 235, 1)',
														'rgba(255, 159, 64, 1)',
															'rgb(0,128,0)'
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
												},
												responsive: true,
												maintainAspectRatio: false 
											}
										}) 
									}
								}
							</script>
						</div>
					</td>
				</tr>
			</table>
		
			<div id="NutritionTable" >
				<br>
				<b><p id="titleA"> Control your diet   </p></b>
			
				<p id="Description"> The nutrition maximizer is a tool that you can use to enhance your results during your health and fitness journey. 
				It comes with a basic database of the most commonly consumed foods as well as recommended types of food for a healthy diet. You can select a type of food from the list,
				and the tool will then illustrate the correct macronutrient profile of the selected food choice as well as its caloric content, based on the number of grams you consumed.   </p> 
				
				<table class ="SecondTable">
					<tr id="row">
						<td>
						
							<div  id="Proteins"  style="display:inline">  </div>  <p  id="P" style="display:inline">  </p>
							
							&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							
							<div  id="Carbs" style="display:inline">     </div>   
							<p  id="C"  style="display:inline">   </p>
							
							&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							&nbsp;  &nbsp;  
							
							<div  id="Fats"  style="display:inline">  </div>
							<p  id="F"  style="display:inline">   </p>
							
							<canvas id="Calories" width="100" height="100"></canvas>
						
							<script>
							
								var value = document.getElementById("activities");
								if(sessionStorage.getItem("Test") == "false"){
									//alert("The value that will be added is " + sessionStorage.getItem("Name"));
									value.options[value.length] = new Option(sessionStorage.getItem("Name"), sessionStorage.getItem("Name"));
									//alert("Printing");
							  
								}
									// var x  =  JSON.parse(sessionStorage.getItem("Object"));
									// var w = JSON.parse(sessionStorage.Object);
									// alert(w);
									//alert(y);
								function mySort() {

									sessionStorage.setItem("Test", "Test");
									window.location.href="Add.php";
									var name =  sessionStorage.getItem("Name");
								}
							</script>
							
							<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>

							<script language="javascript" src='Fitness&Nutrition_js/FoodData.js'>    </script>
						</td>
						<td>  
							&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
							<p style="display:inline" id="MyTitle"> These are the informations for  </p>  
							<p style="display:inline" id="gram"> </p> <p style="display:inline" id="Title2">   </p>  
							<p style="display:inline" id="MyTitle">grams   </p> 
							<ul id="info">
								<li >  Number of calories: <p id="calor" style="display:inline">   </p> </li>
								<br>
								<li> Number of proteins:   <p id="protein" style="display:inline">   </p>           </li>
								<br>
								<li>  Number of carbs:    <p id="carbs" style="display:inline">  </p>            </li>
								<br>
								<li>   Number of fats:     <p id="fats" style="display:inline">  </p>             </li>
								<td class = "row2">
									&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
									<img id="Food" width="500" height="300" src="Fitness&Nutrition_img/NutritionLogo1.png" style="width:100%">
								 
								</td>
							</ul>
						</td>
					</tr>
				</table>
			</div>
		
	</body>

	<script>

		function Update( a , b , c , d){
			// Create our XMLHttpRequest object

			var hr = new XMLHttpRequest();
			// Create some variables we need to send to our PHP file
			var url = "Information2.php";
			
			var vars = "Proteins="+a+"&Fats="+b +"&Carbs="+c+"&Calories="+d;
			
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


		function  Remove (){
			
			alert("We have deleted the latest entry");
			
			var a ="";
			var hr = new XMLHttpRequest();
			// Create some variables we need to send to our PHP file
			var url = "Remove.php";
			var vars = "Proteins="+a;
			
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
			location.reload();
			
		}

	</script>



</html>