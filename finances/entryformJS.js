
var counter = 0;

function Update(a , b, c, d, e, f, g){
    // Create our XMLHttpRequest object


    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "financeinformation.php";


    var vars = "jobarray="+a+"&providersarray="+b+"&loanarray="+c+"&childrenarray="+d+"&incometotal="+e+"&loantotal="+f+"&childrenexptotal="+g;

    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;

        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request

}

function goNext() {


    var firstname = document.getElementById("firstnametxt").value;;
    var lastname = document.getElementById("lastnametxt").value;
    var gender = document.getElementById("genders").value;
    var dob = document.getElementById("date").value;
    var age = document.getElementById("agetxt").value;
    var cellnum = document.getElementById("cellnumber").value;

    /*console.log("Tried to update info")
    Update(firstname, lastname);*/

    document.getElementById("firtnamerev").innerHTML = firstname;
    document.getElementById("lastnamerev").innerHTML = lastname;
    document.getElementById("genderrev").innerHTML = gender;
    document.getElementById("dobrev").innerHTML = dob;
    document.getElementById("agerev").innerHTML = age;
    document.getElementById("cellnumrev").innerHTML = cellnum;

    var inputstatus = document.getElementsByName("option");
    var workstatus = "";
    for (i=0 ; i<inputstatus.length ; i++) {
        if (inputstatus[i].checked) {
            switch(inputstatus[i].value) {
                case "option1":
                    workstatus = "Employed + Independent";
                    break;

                case "option2":
                    workstatus = "Employed + dependent";
                    break;
                
                case "option3":
                    workstatus = "Unemployed + dependent";
                    break;

                case "option4":
                    workstatus = "Unemployed + Independent";
                    break;
            }
            document.getElementById("jobstatusrev").innerHTML = workstatus;
        }
    }
    var savingsamount = document.getElementById("savingamount").value=="" ? "No Amount Saved" : document.getElementById("savingamount").value + " $";
    var rentamount = document.getElementById("rentamount").value=="" ? "No Rent being Paid" : document.getElementById("rentamount").value + " $";
    var tuitionamount = document.getElementById("tuitionamount").value=="" ? "No User Tuition being Paid" : document.getElementById("tuitionamount").value + " $";

    document.getElementById("savingrev").innerHTML = savingsamount;
    document.getElementById("rentrev").innerHTML = rentamount;
    document.getElementById("tuitionrev").innerHTML = tuitionamount;

    switch(counter) {
        case 0:
            counter++;
            break;
        case 1:
            if (firstname=="" || lastname=="" || age=="" || dob=="" || gender=="-") {
                alert("Please enter all necessary input fields");
            } else {
                counter++;
            }
            break;
        case 2:
            if (workstatus == "") {
                alert("Please select an option");
            } else {
                counter++;
                switch(workstatus) {
                    case "Employed + Independent":
                        document.getElementById("providersection").style.display = "none";
                        providersArray = [];
                        document.getElementById("userworksection").style.display = "block";
                        break;
                    case "Unemployed + dependent":
                        document.getElementById("providersection").style.display = "block";
                        document.getElementById("userworksection").style.display = "none";
                        jobArray = [];
                        break;
                    case "Employed + dependent":
                        document.getElementById("providersection").style.display = "block";
                        document.getElementById("userworksection").style.display = "block";
                        break;
                    case "Unemployed + Independent":
                        providersArray = [];
                        jobArray = [];
                        document.getElementById("providersection").style.display = "none";
                        document.getElementById("userworksection").style.display = "none";
                        break;
                }
            }

            break;
        case 3:
            
            switch(workstatus) {
                case "Employed + Independent":
                    if (jobArray.length>0) {
                        counter++;
                    } else {
                        alert("Please Enter a Job or Change Work Status")
                    }
                    break;
                case "Unemployed + dependent":
                    if (providersArray.length>0) {
                        counter++;
                    } else {
                        alert("Please Enter a Provider or Change Work Status")
                    }
                    break;
                case "Employed + dependent":
                    if (jobArray.length>0 && providersArray.length>0) {
                        counter++;
                    } else {
                        alert("Please Enter both a Job AND a provider or Change Work Status")
                    }
                    break;
                case "Unemployed + Independent":
                    counter++;
                    break;
            }

            for(k=document.getElementsByName("adiv").length-1; k>=0; k--) {
                document.getElementsByName("adiv")[k].remove();
            }
            var reviewinformationdiv = document.getElementById("reviewinformation");
            
            document.getElementById("unemployedmsg").innerHTML = jobArray.length>0 ? "" : "Unemployed"
            var incometotal = 0;
            var totalexp = 0;
            for (i=0; i<jobArray.length; i++) {
                
                revjobel2 = document.createElement("p");
                revjobel2.innerHTML = jobArray[i].position;

                revjobel3 = document.createElement("p");
                revjobel3.innerHTML = jobArray[i].institution;

                revjobel4 = document.createElement("p");
                revjobel4.innerHTML = jobArray[i].income+" $";
                incometotal+=parseInt(jobArray[i].income);
                revjobdiv = document.createElement("div");
                
                revjobdiv.appendChild(revjobel2);
                revjobdiv.appendChild(revjobel3);
                revjobdiv.appendChild(revjobel4);
                revjobdiv.setAttribute("name", "adiv");
                console.log(revjobdiv);
                document.getElementById("joblistrec").appendChild(revjobdiv);
            }
            document.getElementById("noprovmsg").innerHTML = providersArray.length>0 ? "" : "No Other Providers"
            for (i=0; i<providersArray.length; i++) {
                
                revprovel2 = document.createElement("p");
                revprovel2.innerHTML = providersArray[i].providername;

                revprovel3 = document.createElement("p");
                revprovel3.innerHTML = providersArray[i].income + " $";
                incometotal+=parseInt(providersArray[i].income);
                
                
                revprovdiv = document.createElement("div");
                
                revprovdiv.appendChild(revprovel2);
                revprovdiv.appendChild(revprovel3);
                revprovdiv.setAttribute("name", "adiv");
                console.log(revprovdiv);
                document.getElementById("provlistrec").appendChild(revprovdiv);
            }
            
            
            document.getElementById("revtotalinc").innerHTML = incometotal + " $";

            
            document.getElementById("noloanmsg").innerHTML = loanArray.length>0 ? "" : "No Loans Being Paid"
            loantotal = 0;
            for (i=0; i<loanArray.length; i++) {
                
                revprovel2 = document.createElement("p");
                revprovel2.innerHTML = loanArray[i].loantype;

                revprovel3 = document.createElement("p");
                revprovel3.innerHTML = loanArray[i].remainingloan + " $";
                loantotal += parseInt(loanArray[i].remainingloan);                
                
                revprovdiv = document.createElement("div");
                
                revprovdiv.appendChild(revprovel2);
                revprovdiv.appendChild(revprovel3);
                revprovdiv.setAttribute("name", "adiv");
                console.log(revprovdiv);
                document.getElementById("loanslistrec").appendChild(revprovdiv);
            }
            document.getElementById("revtotalloan").innerHTML = loantotal + " $";

            document.getElementById("nochildrennmsg").innerHTML = childrenArray.length>0 ? "" : "No Children Expenses reported"
            childrenexptotal = 0;
            for (i=0; i<childrenArray.length; i++) {
                
                revjobel2 = document.createElement("p");
                revjobel2.innerHTML = childrenArray[i].childrenage;

                revjobel3 = document.createElement("p");
                revjobel3.innerHTML = childrenArray[i].childrenrentam + " $";
                childrenexptotal+=parseInt(childrenArray[i].childrenrentam);

                revjobel4 = document.createElement("p");
                revjobel4.innerHTML = childrenArray[i].childrentuitionam+" $";
                childrenexptotal+=parseInt(childrenArray[i].childrentuitionam);
                revjobdiv = document.createElement("div");
                
                revjobdiv.appendChild(revjobel2);
                revjobdiv.appendChild(revjobel3);
                revjobdiv.appendChild(revjobel4);
                revjobdiv.setAttribute("name", "adiv");
                console.log(revjobdiv);
                document.getElementById("childrenlistrec").appendChild(revjobdiv);
            }
            document.getElementById("revtotalchildexp").innerHTML = childrenexptotal + " $";

            console.log(JSON.stringify(jobArray));
            
            Update(JSON.stringify(jobArray), JSON.stringify(providersArray), JSON.stringify(loanArray), JSON.stringify(childrenArray), incometotal, loantotal, childrenexptotal);


            break;
    }


    
    if (counter > 0) {
        document.getElementById("back").style.visibility = "visible";
    }
    if (counter == 4) {
        document.getElementById("next").style.visibility = "hidden";
    }
    if (counter < 5) {
    
    viewArray = [document.getElementById('view0'), document.getElementById('view1'), document.getElementById('view2'), document.getElementById('view3'), document.getElementById('view4')]
    viewArray[counter - 1].style.display = "none";
    viewArray[counter].style.display = "block";
    } else {
        console.log("Counter was about to get bigger than 4");
    }

    
}

