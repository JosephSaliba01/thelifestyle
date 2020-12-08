

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


   $string = "";
    $string2="";
     
   foreach ($user->FooDataBase as $value){
	$string .= $value . "+";
   }
   
   
     foreach ($user->AddedFoodArray as $value){
	$string2 .= $value . "$$$";
   }
   
   
   
  
  $_SESSION["TestNew3"] = $string;
  
  
  $_SESSION["Test23"] = $string2;
  
  
   $user->save();
?>

<!DOCTYPE html>

<html>
<body>



</body>
</html>

<script>
<?php 
        $php_array = array('abc','def','ghi');
    ?>  
    var array_code = <?php echo json_encode($php_array); ?>;
    console.log(array_code);
	

var array2 = [ "test " , "test2"];

var array = <?php echo ( json_encode ($user->FooDataBase )) ?>;

console.log(array);
console.log("\n");
console.log(array.length);
console.log("\n");
console.log(array2);
console.log("\n");
console.log(array2.length);



/*
 String= '<?php echo ( $_SESSION["TestNew3"] ) ?>';


var String2= '<?php echo ( $_SESSION["Test23"] ) ?>';

var a = String.split("+");

console.log("The array is " + a);

console.log("\n the lengh of the array is " + Object.keys(a).length);

var b = String2.split("$$$");


console.log("The array is " + b);

console.log("\n the lengh of the array is " + Object.keys(b).length);

   localStorage.setItem("SpecailARRAY", a);
   

   localStorage.setItem("SpecialARRAY", b);
*/
</script>



