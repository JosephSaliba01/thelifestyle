<?php

session_start();
require '../Filebase/vendor/autoload.php';

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/tasks',
	'backupLocation' => '../Filebase/Database/Backup'
]);
$id = $_GET['id'];
$statusT = $_GET['statusT'];
$newTask = $database->get($id);
$newTask->statusT = $statusT;
$newTask->save();

?>



