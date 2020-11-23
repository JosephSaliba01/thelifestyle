<?php
require 'vendor/autoload.php';

//DETAILED INFO ABOUT FILEBASE IS AVAILABLE AT
https://github.com/tmarois/Filebase

// setting the access and configration to your database
$database = new \Filebase\Database([
    'dir' => 'Database/users',
	'backupLocation' => 'Database/Backup'
]);

//FLUSH the database (Deletes all the data... Use carefully)
$database->flush(true);

//CREATE/INSERT 10 dummy users
//users is the directory where a new .json file will be created for each user
// in this example, you would search an exact user name
// it would technically be stored as user_name.json in the directories
// if user_name.json doesn't exists get will return new empty Document
for ($x = 1; $x <= 10; $x++)
{
	$user = $database->get('John'.$x);
    $user->name = 'John'.$x;
    $user->email = 'john@john.com';
	$user->password = 'john123'.$x;
    $user->save();
}
echo "Total users found = " . $database->count() . "<br /><br />";

$user = $database->get('TEST');
    $user->name = 'test'.$x;
    $user->email = 'test@john.com';
	$user->password = 'test123'.$x;
    $user->save();

function findALLUsers($database)
{
	$results = $database->findAll();
	echo "USERS FOUND using findALL". "<br />";
	foreach($results as $user)
	{
		echo $user->name . " " . $user->email . "  ";
		// you can also run GET methods on each user (document found)
		// Displays when the user was created.
		echo $user->createdAt() . "<br />";
	}
}

//SEARCH
//You can find all the users in the database using findAll
findALLUsers($database);

//You can also users in the database using a query 
//https://github.com/tmarois/Filebase/blob/1.0/README.md#8-queries
echo "<br /> USERS FOUND using a QUERY". "<br />";
$users = $database->where('email','==','john@john.com')->orderBy('name','ASC')->results();
foreach($users as $user)
{
	echo $user['name'] . " " . $user['email'] . "<br />";    
}

//UPDATE
echo "<br /> UPDATE EMAIL FOR USER John2". "<br />";
if($database->has('John2'))
{
	echo "I found John2 <br />";
	echo "UPDATE EMAIL TO john@concordia.ca <br />";
	$user = $database->get('John2');
	$user->email = "john@concordia.ca";
	$user->save();
}
findALLUsers($database);

echo "<br /> UPDATE EMAIL WHERE PASSWORD is john1234". "<br />";
$users = $database->where('password','==','john1234')->resultDocuments();
if(count($users)>0)
{
	echo "USER EXISTS AND CURRENT VALUES ARE <br />";
	foreach($users as $user)
	{
		echo $user->name . " " . $user->email . "<br />";  		
		echo "UPDATE EMAIL TO john@concordia.ca <br />";
		$user->email = "john@concordia.ca";
		$user->save();		
	}	
}
findALLUsers($database);

?>