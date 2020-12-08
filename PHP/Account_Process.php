<html>

<head>

<style type="text/css">

#accSuc{
	box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  width: 50%;
  height: 80%;
  border: 20px solid #660066;
 background: white;
  margin: auto;
  margin-top: 40px;

}	

</style>
<link rel="stylesheet" type = "text/css" href="../home_css/Sign_Up_CSS.css">
<link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>


<nav class="mbHeadernav">
			<div class="mbtablediv">
				<table>
					<tr>
						<td>
							<img src="../home_img/potentiallogo.png" alt="logo" style="width:50px;height:50px; float: left;">
						</td>
						<td>
							<a href="../HomePage.PHP" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
						</td>
					</tr>
				</table>
			</div>
</nav>

</head>

<body>
<?php

require '../Filebase/vendor/autoload.php';

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);

$counter_name = "../Filebase/counter.txt";
$userCount;
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  $counterVal = 0;
  fclose($f);
}
else
{
	$r = fopen($counter_name, "r");
	$counterVal = (int) fread($r, filesize($counter_name));
	$w = fopen($counter_name, "w");
	fwrite($w, ++$counterVal);
	fclose($r);
	fclose($w);
}


$FirstName = $_POST['fName'];
$LastName = $_POST['lName'];
//$email = $_POST['email'];
$Password = $_POST['psw'];
$Username = $_POST['userID'];

$Finance = $_POST['FinanceResult'];
$FitNutr = $_POST['FitnessAndNutritionResult'];
$EduPro = $_POST['EduAnProResult'];


echo "<div id='accSuc'><center><h1 id=''>Account creation succesful!</h1></center><p>Welcome, $FirstName, your profile is set up and you may now go to the home page and log in with your new account. When you log in, the home page will be catered to what you showed interest in from the survey. Good luck and enjoy!</p>";
echo "<center><h3>- THELIFESTYLE Team</h3></center>";

$user = $database->get($Username);
    $user->name = $FirstName;
    $user->lname = $LastName;
    //$user->email = $email;
	$user->password = $Password ;
	$user->username = $Username ;

	$user->hasProfilePicture = false;

	$user->Finance = $Finance;
	$user->FitnessNutrition = $FitNutr;
	$user->EducationProfesional = $EduPro;

	$user->userID = $counterVal;
	
	$user->AddedBMR = false;
	
	$user->AddedMacros = false;
	
	$user->AddMenu = false;
	
$user->Maintenance = 0;

$user->Deficit = 0;

$user->surplus = 0;

$_SESSION['FoodData'] = "";
$user->FooDataBase= array("Almonds","Apple","Brocoli","Banana","Butter" ,"Bacon","Brown Rice","Chicken" ,"Milk","Eggs" ,"Salmon","Steak","Tomatoe","White Rice","White Bread","White Bread"   
,"Olive oil" ,"Peanut Butter" );		
foreach ($user->FooDataBase as $value){
	$_SESSION['FoodData']  .= $value . "+";
  
}

$user->AddedFoodArray= array("DummyUser+Element1");

$user->DailyCaloricIntake = 0;
$user->DailyProteinIntake = 0;
$user->DailyFatIntake = 0;
$user->CarbsFatIntake = 0;

$user->AddedFood =0;



//FINANCE VARIABLE START COMMENT
    $user->Finance = $Finance;
    $user->FINANCEACCOUNTEXISTS = false;    
    $user->FinanceFirstName = "";
    $user->FinanceLastName = "";
    $user->FinanceGender = "";
    $user->FinanceAge = "";
    $user->FinanceDOB = "";
    $user->FinanceCellNum = "";

    $user->FinanceOption = "";
    $user->FinanceSavingAmount = "";
    $user->FinanceRentAmount = "";
    $user->FinanceTuitionAmount = "";
    $user->FinanceJobArray="";
    $user->FinanceProvidersArray="";
    $user->FinanceLoanArray="";
    $user->FinanceChildrenArray="";
    $user->FinanceIncomeTotal="";
    $user->FinanceLoanTotal="";
    $user->FinanceChildrenExpTotal="";
    //FINANCE VARIABLES END COMMENT

    $user->save();

?>
<br><br>
<center><a href="../Login.php" class="mbloginbtn">Login now!</a></center>
<br><br><br>
<center><img src="img/checkmark.png" alt="Account Creation Succesful" width="200" height="200"></center>
</div>
<br>
<br>
<br>
</div>

	<div class="homepagefooter">
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

var name = ('<?php echo $user->username ; ?>');

 localStorage.setItem(name+"Verif", "false");

</script>

</html>