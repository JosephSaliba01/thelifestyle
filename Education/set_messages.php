<html>
<body>
<?php
require '../Filebase/vendor/autoload.php';

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/messages',
	'backupLocation' => '../Filebase/Database/Backup'
]);

$name = $_POST['name'];
$email = $_POST['email'];
$textMsg = $_POST['txtbox'];


$newmsg = $database->get($email);
$newmsg->username = $name;
$newmsg->email = $email;
$newmsg->text_message = $textMsg;

$newmsg->save();



?>
</body>
</html>