function goBack() {
    if (counter > 0) {
    counter--;
    document.getElementById("back").style.visibility = "visible";
    document.getElementById("next").style.visibility = "visible";
    if (counter == 0) {
        document.getElementById("back").style.visibility = "hidden";
    }
    if (counter == 4) {
        document.getElementById("next").style.visibility = "hidden";
    }
    viewArray = [document.getElementById('view0'), document.getElementById('view1'), document.getElementById('view2'), document.getElementById('view3'), document.getElementById('view4')]
    viewArray[counter + 1].style.display = "none";
    viewArray[counter].style.display = "block";
    } else {
        console.log("Counter was about to get negative");
    }
}

function PlusJob() {
    document.getElementById("plusdiv").style.display = "none";
    document.getElementById("userworkbody2").style.display = "block";

}


var jobArray = [];
jobcounter = 0;
function tryAddJob() {
    var institutiontxt = document.getElementById("jobinstitutiontxt");
    var positionselect = document.getElementById("position");
    var annualincometxt = document.getElementById("annualincometxt");
    if (positionselect.value == "-") {
        alert("Please Select a Position!");
        
    } else if (annualincometxt.value == "") {
        alert("Please Input an Annual Salary");
    }
    
    else {
        if (institutiontxt.value == "") institutiontxt.value = "NOT PROVIDED";
        jobcounter++;
        jobArray.push({num: jobcounter, institution: institutiontxt.value, position:positionselect.value, income:annualincometxt.value})

        var createddiv = document.createElement("div");
        createddiv.className = "userworkjobfinal";

        var jobnum = document.createElement("p");
        jobnum.innerHTML= "#" + jobcounter;
        var minidiv1 = document.createElement("div");
        minidiv1.className = "userworkjobinputminidiv";
        minidiv1.style.width = "10%";
        minidiv1.appendChild(jobnum);
        createddiv.appendChild(minidiv1);
        
        var position = document.createElement("p");
        position.innerHTML = positionselect.value;

        var minidiv2 = document.createElement("div");
        minidiv2.className = "userworkjobinputminidiv";
        minidiv2.appendChild(position);
        createddiv.appendChild(minidiv2);

        var institution = document.createElement("p");
        
        institution.innerHTML= institutiontxt.value;
        var minidiv3 = document.createElement("div");
        minidiv3.className = "userworkjobinputminidiv";
        minidiv3.appendChild(institution);
        createddiv.appendChild(minidiv3);

        var annualincome = document.createElement("p");
        annualincome.innerHTML= annualincometxt.value;
        var minidiv4 = document.createElement("div");
        minidiv4.className = "userworkjobinputminidiv";
        minidiv4.appendChild(annualincome);
        createddiv.appendChild(minidiv4);

        var btn = document.createElement("input");
        btn.type = "button";
        btn.value = "Remove";
        var copyofjobcounter = new Number(jobcounter);
        btn.onclick = function() {
            var strtoremove = "finaljob" + copyofjobcounter;
            document.getElementById(strtoremove).remove();

            for (k=0; k<jobArray.length ;k++) {
                if (jobArray[k].num == copyofjobcounter) {
                    jobArray.splice(k,1);
                }
            }
            
            console.log(JSON.stringify(jobArray));

            
        };

        
        
        var minidiv5 = document.createElement("div");
        minidiv5.className = "userworkjobinputminidiv";
        minidiv5.style.width = "10%";
        minidiv5.appendChild(btn);
        createddiv.appendChild(minidiv5);

        institutiontxt.value = "";
        positionselect.value = "-";
        annualincometxt.value = "";

        document.getElementById("userworkbody2").style.display = "none";
        document.getElementById("userworkbody2p").innerHTML = "#" + (jobcounter+1);
        createddiv.id = "finaljob"+jobcounter;
        document.getElementById("userworkbody").appendChild(createddiv);
        document.getElementById("plusdiv").style.display = "flex";

        console.log(JSON.stringify(jobArray));

        
        
    }


}
providersArray = [];
providercounter = 0;
function tryAddProvider() {
    var providertxt = document.getElementById("sourceprovider");
    var annualincometxt = document.getElementById("providersannualincometxt");
    
    if (annualincometxt.value == "") {
        alert("Please Input Annual Income for the Source!");
    } else {
        providercounter++;
        document.getElementById("providersbody2p").innerHTML = "#" + (providercounter+1);
        if (providertxt.value == "-") {
            providerpvalue = "NOT DISCLOSED";
        } else {
            providerpvalue = providertxt.value;
        }
        var provider = {num:providercounter, providername:providerpvalue, income:annualincometxt.value};
        providersArray.push(provider);

        var sourcenum = document.createElement("p");
        sourcenum.className = "providersbody2p";
        sourcenum.innerHTML = "#" + providercounter;
        var minidiv1 = document.createElement("div");
        minidiv1.className = "providersjobinputminidiv";
        minidiv1.style.width = "15%";
        minidiv1.appendChild(sourcenum);

        var providerp = document.createElement("p");
        providerp.className = "providersbody2p";
        providerp.innerHTML = providerpvalue;
        var minidiv2 = document.createElement("div");
        minidiv2.className = "providersjobinputminidiv";
        minidiv2.appendChild(providerp);

        var providersannualincomep = document.createElement("p");
        providersannualincomep.className = "providersbody2p";
        providersannualincomep.innerHTML = annualincometxt.value;
        var minidiv3 = document.createElement("div");
        minidiv3.className = "providersjobinputminidiv";
        minidiv3.appendChild(providersannualincomep);

        var removebtn = document.createElement("input");
        removebtn.type = "button";
        removebtn.value = "Remove";

        var copyofprovidercounter = new Number(providercounter);
        
        removebtn.onclick = function() {
            var strtoremove = "finalprovider" + copyofprovidercounter;
            document.getElementById(strtoremove).remove();
            for (k=0; k<providersArray.length ;k++) {
                if (providersArray[k].num == copyofprovidercounter) {
                    providersArray.splice(k,1);
                }
            }
            console.log(providersArray);
            
            
        };
        
        var minidiv4 = document.createElement("div");
        minidiv4.className = "providersjobinputminidiv";
        minidiv4.style.width = "15%";
        minidiv4.appendChild(removebtn);

        var createddiv = document.createElement("div");
        createddiv.appendChild(minidiv1);
        createddiv.appendChild(minidiv2);
        createddiv.appendChild(minidiv3);
        createddiv.appendChild(minidiv4);
        createddiv.className = "providersjobfinal";
        createddiv.id = "finalprovider" + providercounter;
        
        document.getElementById("providersbody").appendChild(createddiv);

        providertxt.value = "-";
        annualincometxt.value = "";

        document.getElementById("providersbody2").style.display = "none";
        document.getElementById("Providerplusdiv").style.display = "flex";

        console.log(providersArray);
        
    }
}

