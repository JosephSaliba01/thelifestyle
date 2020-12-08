<!DOCTYPE html>
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
<head>
    
    <link rel="stylesheet" type = "text/css" href="financeportalCSS.CSS"/>
    <link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   
   
   <style>
       body {
            margin: 0;
            background-color: lightcyan;
        }

        #maindiv {
            background-color: lightcyan;
            margin:auto;
            width: 100;
            margin-top: 1%;
            margin-bottom: 10%;
            padding: 2%;
        }


       .markertext {
            text-align: center;
            color: black;
            margin: 1vh;
            font-size: 1.5vh;
            width: 100%;
        }   
        .markertextheader {
            font-family: 'Times New Roman', Times, serif;
            font-size: 2.5vh;
            font-weight: bolder; 
            margin: auto; 
            width:60%;
            text-align: center;
            float: right;
            margin: 0px;
        }

        .markerdiv {
            display: flex;
            height: fit-content;
            justify-content: space-evenly;
        }

        #jobfinder {
            margin-top: 5vh;
            display: flex;
            justify-content: space-evenly;
            align-items: center;

        }

        #mapid {
            height: 500px;
            width: 70%;
            margin:0;
            border-radius: 3px;
            border: solid rgb(9, 69, 85) 1.5px;
        }

        label{
            font-size: 2.5vh;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: rgb(1, 23, 58);
        }

        .header1 {
            text-align: center;
            font-weight: bolder;
            font-size: 3.1vh;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: rgb(1, 23, 58);
            margin-bottom: 3vh;
        }

        .header2 {
            text-align: left;
            font-weight: bold;
            font-size: 2.5vh;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: rgb(1, 23, 58);
        }

        #list {
            margin: auto;
            margin-top: 2vh;
            height: 50vh;
            width: 80%;
            border-radius: 3px;
            border: solid rgb(9, 69, 85) 1.5px;
            overflow-y: scroll;
        }

        #jobfinderheader {
            display: flex;
            margin:auto;
            justify-content: center;
            margin-top: 3vh;
        }
        .listcontainer {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 1vh;
            background-color:  rgb(149, 198, 238);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2vh;
            margin-bottom: 2vh;

        }

        .listimg {
            width: 5%;
            text-align: center;
            
        }

        .listimg img {
            border-radius: 25px;
            height: 75px;
        }

        .jobcontact {
            width: 10%;
            text-align: center;
            font-size: 2vh;
        }

        .jobdistance {
            width: 5%;
            text-align: center;
        }

        .jobdesc {
            width:50%;
            text-align: center;
        }

        .jobtitle {
            width: 20%;
            text-align: center;
        }

        #JOBDIV {
            border: 1px solid black;
            padding-bottom: 3vh;
            background-color: rgb(178, 202, 218);
            margin-right: 2%;
            margin-left: 2%;
            display: block;
            
        }

        #showhidejobs {
            outline: none;
            border-radius: 0px;
            border: 1px solid black;
            background-color: rgb(178, 202, 218);
            margin-top: 3vh;
            width: 96%;
            height: 6vh;
            font-size: 3vh;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        #welcomep {
            color: gray;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 3vh;

        }

        #welcomediv {
            border-bottom: solid 1.5px rgb(0, 5, 17);
        }

        #generalanalysisdiv {
            margin: 1%;
            margin-top:3%;
            margin-bottom: 5%;
            display:flex;
            justify-content: space-between;

        }

        #profileviewwrapper {

        }

        #profileview {
            background-color: rgb(178, 202, 218);
            width: 100%;
            height: 65vh;
            box-shadow:black;
            padding: 3vh;
        }

        #profileview p {
            font-size: 2.3vh;
            font-family: monospace;
            color:  rgb(15, 40, 54);
        }

        #analysiswrapper {
            width: 65%;
        }

        #analysis {
            background-color: rgb(178, 202, 218);
            width: 95%;
            height: 65vh;
            padding: 4vh;
        }

        #AnalysisTitle {
            font-family: monospace;
            font-variant: small-caps;
            margin-left: 3%;
            margin-bottom: 1%;
            margin-top: 1%;
        }

        .profileviewcontainer {
            display: flex;
            justify-content: space-between;
        }

        .profileviewheader {
            border-bottom: dashed 1px;
            margin:auto;
            width: 90%;
        }

        .profileviewheader p {
            font-size: 2.5vh;
            margin-left: 2.5vh;
            margin-bottom: 0.5vh;
        }

        .profileheader {
            margin-left: 3%;
            font-size: 3vh;
            color: gray;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-bottom: 0.5vh;
        }

        #Analysistiteldiv {
            border-bottom: solid rgb(15, 40, 54) 1px ;
            font-size: 4.2vh;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }

        #analysisparagraph p {
            font-size: 2.5vh;
            font-family: monospace;
            color:  rgb(15, 40, 54);
        }

   </style>
