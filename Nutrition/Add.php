


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
   
   $Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);

$user = $database->get($Username);
$user->AddedFood  = $user->AddedFood +1;

}
else
{
	$title = "<h1> Welcome to the LIFESTYLE.CA!</h1>";
	$button1 = "<a href='../Login.php' class='mbloginbtn'>Login</a>";
	$button2 = "<a href='../SignUp.html' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}




?>


<!DOCTYPE html>

<html>

<head>

<script language="javascript" src='Fitness&Nutrition_js/FoodData.js'>    </script>


<link rel="stylesheet" type = "text/css" href="../home_css/Sign_Up_CSS.css">


<style>



body {
	
	background-color: white;
	
	
}
#NutritionTable{
margin:0 auto;
border-style: solid;
 height: 650px;
  width: 600px;
  
  background-color: #e2ecef;
}

#submit{

}

#submit2{



}

#email {
width : 50px;
}

.Profile 
    {
    	outline-style: solid;
      	outline-color: blue;
      	width: 25%;
      	border: 5px solid #cc6699;
      	box-shadow: 0 5px 15px;
      }
      .ScheduleBuilder
      {margin:0 auto;
	  border-style: solid;
      		outline-style: solid;
      	outline-color: black;
      	width: 50%;
      	border: 5px solid #3399ff;
      	box-shadow: 0 5px 15px;
		 font-size: 25px;
      }

.drag-drop{
    width: 600px;
     height: 50px; 
    background-color: #1caff6;
    margin-top: 30px;
    border-radius: 10px;
    border: dashed 2px white;
    color: white;
    text-align: center;
    padding-top: 40px;
    padding-bottom: 40px;
    font-size: 14pt;
    transition: .5s background-color, .5s color;
    height: 100px;
    font-family:inherit;
}

.drag-drop.dragover{
    background-color:#e2ecef;
    color: white;
}

.drag-drop.uploading{
    background-color: #e2ecef;
    color: white;
}

.Colum1{
 width: 1500px;

}

.Colum2{

width: 700px;
height : 800px;
}


#MyFood{
	
	width: 700px;
	height : 900px;
	  background-color: #e2ecef;
	  
	  color: black;
	  border-color: black;
	    margin-top : -1.3vh;
		
		border-style: solid;
}

#TopMenu{
	 background-color:#e2ecef;
	 
	 color :black; 
border-style: solid;
border-color: black;
width: 900px;
 text-align: center;
  margin:auto;
  margin-left : 23vh;
  left: 5px;
  
}


#Form{
	 background-color:#e2ecef;
	 
	  color :black; 
	
}

.MyButtons{
	
	background-color:white;
}


#name {
	
	background-color:white;	
}


#protein {
	
	background-color:white;	
}

#carbs {
	
	background-color:white;	
}

#fats {
	
	background-color:white;	
}

#calories {
	
	background-color:white;	
}

#url {
	background-color:white;	
	
	
}



</style>



</head>



<body >

<div id="ScheduleBuilder" >

<div id="TopMenu">
<h1> Add  your own food to the Database </h1>

<p id ="p1"> In order to make sure that you are adding the right measurements please feel free to consult the following website for more accuracy.  </p>

<a href="https://www.myfitnesspal.com/food/search">Fitness Pal</a>
<br>
<a href="https://www.nutritionix.com/">Nutritionix</a>

</div>

<table>
<tr>
<td class= "Colum1">
 


<form action = ""
method = "post"  id="Form">
<fieldset>
  
    <label for="name">Name of the food: </label>
    <input type="text" id="name"  class="MyButtons" name="name" value="Testar"> <br><br>
	
    <label for="lname">Protein per gram: </label>
    <input type="text" id="protein"  class="MyButtons"  name="protein" value="1"><br><br>
	
	   <label for="lname">Carbs per gram: </label>
    <input type="text" id="carbs"  class="MyButtons"  name="carbs" value="1"><br><br>
	
	   <label for="lname">Fats per gram: </label>
    <input type="text" id="fats" class="MyButtons"  name="fats" value="1"><br><br>
	
	   <label for="lname">Calories per gram: </label>
    <input type="text" id="calories"  class="MyButtons"  name="calories" value="1"><br><br>
	
	<label for="Description"></label>
	Please enter a small description for you newly added food .
	<br> <br>
<textarea id="Description" value="Description" name="Description" rows="10" cols="200">
  </textarea>
  
  <br> <br>
 <label for="lname"> If you have a picture for your food please copy paste the url here </label><br>
    <input type="text" id="Url" name="Url" value="data:image/jpeg;base64,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"> &nbsp;  &nbsp;  &nbsp;
  