function PlusProvider() {
    document.getElementById("Providerplusdiv").style.display = "none";
    document.getElementById("providersbody2").style.display = "block";

}


loanArray = [];
loancounter = 0;
function tryAddloan() {
    var loantxt = document.getElementById("sourceloan");
    var loanremainingtxt = document.getElementById("loanremainingtxt");
    
    if (loantxt.value == "-") {
        alert("Please Input Loan Type");
    } else if (loanremainingtxt.value == "") {
        alert("Please Input Remaining Loan!");
    } else {
        loancounter++;
        document.getElementById("loanbody2p").innerHTML = "#" + (loancounter+1);
        var loan = {num:loancounter, loantype:loantxt.value, remainingloan:loanremainingtxt.value};
        loanArray.push(loan);

        var sourcenum = document.createElement("p");
        sourcenum.className = "loanbody2p";
        sourcenum.innerHTML = "#" + loancounter;
        var minidiv1 = document.createElement("div");
        minidiv1.className = "loanjobinputminidiv";
        minidiv1.style.width = "15%";
        minidiv1.appendChild(sourcenum);

        var loanp = document.createElement("p");
        loanp.className = "loanbody2p";
        loanp.innerHTML = loantxt.value;
        var minidiv2 = document.createElement("div");
        minidiv2.className = "loanjobinputminidiv";
        minidiv2.style.width = "20%";
        minidiv2.appendChild(loanp);

        var loanannualincomep = document.createElement("p");
        loanannualincomep.className = "loanbody2p";
        loanannualincomep.innerHTML = loanremainingtxt.value;
        var minidiv3 = document.createElement("div");
        minidiv3.className = "loanjobinputminidiv";
        minidiv3.style.width = "50%";
        minidiv3.appendChild(loanannualincomep);

        var removebtn = document.createElement("input");
        removebtn.type = "button";
        removebtn.value = "Remove";

        var copyofloancounter = new Number(loancounter);
        
        removebtn.onclick = function() {
            var strtoremove = "finalloan" + copyofloancounter;
            document.getElementById(strtoremove).remove();
            for (k=0; k<loanArray.length ;k++) {
                if (loanArray[k].num == copyofloancounter) {
                    loanArray.splice(k,1);
                }
            }
            console.log(loanArray);
            
            
        };
        
        var minidiv4 = document.createElement("div");
        minidiv4.className = "loanjobinputminidiv";
        minidiv4.style.width = "15%";
        minidiv4.appendChild(removebtn);

        var createddiv = document.createElement("div");
        createddiv.appendChild(minidiv1);
        createddiv.appendChild(minidiv2);
        createddiv.appendChild(minidiv3);
        createddiv.appendChild(minidiv4);
        createddiv.className = "loanjobfinal";
        createddiv.id = "finalloan" + loancounter;
        
        document.getElementById("loanbody").appendChild(createddiv);

        loantxt.value = "-";
        loanremainingtxt.value = "";

        document.getElementById("loanbody2").style.display = "none";
        document.getElementById("loanplusdiv").style.display = "flex";

        console.log(loanArray);
    }
}

