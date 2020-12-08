

<?php
	
	require '../Filebase/vendor/autoload.php';
    session_start();

$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);


$user->AddedMacros = true;
$user = $database->get($Username);

$user->Maintenance = $_POST['Maintenance'];

$user->Deficit = $_POST['Bulk'];

$user->surplus = $_POST['Cut'];


 $user->save();


?>