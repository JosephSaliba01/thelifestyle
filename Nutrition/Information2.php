
<?php
	
	require '../Filebase/vendor/autoload.php';
    session_start();

$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);


$user = $database->get($Username);
	
	$user->AddedMacros = true;



$user->DailyCaloricIntake = $_POST['Calories'];
$user->DailyProteinIntake = $_POST['Proteins'];
$user->DailyFatIntake =  $_POST['Fats'];
$user->CarbsFatIntake = $_POST['Carbs']; 

 $user->save();


?>