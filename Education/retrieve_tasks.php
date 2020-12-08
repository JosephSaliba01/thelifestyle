<?php
session_start();
require '../Filebase/vendor/autoload.php';

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/tasks',
	'backupLocation' => '../Filebase/Database/Backup'
]);
$result = $database->findAll();
foreach($result as $newTask){
	echo $newTask->task;
	echo "\\";
	echo $newTask->subject;
	echo "\\";
	echo $newTask->priority;
	echo "\\";
	echo $newTask->statusT;
	echo "\\";
	echo $newTask->createdAt();
	echo "\n";
	
}

?>
