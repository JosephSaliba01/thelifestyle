<?php
require '../Filebase/vendor/autoload.php';

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/messages',
	'backupLocation' => '../Filebase/Database/Backup'
]);
$textMsg = $_POST['txtbox'];
$name = $_POST['name'];
$email = $_POST['email'];

$newmsg = $database->get($email);
$newmsg->text_message = $textMsg;
$newmsg->username = $name;
$newmsg->email = $email;

$newmsg->save();

?>
