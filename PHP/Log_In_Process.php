
<html>
<!--
<head>


<meta charset = "utf-8" />
<style type = "text/css">
td, th, table {border: thin solid black;}
</style>
</head>
-->
<body>

<?php

require '../Filebase/vendor/autoload.php';

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);

$Username = $_POST['username'];
$Password = $_POST['password'];



$user = $database->get($Username);
    
	if($user!= null && $Password ==$user->password){
		
		echo $user->name . ", greetings. Sign in successful!";
	}
	
    else {
		
		echo "The informations do not match ";
		
	}



?>

</body>
</html>