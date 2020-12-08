
<?php
 session_start();
require '../Filebase/vendor/autoload.php';

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/messages',
	'backupLocation' => '../Filebase/Database/Backup'
]);
	$textMsg = $_GET['textmessage'];
	$name = $_GET['name'];
	$email = $_GET['email'];
	$timestamp = uniqid("time"); 
	$id = $database->get($timestamp)->createdAt();

$newmsg = $database->get($id);
$newmsg->username = $name;
$newmsg->email = $email;
$newmsg->text_message = $textMsg;


$newmsg->save();

?>