function PlusLoan() {
    document.getElementById("loanplusdiv").style.display = "none";
    document.getElementById("loanbody2").style.display = "block";

}

childrenArray = [];
childrencounter = 0;
childrencontainerarr = [];
function tryAddchildren() {
    var childrenage = document.getElementById("childrenage");
    var childrenrent = document.getElementById("childrenrent");
    var childrentuition = document.getElementById("childrentuition");
    
    if (childrenrent.value == "" || childrentuition.value == "" || childrenage.value == "") {
        alert("Please Input All Fields");
    
    } else {
        childrencounter++;
        document.getElementById("childrenbody2p").innerHTML = "#" + (childrencounter+1);
        var children = {num:childrencounter, childrenage:childrenage.value, childrenrentam:childrenrent.value, childrentuitionam:childrentuition.value};
        childrenArray.push(children);

        var childrennum = document.createElement("p");
        childrennum.className = "childrenbody2p";
        childrennum.innerHTML = "#" + childrencounter;
        var minidiv1 = document.createElement("div");
        minidiv1.className = "childrenjobinputminidiv";
        minidiv1.style.width = "15%";
        minidiv1.appendChild(childrennum);

        var childrenagep = document.createElement("p");
        childrenagep.className = "childrenbody2p";
        childrenagep.innerHTML = childrenage.value;
        var minidiv5 = document.createElement("div");
        minidiv5.className = "childrenjobinputminidiv";
        minidiv5.style.width = "15%";
        minidiv5.appendChild(childrenagep);

        var childrenp = document.createElement("p");
        childrenp.className = "childrenbody2p";
        childrenp.innerHTML = childrenrent.value;
        var minidiv2 = document.createElement("div");
        minidiv2.className = "childrenjobinputminidiv";
        minidiv2.style.width = "30%";
        minidiv2.appendChild(childrenp);

        var childrenannualincomep = document.createElement("p");
        childrenannualincomep.className = "childrenbody2p";
        childrenannualincomep.innerHTML = childrentuition.value;
        var minidiv3 = document.createElement("div");
        minidiv3.className = "childrenjobinputminidiv";
        minidiv3.style.width = "30%";
        minidiv3.appendChild(childrenannualincomep);

        var removebtn = document.createElement("input");
        removebtn.type = "button";
        removebtn.value = "Remove";

        var copyofchildrencounter = new Number(childrencounter);
        
        removebtn.onclick = function() {
            var strtoremove = "finalchildren" + copyofchildrencounter;
            document.getElementById(strtoremove).remove();
            for (i=0 ; i<childrencontainerarr.length ; i++) {
                if (childrencontainerarr[i]==strtoremove){
                    childrencontainerarr.splice(i,1);
                }
            }
            for (k=0; k<childrenArray.length ;k++) {
                if (childrenArray[k].num == copyofchildrencounter) {
                    childrenArray.splice(k,1);
                }
            }
            console.log(childrenArray);
            
            
        };
        
        var minidiv4 = document.createElement("div");
        minidiv4.className = "childrenjobinputminidiv";
        minidiv4.style.width = "10%";
        minidiv4.appendChild(removebtn);

        var createddiv = document.createElement("div");
        createddiv.appendChild(minidiv1);
        createddiv.appendChild(minidiv5);
        createddiv.appendChild(minidiv2);
        createddiv.appendChild(minidiv3);
        createddiv.appendChild(minidiv4);
        
        createddiv.className = "childrenjobfinal";
        createddiv.id = "finalchildren" + childrencounter;
        childrencontainerarr.push(createddiv.id);
        
        document.getElementById("childrenbody").appendChild(createddiv);

        childrenrent.value = "";
        childrentuition.value = "";
        childrenage.value = "";
        

        document.getElementById("childrenbody2").style.display = "none";
        document.getElementById("childrenplusdiv").style.display = "flex";

        console.log(childrenArray);
    }
}


