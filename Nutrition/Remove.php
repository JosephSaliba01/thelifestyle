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

   array_pop($user->FooDataBase);
  
   $user->save();


?>