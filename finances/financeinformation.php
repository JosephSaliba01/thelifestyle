<?php

require '../Filebase/vendor/autoload.php';
session_start();


$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
    'backupLocation' => '../Filebase/Database/Backup'
]);

$user = $database->get($Username);



if(isset($_POST["submitbtn"])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $cellnumber = $_POST['cellnumber'];
    $option = $_POST['option'];

    switch($option) {
        case "option1":
            $option = "Employed + Independent";
            break;

        case "option2":
            $option = "Employed + dependent";
            break;
        
        case "option3":
            $option = "Unemployed + dependent";
            break;

        case "option4":
            $option = "Unemployed + Independent";
            break;
    }

    $savingamount = $_POST['savingamount'];
    $rentamount = $_POST['rentamount'];
    $tuitionamount = $_POST['tuitionamount'];

    $user->FinanceFirstName = $firstname;
    $user->FinanceLastName = $lastname;
    $user->FinanceGender = $gender;
	$user->FinanceAge = $age;
	$user->FinanceDOB = $date;
	$user->FinanceCellNum = $cellnumber;
    $user->FinanceOption = $option;
	$user->FinanceSavingAmount = $savingamount;
    $user->FinanceRentAmount = $rentamount;
    $user->FinanceTuitionAmount = $tuitionamount;
    $user->FINANCEACCOUNTEXISTS = 'true';
   
    
    $user->save();



} else {
    $jobArray = $_POST['jobarray'];
    $providersArray = $_POST['providersarray'];
    $loanArray = $_POST['loanarray'];
    $childrenarray = $_POST['childrenarray'];
    $incometotal = $_POST['incometotal'];
    $loantotal = $_POST['loantotal'];
    $childrenexptotal = $_POST['childrenexptotal'];

    $user->FinanceJobArray = $jobArray;
    $user->FinanceProvidersArray= $providersArray;
    $user->FinanceLoanArray= $loanArray;
    $user->FinanceChildrenArray= $childrenarray;

    $user->FinanceIncomeTotal= $incometotal;
	$user->FinanceLoanTotal= $loantotal;
	$user->FinanceChildrenExpTotal= $childrenexptotal;

$user->save();
}

header("location:financeportal.php");

?>