<?php
session_start();
require '../Filebase/vendor/autoload.php';

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/messages',
	'backupLocation' => '../Filebase/Database/Backup'
]);
$result = $database->findAll();
foreach($result as $newMsg){
	echo $newMsg->text_message;
	echo "\\";
	echo $newMsg->email;
	echo "\\";
	echo $newMsg->createdAt();
	echo "\n";
	
}

?>