</head>

<html>
    <body>
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
        <div id="maindiv">
            <div id="welcomediv">
                <p id="welcomep"></p>
            </div>
            <div id="generalanalysisdiv">
                <div id="profileviewwrapper">
                    <p class="profileheader">Profile Data:</p>
                    <div id="profileview">
                        <div class="profileviewcontainer">
                            <p>
                                Status:
                            </p>
                            <p>
                                <?php echo($user->FinanceOption)?>
                            </p>
                        </div>
                        <div class="profileviewcontainer">
                            <p>
                                Amount Saved in Banks:
                            </p>
                            <p>
                                <?php echo($user->FinanceSavingAmount)?>.00$
                            </p>
                        </div>
                        <div class="profileviewheader">
                            <p>
                                Income
                            </p>
                        </div>
                        <div class="profileviewcontainer">
                            <p>
                                Total Income:
                            </p>
                            <p>
                                <?php echo($user->FinanceIncomeTotal)?>.00$ /y
                            </p>
                        </div>
                        <div class="profileviewheader">
                            <p>
                                Expenses
                            </p>
                        </div>
                        <div class="profileviewcontainer">
                            <p>
                                Rent:
                            </p>
                            <p>
                                <?php echo($user->FinanceRentAmount)?>.00$ /y
                            </p>
                        </div>
                        <div class="profileviewcontainer">
                            <p>
                                Tuition:
                            </p>
                            <p>
                                <?php echo($user->FinanceTuitionAmount)?>.00$ /y
                            </p>
                        </div>
                        <div class="profileviewcontainer">
                            <p>
                                Total Children Expenses:
                            </p>
                            <p>
                                <?php echo($user->FinanceChildrenExpTotal)?>.00$ /y
                            </p>
                        </div>
                        <div class="profileviewcontainer">
                            <p>
                                Total Loan Left:
                            </p>
                            <p>
                                <?php echo($user->FinanceLoanTotal)?>.00$ Left
                            </p>
                        </div>
                    </div>
                </div>
                

                <div id="analysiswrapper">
                    <p class="profileheader">General Overview Analysis:</p>
                    <div id="analysis">
                        <div id="Analysistiteldiv">
                            <p id="AnalysisTitle"></p>
                        </div>
                        <div id="analysisparagraph">
    
                        </div>
                    </div>
                </div>
            
                
            </div>

            <div id="portalcontent">
                <div style="display: flex; justify-content:center">
                    <input type="button" id="showhidejobs" onclick="showhidjobfinder()" value="Show Job Finder">
                </div>
                <div id="JOBDIV">
                    <div id="jobfinderheader">
                        <label for="radiusinput">Find Job Within: </label>
                        <input type="number", placeholder="in KM", id="radiusinput" style="width: 5%; margin-right: 3%; margin-left: 3%;">
                        <input type="button", value="Find Jobs", id="findjobsbtn" onclick="findJobs()">
                    </div>
                    <div id="jobfinder">
                        <div style="background-color: rgb(200, 200, 200); height: fit-content; width: 20%; padding: 2vh;">
                            <form>
                                <fieldset id="formfs" disabled="disabled">
                                    <p class="header1">Apply Filters:</p>
                                    <p class="header2">
                                        Show Jobs In:
                                    </p>
                                    <input type="checkbox" id="Engineering Field" name="Engineering Field" onchange="changeEngMarkers()" checked>
                                    <label for="Engineering Field">Engineering Field</label><br><br>
        
                                    <input type="checkbox" id="Medical Field" onchange="changeMedMarkers()" name="Medical Field" checked>
                                    <label for="Medical Field">Medical Field</label><br><br>
        
                                    <input type="checkbox" id="Retail" onchange="changeRetMarkers()" name="Retail" checked>
                                    <label for="Retail">Retail</label><br><br>
        
                                    <input type="checkbox" id="Cons" onchange="changeConsMarkers()" name="Cons" checked>
                                    <label for="Cons">Consultant/Teacher</label><br><br>
                                </fieldset>
                            </form>
                        </div>
                        <div id="mapid">
                            
                        </div>
                    </div>
                    <p class="header1"id="joblistheader" style="margin-top: 8vh; display: none;">List Of Jobs Found: </p>
                    <div id="list" style="display: none;">
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    var markerarray;
    var jobArray = [];
    var latlng;
    var mymap = L.map('mapid');

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1Ijoiam9leTExMDk4IiwiYSI6ImNraTEzdjB4YjB3NWYyeXBldjM4NjQ0aHAifQ.v-dSyyCZbDH56rXtIoxMnw'
    }).addTo(mymap);


    function findJobs() {

        
        if(document.getElementById("radiusinput").value == "" || document.getElementById("radiusinput").value == "0") {
            alert("Enter a KM Value!");
        } else{
            document.getElementById("joblistheader").style.display = "block";
            document.getElementById("list").style.display = "block";
            document.getElementById("findjobsbtn").disabled = true;
            document.getElementById("formfs").disabled = false;
            var greenIcon = new L.Icon({
            iconUrl: 'marker.png',
        
            iconSize: [55, 65],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            
            });
            var marker = L.marker(latlng, {icon: greenIcon}).addTo(mymap);
            


            var bounds = [[latlng.lat+0.24, latlng.lng+0.35], [latlng.lat-0.24, latlng.lng-0.35]];
            L.rectangle(bounds, {color: "#ff7800", weight: 1});

            var latmax = latlng.lat+0.24;
            var latmini = latlng.lat-0.24;
            var lngmax = latlng.lng+0.35;
            var lngmini = latlng.lng-0.35;
            
            var radiusval = document.getElementById("radiusinput").value;
            
            L.circle(latlng, {radius: radiusval*1000}).addTo(mymap);
            var radlong = radiusval/110.6;

            if(1.3*radiusval <= 11)
            numOfJobs = 1.3*radiusval
            else
            numOfJobs = 11;
            markerarray = [];
            for(i=0;i<numOfJobs;i++) {
                var angle = Math.random()*2*Math.PI;
                var distance = Math.random()*radlong;
                var randommarker = L.marker([distance*Math.cos(angle)+latlng.lat,distance*Math.sin(angle)+latlng.lng])
                
                
                jobname = "";
                jobdes = "";
                switch(i) {
                    case 0: jobname = "Sandra's Bookshop";
                            jobdes = "Sandra's bookshop is similar to any other libary. Contact Store now,"
                            break;

                    case 1: jobname = "Adonis";
                            jobdes = "Adonis Grocery Store looking for Cashiers. Contact Store now"
                            break;

                    case 2: jobname = "Retaily"; 
                            jobdes = "Retaily Express Grocery Store now Hiring! Contact Store now!"
                            break;

                    case 3: jobname = "Mechano"; 
                            jobdes = "Mechano is a new company that specializes into providing Machinery, Contact Company Now"
                            break;

                    case 4: jobname = "Softwarly"; 
                            jobdes = "Softwarly is now Hiring! Contact Company now!"
                            break;
                    case 5: jobname = "Lanovo"; 
                            jobdes = "Lanovo is a computer company that provides computer parts. Contact Company now: "
                            break;

                    case 6: jobname = "MTL Hospital"; 
                            jobdes = "MTL Hospital is always looking for more doctos, Contact Them now."
                            break;
                    case 7: jobname = "Children's Clinic";
                            jobdes = "Children's clinic is now looking for Assistants, Contact Clinic now."
                            break;

                    case 8: jobname = "Central University"; 
                            jobdes = "Available job postings found in Central University, Contact them Now."
                            break;
                    case 9: jobname = "JKN School"; 
                            jobdes = "Teaching positions available in JKN School, apply now!. "
                            break;
                    case 10: jobname = "GreenLeef"; 
                            jobdes = "GreenLeef is an environemntal company in need of environmental advisors. Contact them Now."
                            break;

                }
                jobtype = "";
                if(i<3){
                    jobtype = "Retail";
                } else if(i<6){
                    jobtype = "Eng"
                } else if(i<8){
                    jobtype = "Med";
                } else {
                    jobtype = "Advisor";
                }

                imgsrc = "job"+ i + ".png";
                randommarker.bindPopup("<div class='markerdiv'><img src='" + imgsrc + "' height = 75 style='border-radius:10px;'><p class='markertextheader'>" + jobname + "</p></div>" + "<div style='margin-top:3vh;'><p class='markertext'>" + jobdes + "</p></div>");
                randommarker.addTo(mymap);
                
                markerarray.push(randommarker);
                console.log((latlng.distanceTo([distance*Math.cos(angle)+latlng.lat,distance*Math.sin(angle)+latlng.lng])).toFixed(0)/1000);
                var job = {jobimg: imgsrc, jobtitle: jobname, jobtype: jobtype, jobdesc: jobdes, jobmarker: randommarker, distance: (latlng.distanceTo([distance*Math.cos(angle)+latlng.lat,distance*Math.sin(angle)+latlng.lng])).toFixed(0)/1000};
                jobArray.push(job);

            }


            jobArray = jobArray.sort(function(a,b) {
                return a.distance - b.distance;
            });

            console.log(jobArray);
            jobArray.forEach(element => {
                addListDiv(element);
            });
        }
    }

    function sortFunction(a, b) {
                if (a[5] === b[5]) {
                    return 0;
                }
                else {
                    return (a[5] < b[5]) ? -1 : 1;
                }
            }


    function addListDiv(Job){
        var list = document.getElementById("list");

        var jobimgdiv = document.createElement("div");
        jobimgdiv.className = "listimg";
        var jobimg = document.createElement("img");
        jobimg.src = Job.jobimg;
        jobimgdiv.appendChild(jobimg);

        var jobtitlediv = document.createElement("div");
        jobtitlediv.className = "jobtitle";
        var jobtitlep = document.createElement("p");
        jobtitlep.innerHTML = Job.jobtitle;
        jobtitlediv.appendChild(jobtitlep);

        var jobdescdiv = document.createElement("div");
        jobdescdiv.className = "jobdesc";
        var jobdescp = document.createElement("p");
        jobdescp.innerHTML = Job.jobdesc;
        jobdescdiv.appendChild(jobdescp);

        var jobcontactdiv = document.createElement("div");
        jobcontactdiv.className = "jobcontact";
        var jobcontactp = document.createElement("a");
        jobcontactp.href = "";
        jobcontactp.innerHTML = "Visit Now";
        jobcontactdiv.appendChild(jobcontactp);

        var jobdistancediv = document.createElement("div");
        jobdistancediv.className = "jobdistance";
        var jobdistancep = document.createElement("p");
        jobdistancediv.innerHTML = Job.distance+"km";
        jobdistancediv.appendChild(jobdistancep);


        var createddiv = document.createElement("div");
        createddiv.className="listcontainer";
        createddiv.appendChild(jobimgdiv);
        createddiv.appendChild(jobtitlediv);
        createddiv.appendChild(jobdescdiv);
        createddiv.appendChild(jobcontactdiv);
        createddiv.appendChild(jobdistancediv);

        list.appendChild(createddiv);

    };
    function changeEngMarkers() {
        if(document.getElementById("Engineering Field").checked) {
            markerarray[3].addTo(mymap);
            markerarray[4].addTo(mymap);
            markerarray[5].addTo(mymap);

        } else {
            mymap.removeLayer(markerarray[3]);
            mymap.removeLayer(markerarray[4]);
            mymap.removeLayer(markerarray[5]);
        }
    }

    function changeMedMarkers() {
        if(document.getElementById("Medical Field").checked) {
            markerarray[6].addTo(mymap);
            markerarray[7].addTo(mymap);

        } else {
            mymap.removeLayer(markerarray[6]);
            mymap.removeLayer(markerarray[7]);
        }
    }

    function changeRetMarkers() {
        if(document.getElementById("Retail").checked) {
            markerarray[0].addTo(mymap);
            markerarray[1].addTo(mymap);
            markerarray[2].addTo(mymap);

        } else {
            mymap.removeLayer(markerarray[0]);
            mymap.removeLayer(markerarray[1]);
            mymap.removeLayer(markerarray[2]);
        }
    }

    function changeConsMarkers() {
        if(document.getElementById("Cons").checked) {
            markerarray[8].addTo(mymap);
            markerarray[9].addTo(mymap);
            markerarray[10].addTo(mymap);

        } else {
            console.log(markerarray[8]);
            mymap.removeLayer(markerarray[8]);
            mymap.removeLayer(markerarray[9]);
            mymap.removeLayer(markerarray[10]);
        }
    }



    navigator.geolocation.getCurrentPosition(function(location) {
    latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
    mymap.setView(latlng, 13);

    var greenIcon = new L.Icon({
            iconUrl: 'marker.png',
        
            iconSize: [55, 65],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            
            });
            var marker = L.marker(latlng, {icon: greenIcon}).addTo(mymap);
            document.getElementById("JOBDIV").style.display = "none";
    });
    