</form>


</td>
<td  class= "Colum2">
<div id= "MyFood">
&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;

<h1 id="FoodTitle" > Do not forget to upload a picture for your newly added food  </h1>
<br>
<br><br>


 <img id="Food" width="1400" height="600" src="Fitness&Nutrition_img/food2.jpg"  alt="W3Schools.com" style="width:100%">
 
 </td>
 </div>
 
</tr>
</table>
	 <button  id="submit"  onclick = "Test()" >  Submit Image </button>
	 <br>
	 <br>
	 
	 <button  id="submit2"  onclick = "isImageOk()" >  Confirm </button>
	 
	
</div>


<script> 
function  Test() {

//'https://www.w3schools.com/images/w3schools_green.jpg' 

var name = document.getElementById("name");

var protein = document.getElementById("protein");

var carbs = document.getElementById("carbs");


var fats = document.getElementById("fats");

var calories = document.getElementById("calories");

var text = "The name of the food is " +name.value + " the protein per gram is "+ protein.value + " the number of cabrs per gram " + carbs.value + " the number of fats per gram is " + fats.value

+ " and the number of calories per gram is " + calories.value;

//alert(text);

var verif = false;

var link = document.getElementById("Url").value;

var single = "'";
var image = document.getElementById("Food");

image.alt = name.value;

image.src = link;

var image2 = document.getElementById("Food");
 if (link == "Url"|| image2.width <=56){
alert("The link you have entered is invalid or the image is too small please try again and copy the adress of the image correctly");
}

//alert(isImageOk(image));
//image.src = imageDropped.value;

}





function Update( a ) {
    // Create our XMLHttpRequest object
	
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "Information4.php";
	
    var vars = "NewElement="+a;
	
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

  
function isImageOk() {
var Descrip = document.getElementById("Description");
var verif = true;
var verif2= true;
var link = document.getElementById("Url").value;
var image = document.getElementById("Food");


//alert("We are inside is Image ok");

//alert( "the width of the image is "+ image.width );
   if(image.width <=60){
alert("The link you have entered is invalid or the image is too small please try again and copy the adress of the image correctly");
}

else {

var name = document.getElementById("name");
var protein = document.getElementById("protein");
 if(isNaN(protein.value)){
 verif = false;
 
 //alert( "Is this a number"+ isNaN(protein.value ));
 }

var carbs = document.getElementById("carbs");
 if(isNaN(carbs.value)){
  verif = false;
  
   //alert( "Is this a number"+ isNaN(carbs.value ));
 }

var fats = document.getElementById("fats");
 if(isNaN(fats.value)){
  verif = false;
  
    // alert( "Is this a number"+ isNaN(fats.value ));
 }
var calories = document.getElementById("calories");
 if(isNaN(calories.value)){
 verif = false;
 
// alert( "Is this a number"+ isNaN(calories.value ));
 }
 
  if(link == "Url"|| image.width <=60){
	   alert( "Is this a number a good image ? "+ image.width );
 verif2 = false;
 }
 
 if(verif == true && verif2==true ){

//alert("There is no mistake here");


   if(image.width <=60){
alert("The link you have entered is invalid or the image is too small please try again and copy the adress of the image correctly");
}

var Image = document.getElementById("Food");


var NewObject = {Name :name.value, ProteinPerGram:protein.value, CarbPerGram:carbs.value, FatPerGram:fats.value , CaloriesPerGram:calories.value , 

image :Image.value};


Update(name.value);

var Index='<?php echo $user->AddedFood; ?>';

var UserName='<?php echo $user->username; ?>';

<?php 


$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);

$user2 = $database->get($Username);

?>




  localStorage.setItem("Value1",name.value );
    localStorage.setItem("Value2",protein.value);
	  localStorage.setItem("Value3",carbs.value );
	    localStorage.setItem("Value4",fats.value );
		  localStorage.setItem("Value5",calories.value );
		    localStorage.setItem("Value6",link, );
			 localStorage.setItem("Value7",Descrip.value );
			  localStorage.setItem("Value8", Index);
			  localStorage.setItem("Value9", UserName);
  
	

window.open("Intermediate.php");

}

else if (verif == false) {

alert("Make sure to enter a number for the fields protein, carbs,fats and calories. ");

}

else if (link == "Url"|| image.width <=60){

alert("Make sure to enter a valid URL.");

}
	
}
    
}

</script>	
	
<!-- <script src='FoodData.js'></script> -->



</body>




</html>

















