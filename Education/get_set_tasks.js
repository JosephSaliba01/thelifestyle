
function set_task(){
	var subject = prompt("What is your subject?","Math,Science,English,etc.");
	var task = prompt("What's on your mind for today?","Name task");
	var priority = prompt("What's the priority of your task?","High or low");
	var statusT = "Queue";
	if(subject != "null" && task != "null" && priority != "null"){
		var xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
	
				document.getElementById("task_List1").scrollTop = document.getElementById("task_List1").scrollHeight;
			}
		};
		xmlhttp.open("GET","set_tasks.php?subject="+subject+"&task="+task+"&priority="+priority+"&statusT="+statusT+"&Addtask=Addtask",true);
		xmlhttp.send();
		
		return true;
	}
	else{
		alert("A task cannot be empty!");
		return false;
	}
}
function display_task(){
	
	
	var xmlhttp = new XMLHttpRequest();
	
	var update = setInterval(function(){
		var textList = "";
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				var result = xmlhttp.responseText.split("\n");
				var task = "";
				var newTask = "";
				var priority = "";
				for(var i = 0; i < result.length; i++){
					newTask = result[i].split("\\");
					priority = "#004BAA";
					if(newTask[1]!= "null" && newTask[2] != "null" && newTask[0] != "null" && !textList.includes(newTask[4]) && newTask[3] == "Queue" && (!document.getElementById("task_List2").innerHTML.includes(newTask[4])||!document.getElementById("task_List3").innerHTML.includes(newTask[4]))){
						
						if(document.getElementById("task_List1").innerHTML.includes(newTask[0])){
							//alert("task already in list1");
							continue;
						}
						
						if(newTask[2] == "high"){
							priority = "red";
						}
						task = "<ul id='"+newTask[4]+"'onclick='testprint(this.id)' style='text-align:center; padding:5px;'><li style='list-style-type:none; font-family: Arial, Helvetica,sans-serif;font-size:12px;'>"+ 
						newTask[1] +"</li><li class='txt_bub' style='background-color: "+priority+";color:white;'>"+ 
						newTask[0]+"</li></ul>\n";
						
						document.getElementById("task_List1").innerHTML += task;
						textList += (task+newTask[4]);
						document.getElementById("task_List1").scrollTop = document.getElementById("task_List1").scrollHeight;
						
					}
					if(newTask[1]!= "null" && newTask[2] != "null" && newTask[0] != "null" && !textList.includes(newTask[4]) && newTask[3] == "Executed" && (!document.getElementById("task_List1").innerHTML.includes(newTask[4])||!document.getElementById("task_List3").innerHTML.includes(newTask[4]))){
						if(document.getElementById("task_List2").innerHTML.includes(newTask[0])){
						//	alert("task already in list2");
							continue;
						}
						
						if(newTask[2] == "high"){
							priority = "red";
						}
						task = "<ul id='"+newTask[4]+"' onclick='testprint(this.id)' style='text-align:center; padding:5px;'><li style='list-style-type:none; font-family: Arial, Helvetica,sans-serif;font-size:12px;'>"+ 
						newTask[1] +"</li><li  class='txt_bub' style='background-color: "+priority+";color:white;'>"+ 
						newTask[0]+"</li></ul>\n";
						document.getElementById("task_List2").innerHTML += task;
						textList += (task+newTask[4]);
						document.getElementById("task_List2").scrollTop = document.getElementById("task_List2").scrollHeight;
						
					}
					if(newTask[1]!= "null" && newTask[2] != "null" && newTask[0] != "null" && !textList.includes(newTask[4]) && newTask[3] == "Finished" && (!document.getElementById("task_List2").innerHTML.includes(newTask[4])||!document.getElementById("task_List1").innerHTML.includes(newTask[4]))){
						if(document.getElementById("task_List3").innerHTML.includes(newTask[0])){
						//	alert("task already in list3");
							continue;
						}
						
						if(newTask[2] == "high"){
							priority = "red";
						}
						task = "<ul id='"+newTask[4]+"' onclick='testprint(this.id)' style='text-align:center; padding:5px;'><li style='list-style-type:none; font-family: Arial, Helvetica,sans-serif;font-size:12px;'>"+ 
						newTask[1] +"</li><li  class='txt_bub' style='background-color: "+priority+";color:white;'>"+ 
						newTask[0]+"</li></ul>\n";
						document.getElementById("task_List3").innerHTML += task;
						textList += (task+newTask[4]);
						document.getElementById("task_List3").scrollTop = document.getElementById("task_List3").scrollHeight;
						
					}
					
				}
			}
		};
		xmlhttp.open("GET","retrieve_tasks.php",true);
		xmlhttp.send();
	},1000);
}

function testprint(id){
	var statusT = prompt("Change status of selected task","Queue, Executed, Finished");
	
	if(statusT != null){
		
		var xmlhttp = new XMLHttpRequest();
		
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				alert("clear");
				var anelement = document.getElementById(id);
				anelement.remove();
				document.getElementById("task_List1").scrollTop = document.getElementById("task_List1").scrollHeight;
				
			}
		};
		xmlhttp.open("GET","set_status.php?statusT="+statusT+"&id="+id,true);
		xmlhttp.send();
		
		return true;
	}
	else{
		alert("A task has to be placed somewhere!");
		return false;
	}
	
	
}