

<?php
	
	require '../Filebase/vendor/autoload.php';
    session_start();

$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
	'backupLocation' => '../Filebase/Database/Backup'
]);


//$user->AddedMacros = true;

$user = $database->get($Username);


$userNameAndFood=  $_SESSION["username"] ."+".$_POST['NewElement'];
 
 
  array_push($user->FooDataBase,  $_POST['NewElement'] );
  
   array_push(  $user->AddedFoodArray,  $userNameAndFood);
   
   
   $string = "";
    $string2="";
     
   foreach ($user->FooDataBase as $value){
	$string .= $value . "+";
   }
   
   
     foreach ($user->AddedFoodArray as $value){
	$string2 .= $value . "$$$";
   }

  
  $_SESSION["TestNew"] = $string;
  
  
  $_SESSION["Test2"] = $string2;
  
  
   $user->save();
?>

<!DOCTYPE html>

<html>
<body>



</body>
</html>

<script>




</script>



