

var add = false;


function Add(name,protein, carbs,fats ,calories,Image,descrip,Index,UserName ){
	  add = true;
	  
	  // global variabel add to configure 
	  //alert(Object.Name);

//var value = document.getElementById("activities");

//var NewObject = {Name :"Lemon Juice", ProteinPerGram:"0.7", CarbPerGram:"0.2", FatPerGram:"0.7" , CaloriesPerGram:"0.9" , image :"https://www.foodiesfeed.com/wp-content/uploads/2020/05/suco-de-limao-com-slash-349x524.jpg"};


//https://www.foodiesfeed.com/wp-content/uploads/2020/05/suco-de-limao-com-slash-349x524.jpg


//value.options[value.length] = new Option(Object.Name, Object.Name);
   
  
     //console.log(localStorage.getItem("Object"));
	 
	// var NewObject = {Name :name, ProteinPerGram :protein, CarbPerGram :carbs, FatPerGram :fats , CaloriesPerGram :calories , image :Image };
   
   
   //var ArrayOfFood =  localStorage.getItem("Array2");
     
	 
	 
	// console.log("The array : "+localStorage.getItem("Array2"));
 // alert( "The size of the first array is  "+ Object.keys(ArrayOfFood).length );
  
  // var ArrayOfFood2 =  localStorage.getItem("Array");
 
  //alert("The size of the second array is " + Object.keys(ArrayOfFood2).length );
  
   localStorage.setItem(UserName+"+Proteins", protein);
   
   localStorage.setItem(UserName+"+Carbs", carbs);
   
   localStorage.setItem(UserName+"+Fats", fats);
   
   localStorage.setItem(UserName+"+Calories", calories);
   
    localStorage.setItem(UserName+"+Image", Image);
	
	  localStorage.setItem(UserName+"+Description2", descrip);  
	 
 /*
  var option = document.createElement("option");
  option.text = NewObject.Name;
  x.add(option);
  */
   //NewElements[count] = NewObject;   
  
   sessionStorage.setItem("Test", "false");
   
   //alert(sessionStorage.getItem("Test"));
window.open("FooDDataBase.php");
}

