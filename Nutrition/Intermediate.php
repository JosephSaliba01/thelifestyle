




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
	$button2 = "<a href='../SignUp.html' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}




$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);

$user = $database->get($Username);

?>


<!DOCTYPE html>

<html>


<head>

<script language="javascript" src='Fitness&Nutrition_js/FoodData.js'>    </script>


<script> 


var a = <?php echo ( json_encode ($user->FooDataBase )) ?>;

var b = <?php echo ( json_encode ($user->AddedFoodArray )) ?>;


//alert(a);
   localStorage.setItem("Array2", JSON.stringify(a));
   
//alert(b);
   localStorage.setItem("Array", JSON.stringify(b) );
	
	var a1 = localStorage.getItem("Value1");
	var a2 = localStorage.getItem("Value2");
	var a3 = localStorage.getItem("Value3");
	var a4 = localStorage.getItem("Value4");
	var a5 = localStorage.getItem("Value5");
	var a6 = localStorage.getItem("Value6");
	var a7 = localStorage.getItem("Value7");
	var a8 = localStorage.getItem("Value8");
	var a9 = localStorage.getItem("Value9");


Add(a1,a2,a3,a4,a5,a6,a7,a8,a9);


</script>

</head>
<body>



</body>
</html>

<script>




</script>