</script>

<script>
    counter = 0;
    
    function showhidjobfinder() {
        
        JOBDIV = document.getElementById("JOBDIV");
        showhidbtn = document.getElementById("showhidejobs")
        counter++;

        if(counter%2==0) {
            JOBDIV.style.display = "none";
            showhidbtn.value = "Show Job Finder"
        } else {
            JOBDIV.style.display = "block";
            showhidbtn.value = "Hide Job Finder"
        }
    }
</script>
<script>

    var firstname = '<?php echo $user->FinanceFirstName?>';
    var lastname = '<?php echo $user->FinanceLastName?>';
    var gender = '<?php echo $user->FinanceGender?>';
    var dob = '<?php echo $user->FinanceDOB?>';
    var age = '<?php echo $user->FinanceAge?>';
    var cellnum = '<?php echo $user->FinanceCellNum?>';
    var option = '<?php echo $user->FinanceOption?>';
    var savingamount = '<?php echo $user ->FinanceSavingAmount?>';
    var rentamount = '<?php echo $user ->FinanceRentAmount?>';
    var tuitionamount = '<?php echo $user ->FinanceTuitionAmount?>';

    

    var InjobArray=JSON.parse('<?php echo $user->FinanceJobArray; ?>');
    var providersbArray=JSON.parse('<?php echo $user->FinanceProvidersArray; ?>');
    var loandArray=JSON.parse('<?php echo $user->FinanceLoanArray; ?>');
    var childrenArray=JSON.parse('<?php echo $user->FinanceChildrenArray; ?>');

    var incometotal = '<?php echo($user->FinanceIncomeTotal)?>';
    var loantotal = '<?php echo($user->FinanceLoanTotal)?>';
    var childrenexp = '<?php echo($user->FinanceChildrenExpTotal)?>';

    var childrenamount = childrenArray.length;
    var totalpersonamount = childrenamount + 1;
    
    document.getElementById("welcomep").innerHTML = "Welcome To your Finance Portal, " + firstname + " " + lastname;

    var difference = Math.round((incometotal/12 - (totalpersonamount * 350 + loantotal/12 + childrenexp/12 + rentamount/12 + tuitionamount/12))/150);

    var analysistitle = document.getElementById("AnalysisTitle");
    var analysisdiv = document.getElementById("analysisparagraph");

    var p1 = document.createElement("p");
    var p2 = document.createElement("p");
    var p3 = document.createElement("p");
    var p4 = document.createElement("p");
    var p5 = document.createElement("p");
    var p6 = document.createElement("p");
    
    if (difference < 0) {
        analysistitle.innerHTML = "Financial Decline:  ";
        analysistitle.style.color = "red";
        p1.innerHTML = "We Realize that you are in a financial depreciation, you won't be able to pay all your expenses in the long run!";
        p2.innerHTML = "Based on the savings in your bank account, you will be able to cover the difference of your expenses for <span style='color:red;'>" + Math.floor(savingamount/(-incometotal/12 + (totalpersonamount * 350 + loantotal/12 + childrenexp/12 + rentamount/12 + tuitionamount/12))) + " months</span>.";
        p3.innerHTML = "We suggest you act as soon as possible for you to insure a better financial status, Here's how:"
        p4.innerHTML = "Use our tool below to find jobs nearby!"
        

    } else if (difference < 5) {
        analysistitle.innerHTML = "Financial Plateau:  ";
        analysistitle.style.color = "yellow";
        p1.innerHTML = "Our analysis shows that you are in a financial plateau.";
        p2.innerHTML = "This means that no significant amount of money should be leaving or entering your savings."
        p3.innerHTML = "However, you wouldn't be able to easily handle any emergency charges or save money for investments, therefore, we recommend you to do the following: "
        p4.innerHTML = "Use our tool below to find jobs nearby!"
        


    } else {
        analysistitle.innerHTML = "Financial Incline:  ";
        analysistitle.style.color = "green";
        p1.innerHTML = "Our analysis shows that you are in a financial climb!";
        p2.innerHTML = "Each month, you should have about <span style='color:green;'>" + Math.round((incometotal/12 - (totalpersonamount * 350 + loantotal/12 + childrenexp/12 + rentamount/12 + tuitionamount/12))) + "$</span> enter your bank account";
        p3.innerHTML = "Since you seem to be not needing any financial help, we recommend you go back to <a href='../Profile.php'>your LIFESTYLE profile</a> and work on the other sections you have recommended";
        
    }

    analysisdiv.appendChild(p1);
    analysisdiv.appendChild(p2);
    analysisdiv.appendChild(p3);
    analysisdiv.appendChild(p4);
    analysisdiv.appendChild(p5);
    analysisdiv.appendChild(p6);

    analysistitle.innerHTML = analysistitle.innerHTML + "Financial Index = " + difference;
</script>