function Calculation() {
	add = true;
	

/*	
var select2 = document.getElementById("activities"); 
var options = ["Appended"]; 

for(var i = 0; i < options.length; i++) {
	
    var opt = options[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = opt;
    select2.appendChild(el);
}
	
	*/
	var Almonds = {ProteinPerGram:"0.2", CarbPerGram:"0.2", FatPerGram:"0.5" , CaloriesPerGram:"5.8"};
	//https://www.nutritionvalue.org/Almonds%2C_unroasted_nutritional_value.html
	var Banana = {ProteinPerGram:"0", CarbPerGram:"0.2", FatPerGram:"0" , CaloriesPerGram:"0.9"};
	
	var Brocoli = {ProteinPerGram:"0", CarbPerGram:"0.1", FatPerGram:"0" , CaloriesPerGram:"0.3"};
	
	
	var Bacon = {ProteinPerGram:"0.3", CarbPerGram:"0", FatPerGram:"0.4" , CaloriesPerGram:"4.7"};
	var Butter = {ProteinPerGram:"0.3", CarbPerGram:"0", FatPerGram:"0.4" , CaloriesPerGram:"4.7"};
	
	var BrownRice = {ProteinPerGram:"0.1", CarbPerGram:"0.8", FatPerGram:"0" , CaloriesPerGram:"3.7"};
	
	var BasmatiRice = {ProteinPerGram:"0.0354", CarbPerGram:"0.2522", FatPerGram:"0.0038" , CaloriesPerGram:"1.2"};
	
	var BrownBread = {ProteinPerGram:"0.1", CarbPerGram:"0.4", FatPerGram:"0" , CaloriesPerGram:"2"};
	
	var Chicken = {ProteinPerGram:"0.2", CarbPerGram:"0", FatPerGram:"0.1" , CaloriesPerGram:"1.4"};
	
	var Chicken = {ProteinPerGram:"0.2", CarbPerGram:"0", FatPerGram:"0.1" , CaloriesPerGram:"1.4"};
	
		var Steak = {ProteinPerGram:"0.1", CarbPerGram:"0", FatPerGram:"0.1" , CaloriesPerGram:"1.3"};
	
	var Milk = {ProteinPerGram:"0", CarbPerGram:"0.1", FatPerGram:"0" , CaloriesPerGram:"0.4"};
	
	var Tomato = {ProteinPerGram:"0.009", CarbPerGram:"0.039", FatPerGram:"0.002" , CaloriesPerGram:"0.18"};
	
	var Eggs = {ProteinPerGram:"0.1", CarbPerGram:"0", FatPerGram:"0.1" , CaloriesPerGram:"1.4"};
	
	var Salmon = {ProteinPerGram:"0.2", CarbPerGram:"0", FatPerGram:"0" , CaloriesPerGram:"1.3"};
	
	var Tomatoe = {ProteinPerGram:"0", CarbPerGram:"0", FatPerGram:"0" , CaloriesPerGram:"0.2"};
	
	var WhiteRice = {ProteinPerGram:"0.1", CarbPerGram:"0.8", FatPerGram:"0" , CaloriesPerGram:"3.6"};
	
	var WhiteBread = {ProteinPerGram:"0.1", CarbPerGram:"0.5", FatPerGram:"0" , CaloriesPerGram:"2.7"};
	
	var Oliveoil = {ProteinPerGram:"0", CarbPerGram:"0", FatPerGram:"1" , CaloriesPerGram:"8.8"};
	
	var PeanutButter = {ProteinPerGram:"0.2", CarbPerGram:"0.2", FatPerGram:"0.5" , CaloriesPerGram:"6"};
	
	var Ognon = {ProteinPerGram:"0", CarbPerGram:"0.1", FatPerGram:"0" , CaloriesPerGram:"0.1"};
	
	var Salad = {ProteinPerGram:"0", CarbPerGram:"0.2", FatPerGram:"0" , CaloriesPerGram:"0.2"};
	
	var WheyProtein = {ProteinPerGram:"0", CarbPerGram:"0.2", FatPerGram:"0" , CaloriesPerGram:"0.2"};
	
	var  Description = document.getElementById("Description");
	
	
	/*
	Eggs
	Salmon
	Steak
	Tomatoe
	White Rice
	White Bread
	Whole Grains Bread
	Olive oil
	Peanut Butter 
	Ognon
	Salad
	Whey protein 
	*/
	
	var Apple = {ProteinPerGram:"0", CarbPerGram:"0.1", FatPerGram:"0" , CaloriesPerGram:"0.5"};
	
	
	var value = document.getElementById("activities");

     
	
	var weight = document.getElementById("weight");
	
	
	if(weight.value =="")
	alert("Please enter a value for weight");
	
	else {
	
	var gram =  document.getElementById("gram"); 
	
	var calor = document.getElementById("calor");
	
	var protein = document.getElementById("protein");
	
	var cabrs = document.getElementById("carbs");
	
	var fats = document.getElementById("fats");
	
	var image = document.getElementById("Food");
	
	//alert("Hello");
	//alert(value.value);
	console.log(value.value);
		console.log("/n");
	console.log("Almonds");
	
	if(value.value == "Almond"){
		
		calor.innerHTML = Math.round (weight.value *  Almonds.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Almonds.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Almonds.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Almonds.FatPerGram);
			
		image.src = "Fitness&Nutrition_img/almonds.jpg";
		
		 gram.innerHTML =  weight.value;
		 

Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value * Almonds.ProteinPerGram,weight.value *  Almonds.CarbPerGram, weight.value * Almonds.FatPerGram);
		
	}
	
	if(value.value == "Apple"){
		
		calor.innerHTML = Math.round (weight.value *  Apple.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Apple.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Apple.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Apple.FatPerGram);
			
		image.src = "Fitness&Nutrition_img/Apple.png";
		
		Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		
		 gram.innerHTML =  weight.value;
		 Graph(weight.value * Apple.ProteinPerGram,weight.value *  Apple.CarbPerGram, weight.value * Apple.FatPerGram);
		
	}
	
	
	if(value.value == "Banana"){
		
		calor.innerHTML = Math.round (weight.value *  Banana.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Banana.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Banana.CarbPerGram);
		
		fats.innerHTML = Math.round ( weight.value * Banana.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/banana.jpg";
		 Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 Graph(weight.value *Banana.ProteinPerGram, weight.value *Banana.CarbPerGram, weight.value * Banana.FatPerGram);
		
	}
	
	if(value.value == "Brocoli"){
		
		calor.innerHTML = Math.round (weight.value *  Brocoli.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Brocoli.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Brocoli.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Brocoli.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/Brocoli.png";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *Brocoli.ProteinPerGram, weight.value *Brocoli.CarbPerGram, weight.value * Brocoli.FatPerGram);
		
	}
	
	if(value.value == "Butter"){
		
		calor.innerHTML = Math.round (weight.value *  Butter.CaloriesPerGram);
		
		protein.innerHTML =  Math.round (weight.value * Butter.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Butter.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Butter.FatPerGram);
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/Butter.jpg";
		 
		 Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 Graph(weight.value *Butter.ProteinPerGram, weight.value *Butter.CarbPerGram, weight.value * Butter.FatPerGram);
		
	}
	
	if(value.value == "Bacon"){
		
		
		calor.innerHTML = weight.value *  Bacon.CaloriesPerGram
		
		protein.innerHTML =  Math.round (weight.value * Bacon.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Bacon.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Bacon.FatPerGram);
				
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/bacon.jpg";
		 
		 
		 Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 Graph(weight.value *Bacon.ProteinPerGram, weight.value *Bacon.CarbPerGram, weight.value * Bacon.FatPerGram);
		 
		
	}
	
	if(value.value == "Brown Rice"){
		
		calor.innerHTML = weight.value *  BrownRice.CaloriesPerGram
		
		
		protein.innerHTML =  Math.round (weight.value * BrownRice.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  BrownRice.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * BrownRice.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/BrownRice.jpg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *BrownRice.ProteinPerGram, weight.value *BrownRice.CarbPerGram, weight.value * BrownRice.FatPerGram);
		
	}
	
	
	if(value.value == "Basmati Rice"){
		
		calor.innerHTML = weight.value *  BasmatiRice.CaloriesPerGram
		
		
		protein.innerHTML =  Math.round (weight.value * BasmatiRice.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  BasmatiRice.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * BasmatiRice.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/BasmatiRice.jpg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *BasmatiRice.ProteinPerGram, weight.value *BasmatiRice.CarbPerGram, weight.value * BasmatiRice.FatPerGram);
		
	}
	
	if(value.value == "Brown Bread"){
		
		calor.innerHTML = weight.value *  BrownBread.CaloriesPerGram
		
		
		protein.innerHTML =  Math.round (weight.value * BrownBread.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  BrownBread.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * BrownBread.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/BrownBread.jpg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *BrownBread.ProteinPerGram, weight.value *BrownBread.CarbPerGram, weight.value * BrownBread.FatPerGram);
		
	}
	
	
	if(value.value == "Chicken"){
		
		calor.innerHTML = Math.round (weight.value *  Chicken.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Chicken.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Chicken.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Chicken.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/chicken.jpg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *Chicken.ProteinPerGram, weight.value *Chicken.CarbPerGram, weight.value * Chicken.FatPerGram);
		
	}
	
	if(value.value == "Milk"){
		
		calor.innerHTML = Math.round (weight.value *  Milk.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Milk.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Milk.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Milk.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/milk.jpeg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *Milk.ProteinPerGram, weight.value *Milk.CarbPerGram, weight.value * Milk.FatPerGram);
		
	}
	
	
	if(value.value == "Eggs"){
		
		calor.innerHTML = Math.round (weight.value *  Eggs.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Eggs.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Eggs.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Eggs.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/egg.png";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *Eggs.ProteinPerGram, weight.value *Eggs.CarbPerGram, weight.value * Eggs.FatPerGram);
		
	}
	
	if(value.value == "Salmon"){
		
		calor.innerHTML = Math.round (weight.value *  Salmon.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Salmon.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Salmon.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Salmon.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/Salmon.jpg";
		 
		 Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 Graph(weight.value *Salmon.ProteinPerGram, weight.value *Salmon.CarbPerGram, weight.value * Salmon.FatPerGram);
		
	}
	
	
	if(value.value == "Steak"){
		
		calor.innerHTML = Math.round (weight.value *  Steak.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Steak.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Steak.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Steak.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/Steak.jpg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *Steak.ProteinPerGram, weight.value *Steak.CarbPerGram, weight.value * Steak.FatPerGram);
		
	}
	
	if(value.value == "Tomatoe"){
		
		calor.innerHTML = Math.round (weight.value *  Tomato.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Tomato.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Tomato.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Tomato.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/tomato.jpg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *Tomato.ProteinPerGram, weight.value *Tomato.CarbPerGram, weight.value * Tomato.FatPerGram);
		
	}
	
	if(value.value == "White Rice"){
		
		calor.innerHTML = Math.round (weight.value *  WhiteRice.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * WhiteRice.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  WhiteRice.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * WhiteRice.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/WhiteRice.jpg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *WhiteRice.ProteinPerGram, weight.value *WhiteRice.CarbPerGram, weight.value * WhiteRice.FatPerGram);
		
	}
	
	if(value.value == "White Bread"){
		
		
		calor.innerHTML = Math.round (weight.value *  WhiteBread.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * WhiteBread.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  WhiteBread.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * WhiteBread.FatPerGram);
			
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/White-Bread.jpg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *WhiteBread.ProteinPerGram, weight.value *WhiteBread.CarbPerGram, weight.value * WhiteBread.FatPerGram);
		
	}
	
	
	if(value.value == "Olive oil"){
		
		
		calor.innerHTML = Math.round (weight.value *  Oliveoil.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Oliveoil.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Oliveoil.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Oliveoil.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/Oliveoil.jpg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *Oliveoil.ProteinPerGram, weight.value *Oliveoil.CarbPerGram, weight.value * Oliveoil.FatPerGram);
		
	}
	
	if(value.value == "Peanut Butter"){
		
		
		calor.innerHTML = Math.round (weight.value *  PeanutButter.CaloriesPerGram);
		

		protein.innerHTML =  Math.round (weight.value * PeanutButter.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  PeanutButter.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * PeanutButter.FatPerGram);
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/PeanutButter.jpg";
			
			Description.innerHTML = "The nutrition maximiser is a tool that you can use to enhance your results in your fitness journey.It comes with a small database of the most consumed types of food and recommended types of hood for a healthy diet. You can select a given choice,and the tool will consequently illustrate the correct macronutrient profile of this food choice and its caloric content based on the number of grams you consumed";
		 
		 Graph(weight.value *PeanutButter.ProteinPerGram, weight.value *PeanutButter.CarbPerGram, weight.value * PeanutButter.FatPerGram);
		
	}
	
	
	var OuterArray =  JSON.parse(localStorage.getItem("Array2"));
	
	for(var i = 0 ; i < JSON.parse(localStorage.getItem("Array2")).length ; i++ ){
	  
	    
		if(i ==2){
			//alert("Here");
			
			console.log(value.value);
		console.log("Value is " + JSON.parse(localStorage.getItem("Array2"))[i]);
		console.log("\n Array  is " + JSON.parse(localStorage.getItem("Array2")));
		
		console.log("\n Array size is " + JSON.parse(localStorage.getItem("Array2")).length);
		
		}
		
	   if(value.value  == JSON.parse(localStorage.getItem("Array2"))[i] ) {
		   
		 //  alert("We have reached this place and index of Array2 IS " + i);
		  // alert("Value is " + JSON.parse(localStorage.getItem("Array2"))[i] );
			
	   
	for(var j = 0 ; j < JSON.parse(localStorage.getItem("Array")).length  ; j++ ){
	
	SpecialArray = JSON.parse(localStorage.getItem("Array"))[j];
	
	var res= SpecialArray.split("+");
/*	
	if(j ==2){
	
	alert("Index 0 " +  res[0] + "Index 1 " + res[1] + " value " + JSON.parse(localStorage.getItem("Array2"))[j]);
	
	}
	*/
	 if( OuterArray[i]  == res[1] ) {
					
		calor.innerHTML = Math.round (weight.value *  localStorage.getItem(res[0]+"+Calories"));
		
		protein.innerHTML =  Math.round (weight.value * localStorage.getItem(res[0]+"+Proteins")  );
		
		cabrs.innerHTML = Math.round (weight.value *  localStorage.getItem(res[0]+"+Carbs") );
		
		fats.innerHTML =  Math.round (weight.value *localStorage.getItem(res[0]+"+Fats")   );
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src =localStorage.getItem(res[0]+"+Image");
			
			
			Description.innerHTML =   localStorage.getItem(res[0]+"+Description2");
		 
		 Graph(weight.value *localStorage.getItem(res[0]+"+Proteins"), weight.value *localStorage.getItem(res[0]+"+Carbs"), weight.value * localStorage.getItem(res[0]+"+Fats"));	

	 }
	}
			
	}
		
	}



	
	/*
	Almonds
	Apple
	Brocoli
	Banana
	Butter
	Bacon
	Brown Rice
	Basmati Rice
	Brown Bread
	Chicken
	Milk
	Eggs
	Salmon
	Steak
	Tomatoe
	White Rice
	White Bread
	Olive oil
	Peanut Butter 
	Ognon
	Salad
	Whey protein 
								
	*/
	
	
}


}
	function Graph(a, b ,c){
		
		
		
		
		const sum = a + b + c;

const PourcentageA = Math.round(100* a/sum);	

const PourcentageB = Math.round(100* b/sum);

const PourcentageC = Math.round(100* c/sum);


var labelProtein = document.getElementById('Proteins');
var labelCarbs = document.getElementById('Carbs');
var labelFats = document.getElementById('Fats');

var Protein = document.getElementById('P');
var Carbs = document.getElementById('C');
var Fats = document.getElementById('F');

Protein.innerHTML = PourcentageA + "%";
Carbs.innerHTML = PourcentageB + "%";
Fats.innerHTML = PourcentageC + "%";

Protein.style.fontSize = "medium";
Carbs.style.fontSize = "medium";
Fats.style.fontSize = "medium";


labelProtein.style.backgroundColor =  'rgba(255, 99, 132, 0.2)';
labelCarbs.style.backgroundColor =   'rgba(54, 162, 235, 0.2)';
labelFats.style.backgroundColor =  'rgba(255, 159, 64, 0.2)';

labelProtein.innerHTML = "Proteins";
labelCarbs.innerHTML = "Carbs";
labelFats.innerHTML = "Fats";

				
		var ctx = document.getElementById('Calories').getContext('2d');
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
	//labels: ["Proteins "+ PourcentageA + "%", "Carbs "+ PourcentageB + "%","Fats "+ PourcentageC + "%"],
        datasets: [
        {
            fill: true,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
				
				
            data: [a, b,c],
// Notice the borderColor 
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }
    ]		
    },
    options: { tooltips: {enabled: false},
    hover: {mode: null}
		
		
	}
    
	   
    
});	

myPieChart.update();
		
	}
	


function Update(a){
    // Create our XMLHttpRequest object

    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "../Information4.php";
	
    var vars = "NewData="+a;
	
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




	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	