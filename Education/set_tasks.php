<?php
session_start();
require '../Filebase/vendor/autoload.php';

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/tasks',
	'backupLocation' => '../Filebase/Database/Backup'
]);

	$task = $_GET['task'];
	$subject = $_GET['subject'];
	$priority = $_GET['priority'];
	$statusT = $_GET['statusT'];
	$timestamp = uniqid("time"); 
	$id = $database->get($timestamp)->createdAt();
	
	$newTask = $database->get($id);
	$newTask->task = $task;
	$newTask->subject = $subject;
	$newTask->priority = $priority;
	$newTask->statusT = $statusT;
	$newTask->save();
?>