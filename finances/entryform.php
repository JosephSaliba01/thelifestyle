
<?php

require '../Filebase/vendor/autoload.php';
session_start();


$Username = $_SESSION["username"] ;

$database = new \Filebase\Database([
    'dir' => '../Filebase/Database/users',
    'backupLocation' => '../Filebase/Database/Backup'
]);

$user = $database->get($Username);

$title;
$button1;
$button2;
if(isset($_SESSION['username']))
{

   $title = "<h1> Welcome, ".$_SESSION['username']."!</h1>";
   $button1 = "<a href='../Profile.php' class='mbloginbtn'>Profile</a>";
   $button2 = "<a href='../PHP/LogOut.inc.php' class='mbloginbtn'>Log Out</a>";

}
else
{
    $title = "<h1> Welcome to the LIFESTYLE.CA!</h1>";
    $button1 = "<a href='../Login.php' class='mbloginbtn'>Login</a>";
    $button2 = "<a href='../SignUp.php' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Create an Account</p></a>";
}

?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type = "text/css" href="entryformCSS.css"/>
    <link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>
    <script type="text/javascript" src="entryformJS.js"></script>
    
</head>

<html>
    <body class="body">
        <nav class="mbHeadernav">
            <div class="mbtablediv">
                <table>
                    <tr>
                        <td>
                            <img src="finances_img/potentiallogo.png" alt="logo" style="width:50px;height:50px; float: left;">
                        </td>
                        <td>
                            <a href="../HomePage.php" style="text-decoration: none;"><h1 id="mbMainMenuHeader">THELIFESTYLE.CA</h1></a>
                        </td>
                        <td class="mbheadertd"  style="padding-left: 50px;">
                            <a href="../Nutrition/Fitness&Nutrition.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Fitness & Nutrition</p></a>

                        </td>
                        <td class="mbheadertd">
                            <a href="../Education/education.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Education & Professional Life</p></a>
                        </td>
                        <td class="mbheadertd">
                            <a href="../finances/financepage.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Finances</p></a>
                        </td>
                    </tr>
                </table>
            </div>
                
            <div id="mbloginsignupsdiv">
                        <?php
                        echo "$button1";
                        ?>
                        <?php
                        echo "$button2";
                        ?>
            </div>
        </nav>
        <div class="MainDiv">
            <div class="indivborder">
                <p class="format1">Creating a Finance Profile</p>
                <p class="format2">In order to create a Finance profile so we could accurately provide assistance, we require for the user to give out important information. Please fill in the fields when necessary.</p>
                <form action="financeinformation.php" method="POST">
                    <div class="MainView">
                    
                        <div id="view0" class="changeview" style="display: block;">
                            <div class="changeviewheaderline">
                                <p class="format3">
                                    Introduction
                                </p>
                            </div>
                            <p class="paragraphformat">
                                You are signed in as <span style="color: red;"><?php echo $user->username?></span>
                            </p>
                            <p class="paragraphformat">
                                In order to cycle through the required information, click on the next button at the bottom right.
                            </p>
                            <p class="paragraphformat">
                                Note that all information disclosed won't be shared without your permission.
                            </p>
                        </div>   
                        <div id="view1" class="changeview">
                            <div class="changeviewheaderline">
                                <p class="format3">
                                    User General Information
                                </p>
                            </div>
                            <p class="paragraphformat">
                                First, let us take some personal information so we know who we're talking to!
                            </p>
                            <p class="paragraphformat">
                                Fields marked with a star * require to be filled!
                            </p>
                            
                            <div style="display: flex; justify-content: space-between;">
                                <div class="view1table">
                                    <div class="view0flex">
                                        <label for="firstnametxt" class="paragraphformat">First Name:*</label>
                                        <input type="text" id="firstnametxt" name="firstname" class="viewtextinput" placeholder="First Name" value="<?php echo($user->name)?>">
                                    </div>
                                    <div class="view0flex">
                                        <label for="lastnametxt" class="paragraphformat">Last Name:*</label>
                                        <input type="text" id="lastnametxt" name="lastname" class="viewtextinput" placeholder="First Name" value="<?php echo($user->lname)?>">        
                                    </div>
                                    <div class="view0flex">
                                        <label for="gender" class="paragraphformat">Gender:*</label>
                                        <select name="gender" id="genders">
                                            <option value="-">-</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>        
                                    </div>
                                </div>
                                <div class="view1table">
                                    <div class="view0flex">
                                        <label for="agetxt" class="paragraphformat">Age:*</label>
                                        <input type="number" id="agetxt" name="age" class="viewtextinput" placeholder="Enter Number">
                                    </div>
                                    <div class="view0flex">
                                        <label for="date" class="paragraphformat">Date of Birth:*</label>
                                        <input type="date" id="date" name="date" class="viewtextinput" placeholder="date">        
                                    </div>
                                    <div class="view0flex">
                                        <label for="cellnumber" class="paragraphformat">Cell Number:</label>
                                        <input type="number" id="cellnumber" name="cellnumber" class="viewtextinput" placeholder="ex: +15141234567">        
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div id="view2" class="changeview">
                            <div class="changeviewheaderline">
                                <p class="format3">
                                    User Work Status
                                </p>
                            </div>
                            <p class="paragraphformat">
                                Now we start witht the important part. In order to properly assess your file, we'll need your input on your Work status.
                            </p>
                            <p class="paragraphformat">
                                Choose the option that best describes your situation:
                            </p>
                            
                            <input type="radio" id="option1" value="option1" name="option" style="margin: 1.5%;">
                            <label for="option1" class="paragraphformat">I am employed and live on my own income.</label><br>
                            <input type="radio" id="option2" value="option2" name="option" style="margin: 1.5%;">
                            <label for="option2" class="paragraphformat">I am employed and I receive important funding assistance. (ie: From Parents or Guardians)</label><br>
                            <input type="radio" id="option3" value="option3" name="option" style="margin: 1.5%;">
                            <label for="option3" class="paragraphformat">I am unemployed and I receieve important funding assistance.</label><br>
                            <input type="radio" id="option4" value="option4" name="option" style="margin: 1.5%;">
                            <label for="option4" class="paragraphformat">I am unemployed and I do not receive important financial support.</label>
                        
                        </div>
                        <div id="view3" class="changeview">
                            <div class="changeviewheaderline">
                                <p class="format3" style="text-align: center; font-size: 3vw; margin-top: 3%;">
                                    Input of Information
                                </p>
                            </div>
                            <p class="paragraphformat" style="text-align: center;">
                                Time to start filling in the Numbers!
                            </p>
                            <p class="paragraphformat" style="text-align: center;">
                                All Values should be inputted in Canadian Dollars.
                            </p>
                            <p class="paragraphformat" style="text-align: center;">
                                Fields marked with a star * require to be filled!
                            </p>

                            <div id="userworksection">
                                <div class="changeviewheaderline" style="margin-top: 4%;">
                                    <p class="format3">
                                        User Work Input
                                    </p>
                                </div>
                                <p class="paragraphformat">
                                    Provide the following information about your job(s). Make sure to save each job you input.
                                </p>
                                
                                <div id="userworkmaindiv">
                                    <div id="userworkheader">
                                        <div class="userworkjobinputminidiv" style="width: 10%;">
                                            <p>
                                                Job
                                            </p>
                                        </div>
                                        <div class="userworkjobinputminidiv">
                                            <p>
                                                Position*
                                            </p>
                                        </div>
                                        <div class="userworkjobinputminidiv">
                                            <p>
                                                Instituion Name
                                            </p>
                                        </div>
                                        <div class="userworkjobinputminidiv">
                                            <p>
                                                Annual income*
                                            </p>
                                        </div>
            
                                        <div class="userworkjobinputminidiv" style="width: 10%;">
                                            
                                        </div>
                                        
                                    </div>
                                    <div id="userworkbody">
                                        
                                    
                                    </div>
            
                                    <div id="userworkbody2">
                                        <div class="userworkjobinput">
                                            <div class="userworkjobinputminidiv" style="width: 10%;">
                                                <p id="userworkbody2p">
                                                    #1
                                                </p>
                                            </div>
                                            
                                            <div class="userworkjobinputminidiv">
                                                <select name="position" id="position" class="userworktxtinput">
                                                    <option value="-" selected>-</option>
                                                    <option value="Employee">Employee</option>
                                                    <option value="Employer">Employer</option>
                                                    <option value="Self-Employed">Self-Employed</option>
                                                </select>     
                                            </div>   
                                        
                                            <div class="userworkjobinputminidiv">
                                                <input type="text" id="jobinstitutiontxt" class="userworktxtinput" placeholder="ex: Facebook">
                                            </div>
            
                                            <div class="userworkjobinputminidiv">
                                                <input type="number" id="annualincometxt" class="userworktxtinput" placeholder="ex: 25000">
                                            </div>
            
                                            <div class="userworkjobinputminidiv" style="width: 10%;">
                                                <input type="button" id="addjob" value="Add" onclick="tryAddJob()">
                                            </div>
                                        </div>
                                    </div>
            
                                    <div id="plusdiv" style="display: none; justify-content: center; margin-bottom: 8vh;">
                                        <input type="button" value="Add" id="plusjob" onclick="PlusJob()">
                                    </div>
                                </div>
                            </div>
                            
                            <div id="providersection">
                                <div class="changeviewheaderline">
                                    <p class="format3">
                                        Income Money From Other Sources
                                    </p>
                                </div>
                                <p class="paragraphformat">
                                    Provide the following information about the funding assistance you're receiving (ex: Parents, government aid, etc...)
                                </p>
                                <div>
                                    <div id="providersheader">
                                        <div class="providersjobinputminidiv" style="width: 10%;">
                                            <p>
                                                Source
                                            </p>
                                        </div>
                                        <div class="providersjobinputminidiv">
                                            <p>
                                                Provider
                                            </p>
                                        </div>
                                        <div class="providersjobinputminidiv">
                                            <p>
                                                Annual income*
                                            </p>
                                        </div>
            
                                        <div class="providersjobinputminidiv" style="width: 10%;">
                                            
                                        </div>
                                        
                                    </div>
                                    <div id="providersbody">
                                        
                                    
                                    </div>
            
                                    <div id="providersbody2">
                                        <div class="providersjobinput">
                                            <div class="providersjobinputminidiv" style="width: 15%;">
                                                <p id="providersbody2p">
                                                    #1
                                                </p>
                                            </div>
                                            
                                            <div class="providersjobinputminidiv">
                                                <select name="Source" id="sourceprovider" class="providerstxtinput">
                                                    <option value="-" selected>-</option>
                                                    <option value="Government">Government</option>
                                                    <option value="Association">Association</option>
                                                    <option value="Parents or Family">Parents/Family Member</option>
                                                    <option value="Unspecific">Other</option>
                                                </select>     
                                            </div>   
            
                                            <div class="providersjobinputminidiv">
                                                <input type="number" id="providersannualincometxt" class="providerstxtinput" placeholder="ex: 25000">
                                            </div>
            
                                            <div class="providersjobinputminidiv" style="width: 15%;">
                                                <input type="button" id="providersaddjob" value="Add" onclick="tryAddProvider()">
                                            </div>
                                        </div>
                                    </div>
            
                                    <div id="Providerplusdiv" style="display: none; justify-content: center; margin-bottom: 8vh;">
                                        <input type="button" value="Add" id="plusProvider" onclick="PlusProvider()">
                                    </div>
                                </div>
                            </div>

                            <div class="changeviewheaderline">
                                <p class="format3">
                                    Loans
                                </p>
                            </div>
                            <p class="paragraphformat">
                                Enter all your loan information.
                            </p>
                            <div>
                                <div id="loanheader">
                                    <div class="loanjobinputminidiv" style="width: 15%;">
                                        <p>
                                            Loan
                                        </p>
                                    </div>
                                    <div class="loanjobinputminidiv" style="width: 20%;">
                                        <p>
                                            Type*
                                        </p>
                                    </div>
                                    <div class="loanjobinputminidiv" style="width: 50%;">
                                        <p>
                                            Remaining Amount*
                                        </p>
                                    </div>
        
                                    <div class="loanjobinputminidiv" style="width: 15%;">
                                        
                                    </div>
                                    
                                </div>
                                <div id="loanbody">
                                    
                                
                                </div>
        
                                <div id="loanbody2">
                                    <div class="loanjobinput">
                                        <div class="loanjobinputminidiv" style="width: 15%;">
                                            <p id="loanbody2p">
                                                #1
                                            </p>
                                        </div>
                                        
                                        <div class="loanjobinputminidiv"  style="width: 20%;">
                                            <select name="Sourceloan" id="sourceloan" class="loantxtinput">
                                                <option value="-" selected>-</option>
                                                <option value="Personal">Personal</option>
                                                <option value="Car">Car</option>
                                                <option value="House">House</option>
                                                <option value="Credit Card">Credit Cart</option>
                                                <option value="Other">Other</option>
                                            </select>     
                                        </div>   
        
                                        <div class="loanjobinputminidiv" style="width: 50%;">
                                            <input type="number" id="loanremainingtxt" class="loantxtinput" placeholder="ex: 25000">
                                        </div>
        
                                        <div class="loanjobinputminidiv" style="width: 15%;">
                                            <input type="button" id="loanaddjob" value="Add" onclick="tryAddloan()">
                                        </div>
                                    </div>
                                </div>
        
                                <div id="loanplusdiv" style="display: none; justify-content: center; margin-bottom: 8vh;">
                                    <input type="button" value="Add" id="plusLoan" onclick="PlusLoan()">
                                </div>
                            </div>

                            <div>
                                <div class="changeviewheaderline">
                                    <p class="format3">
                                        Savings
                                    </p>
                                </div>
                                <p class="paragraphformat">
                                    We would like to take notice of your savings.
                                </p>
                                <input type="checkbox" id="hassavings" onclick="takeSavings()">
                                <label for="hassavings" class="paragraphformat">
                                    I have Bank Account Savings (or important cash amount) that I would like to report</br>
                                </label>
                                <div id="savingwrapper" style="background-color: rgba(255, 182, 182, 0.548);">
                                    <div id="savingsinput" style="padding: 2%; margin:3%; display: flex; align-items: center;">
                                        <div>
                                            <label for="savingamount" class="paragraphformat">
                                            Enter the amount of Savings in posession:
                                            </label>
                                        </div>
                                        <div style="margin-left: 2%;">
                                            <span class="paragraphformat" style="color: black;">
                                                $   
                                            </span>
                                            <input type="number" id="savingamount" name="savingamount" class="inputformat2" placeholder="ex: 45000" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="changeviewheaderline">
                                    <p class="format3">
                                        Spendings
                                    </p>
                                </div>
                                <p class="paragraphformat">
                                    Next, we would like to ask for main expenses.
                                </p>
                                <input type="checkbox" id="hasrents" onclick="takerents()" style="margin-top: 5%;">
                                <label for="hasrents" class="paragraphformat">
                                    I pay rent, or equivalent monthly living fee</br>
                                </label>
                                <div id="rentwrapper" style="background-color: rgba(255, 182, 182, 0.548);">
                                    <div id="rentsinput" style="padding: 2%; margin:3%; display: flex; align-items: center;">
                                        <div>
                                            <label for="rentamount" class="paragraphformat">
                                            Enter the amount to be paid yearly:
                                            </label>
                                        </div>
                                        <div style="margin-left: 2%;">
                                            <span class="paragraphformat" style="color: black;">
                                                $   
                                            </span>
                                            <input type="number" id="rentamount" name="rentamount" class="inputformat2" placeholder="ex: 45000" disabled="disabled">
                                        </div>
                                    </div>
                                </div>

                                <input type="checkbox" id="hastuitions" onclick="taketuitions()" style="margin-top: 5%;">
                                <label for="hastuitions" class="paragraphformat">
                                    I am a student and pay tuition to complete my studies</br>
                                </label>
                                <div id="tuitionwrapper" style="background-color: rgba(255, 182, 182, 0.548);">
                                    <div id="tuitionsinput" style="padding: 2%; margin:3%; display: flex; align-items: center;">
                                        <div>
                                            <label for="tuitionamount" class="paragraphformat">
                                            Enter the amount to be paid yearly:
                                            </label>
                                        </div>
                                        <div style="margin-left: 2%;">
                                            <span class="paragraphformat" style="color: black;">
                                                $   
                                            </span>
                                            <input type="number" id="tuitionamount" name="tuitionamount" class="inputformat2" placeholder="ex: 45000" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="checkbox" id="haschildren" onclick="takechildren()" style="margin-top: 5%;">
                                <label for="haschildren" class="paragraphformat">
                                    I have children that are dependent on myself</br>
                                </label>

                                <div id="childrenwrapper" style="background-color: rgba(255, 182, 182, 0.548);">
                                    <div id="childrenheader">
                                        <div class="childrenjobinputminidiv" style="width: 15%;">
                                            <p>
                                                Children
                                            </p>
                                        </div>
                                        <div class="childrenjobinputminidiv" style="width: 15%;">
                                            <p>
                                                Age*
                                            </p>
                                        </div>
                                        <div class="childrenjobinputminidiv" style="width: 30%;">
                                            <p>
                                                Rent Spending*
                                            </p>
                                        </div>
                                        <div class="childrenjobinputminidiv" style="width: 30%;">
                                            <p>
                                                Tuition Spending*
                                            </p>
                                        </div>
            
                                        <div class="childrenjobinputminidiv" style="width: 10%;">
                                            
                                        </div>
                                        
                                    </div>
                                    <div id="childrenbody">
                                        
                                    
                                    </div>
            
                                    <div id="childrenbody2">
                                        <div class="childrenjobinput">
                                            <div class="childrenjobinputminidiv" style="width: 15%;">
                                                <p id="childrenbody2p">
                                                    #1
                                                </p>
                                            </div>
                                            
                                            <div class="childrenjobinputminidiv"  style="width: 15%;">
                                                <input type="number" id="childrenage" class="childrentxtinput" placeholder="ex: 18" disabled="disabled">    
                                            </div>  

                                            <div class="childrenjobinputminidiv"  style="width: 30%;">
                                                <input type="number" id="childrenrent" class="childrentxtinput" placeholder="ex: 25000" disabled="disabled">    
                                            </div>   
            
                                            <div class="childrenjobinputminidiv" style="width: 30%;">
                                                <input type="text" id="childrentuition" class="childrentxtinput" placeholder="ex: 25000" disabled="disabled">
                                            </div>
            
                                            <div class="childrenjobinputminidiv" style="width: 10%;">
                                                <input type="button" id="childrenaddjob" value="Add" onclick="tryAddchildren()" disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
            
                                    <div id="childrenplusdiv" style="display: none; justify-content: center; margin-bottom: 8vh;">
                                        <input type="button" value="Add" id="pluschildren" onclick="Pluschildren()">
                                    </div>
                                </div>

                            </div>
                        </div>

                        
                        <div id="view4" class="changeview">
                            <div class="changeviewheaderline">
                                <p class="format3" style="text-align: center; font-size: 3vw; margin-top: 3%;">
                                    Review of Information
                                </p>
                            </div>
                            <p class="paragraphformat" style="text-align: center;">
                                Please check out the inputed answer here.
                            </p>
                            <p class="paragraphformat" style="text-align: center;">
                                Make sure all information is correct.
                            </p>
                            <p class="paragraphformat" style="text-align: center;">
                                If any mistakes were made, go back to correct them.
                            </p>

                            <div id="reviewinformation">
                                <div class="revdivclass" style="border-bottom: 1px solid gray; border-top: 1px solid gray;">
                                    <div>
                                        <p>
                                            FirstName:
                                        </p>
                                        <p id="firtnamerev">
                                            ERROR
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            LastName:
                                        </p>
                                        <p id="lastnamerev">
                                            ERROR
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            Gender:
                                        </p>
                                        <p id="genderrev">
                                            ERROR
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            Age:
                                        </p>
                                        <p id="agerev">
                                            ERROR
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            Date of Birth:
                                        </p>
                                        <p id="dobrev">
                                            ERROR
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            Cell Number:
                                        </p>
                                        <p id="cellnumrev">
                                            NOT PROVIDED
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            Job Status:
                                        </p>
                                        <p id="jobstatusrev">
                                            ERROR
                                        </p>
                                    </div>
                                </div>

                                <div class="revdivclass" style="border-bottom: 1px solid gray;">
                                    <div>
                                        <p>
                                            Total Amount of Savings:
                                        </p>
                                        <p id="savingrev">
                                            ERROR
                                        </p>
                                    </div>
                                    <p class="paragraphformat", style="margin-top:5vh; color: rgb(105, 105, 105);">
                                        User Jobs
                                    </p>
                                    
                                    <div class="listrec" id="joblistrec" style="display: block;">
                                        <p style="text-align: center; margin: 1%;" id="unemployedmsg"></p>
                                    </div>

                                    <p class="paragraphformat", style="margin-top:5vh; color: rgb(105, 105, 105);">
                                        Other Providers
                                    </p>
                                    
                                    <div class="listrec" id="provlistrec" style="display: block;">
                                        <p style="text-align: center; margin: 1%;" id="noprovmsg"></p>
                                    </div>
                                    <div>
                                        <p>
                                            Income Total Yearly:
                                        </p>
                                        <p id="revtotalinc">
                                            0 $
                                        </p>
                                    </div>
                                </div>

                                <div class="revdivclass" style="border-bottom: 1px solid gray;">
                                    <div>
                                        <p>
                                            Rent Paid Annually:
                                        </p>
                                        <p id="rentrev">
                                            ERROR
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            Tuition paid Annually:
                                        </p>
                                        <p id="tuitionrev">
                                            ERROR
                                        </p>
                                    </div>
                                    <p class="paragraphformat", style="margin-top:5vh; color: rgb(105, 105, 105);">
                                        Loans
                                    </p>
                                    
                                    <div class="listrec" id="loanslistrec" style="display: block;">
                                        <p style="text-align: center; margin: 1%;" id="noloanmsg"></p>
                                    </div>
                                    <div>
                                        <p>
                                            Total Loan Remaining Amount.
                                        </p>
                                        <p id="revtotalloan">
                                            0 $
                                        </p>
                                    </div>
                                    <p class="paragraphformat", style="margin-top:5vh; color: rgb(105, 105, 105);">
                                        Children expenses
                                    </p>
                                    <div class="listrec" id="childrenlistrec" style="display: block;">
                                        <p style="text-align: center; margin: 1%;" id="nochildrennmsg"></p>
                                    </div>
                                    <div>
                                        <p>
                                            Total Children Expenses Paid Yearly:
                                        </p>
                                        <p id="revtotalchildexp">
                                            0 $
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: center">
                                <input type="submit" name="submitbtn" id="submitbtn">
                            </div>
                        </div>
                    
                    </div>
                </form>
                
                <div style="display: flex; justify-content: space-evenly; margin: 3%;">
                    <div style="visibility: hidden;">
                        <input type="button" value="Go Back" id="back" onclick="goBack()">
                    </div>
                    <div>
                        <input type="button" value="Go Next" id="next" onclick="goNext()">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