function Pluschildren() {
    document.getElementById("childrenplusdiv").style.display = "none";
    document.getElementById("childrenbody2").style.display = "block";

}

function takeSavings() {
    var hassavings = document.getElementById("hassavings");
    var savingwrapper = document.getElementById("savingwrapper");
    var inputfield = document.getElementById("savingamount");
    inputfield.value = "";
    savingwrapper.style.backgroundColor = hassavings.checked ? "white" : "rgba(255, 182, 182, 0.548)";
    inputfield.disabled = hassavings.checked ? false : true;
}

function takerents() {
    var hasrents = document.getElementById("hasrents");
    var rentwrapper = document.getElementById("rentwrapper");
    var inputfield = document.getElementById("rentamount");
    inputfield.value = "";
    rentwrapper.style.backgroundColor = hasrents.checked ? "white" : "rgba(255, 182, 182, 0.548)";
    inputfield.disabled = hasrents.checked ? false : true;
}

function taketuitions() {
    var hastuitions = document.getElementById("hastuitions");
    var tuitionwrapper = document.getElementById("tuitionwrapper");
    var inputfield = document.getElementById("tuitionamount");
    inputfield.value = "";
    tuitionwrapper.style.backgroundColor = hastuitions.checked ? "white" : "rgba(255, 182, 182, 0.548)";
    inputfield.disabled = hastuitions.checked ? false : true;
}

function takechildren() {
    var haschildren = document.getElementById("haschildren");
    var childrenwrapper = document.getElementById("childrenwrapper");
    
    childrenwrapper.style.backgroundColor = haschildren.checked ? "white" : "rgba(255, 182, 182, 0.548)";
    var childrenage = document.getElementById("childrenage");
    var childrenrent = document.getElementById("childrenrent");
    var childrentuition = document.getElementById("childrentuition");
    var childrenadd = document.getElementById("childrenaddjob");
    childrenage.value="";
    childrenrent.value="";
    childrentuition.value="";
    childrenage.disabled = haschildren.checked ? false : true;
    childrenrent.disabled = haschildren.checked ? false : true;
    childrentuition.disabled = haschildren.checked ? false : true;
    childrenadd.disabled = haschildren.checked ? false : true;

    if (childrencontainerarr.length > 0) {
       for (i=0 ; i<childrencontainerarr.length ; i++){
        document.getElementById(childrencontainerarr[i]).remove();
        } 
    }
    childrencontainerarr = [];
    childrenArray = [];

}