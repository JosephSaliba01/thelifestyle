
var NewElements = new Array(999999);
var count =0;
function Add(){
	  
	  //salert(Object.Name);

var value = document.getElementById("activities");

var NewObject = {Name :"Lemon Juice", ProteinPerGram:"0.7", CarbPerGram:"0.2", FatPerGram:"0.7" , CaloriesPerGram:"0.9" , image :"https://www.foodiesfeed.com/wp-content/uploads/2020/05/suco-de-limao-com-slash-349x524.jpg"};


//https://www.foodiesfeed.com/wp-content/uploads/2020/05/suco-de-limao-com-slash-349x524.jpg


value.options[value.length] = new Option(NewObject.Name, NewObject.Name);
   
  
     //console.log(localStorage.getItem("Object"));
   
   //var x  =   sessionStorage.getItem("Object");
   
  // var w = JSON.parse(x);
 // alert(w.value);
 /*
  var option = document.createElement("option");
  option.text = NewObject.Name;
  x.add(option);
  */
   NewElements[count] = NewObject;   
   
   count++;
   

}

function Calculation() {
	
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


/*	
	 value.options[value.length] 
   = new Option('yourText', 'yourValue');

     */




     
	
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
	
	if(value.value == "Almonds"){
		
		calor.innerHTML = Math.round (weight.value *  Almonds.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Almonds.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Almonds.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Almonds.FatPerGram);
			
		image.src = "Fitness&Nutrition_img/almonds.jpg";
		
		 gram.innerHTML =  weight.value;
		 Graph(weight.value * Almonds.ProteinPerGram,weight.value *  Almonds.CarbPerGram, weight.value * Almonds.FatPerGram);
		
	}
	
	if(value.value == "Apple"){
		
		calor.innerHTML = Math.round (weight.value *  Apple.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Apple.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Apple.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Apple.FatPerGram);
			
		image.src = "Fitness&Nutrition_img/Apple.png";
		
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
		 
		 Graph(weight.value *Banana.ProteinPerGram, weight.value *Banana.CarbPerGram, weight.value * Banana.FatPerGram);
		
	}
	
	if(value.value == "Brocoli"){
		
		calor.innerHTML = Math.round (weight.value *  Brocoli.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Brocoli.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Brocoli.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Brocoli.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/Brocoli.png";
		 
		 Graph(weight.value *Brocoli.ProteinPerGram, weight.value *Brocoli.CarbPerGram, weight.value * Brocoli.FatPerGram);
		
	}
	
	if(value.value == "Butter"){
		
		calor.innerHTML = Math.round (weight.value *  Butter.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Butter.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Butter.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Butter.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/Butter.jpg";
		 
		 Graph(weight.value *Butter.ProteinPerGram, weight.value *Butter.CarbPerGram, weight.value * Butter.FatPerGram);
		
	}
	
	if(value.value == "Bacon"){
		
		calor.innerHTML = weight.value *  Bacon.CaloriesPerGram
		
		
		protein.innerHTML =  Math.round (weight.value * Bacon.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Bacon.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Bacon.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/bacon.jpg";
		 
		 Graph(weight.value *Bacon.ProteinPerGram, weight.value *Bacon.CarbPerGram, weight.value * Bacon.FatPerGram);
		
	}
	
	if(value.value == "Brown Rice"){
		
		calor.innerHTML = weight.value *  BrownRice.CaloriesPerGram
		
		
		protein.innerHTML =  Math.round (weight.value * BrownRice.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  BrownRice.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * BrownRice.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/BrownRice.jpg";
		 
		 Graph(weight.value *BrownRice.ProteinPerGram, weight.value *BrownRice.CarbPerGram, weight.value * BrownRice.FatPerGram);
		
	}
	
	
	if(value.value == "Basmati Rice"){
		
		calor.innerHTML = weight.value *  BasmatiRice.CaloriesPerGram
		
		
		protein.innerHTML =  Math.round (weight.value * BasmatiRice.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  BasmatiRice.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * BasmatiRice.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/BasmatiRice.jpg";
		 
		 Graph(weight.value *BasmatiRice.ProteinPerGram, weight.value *BasmatiRice.CarbPerGram, weight.value * BasmatiRice.FatPerGram);
		
	}
	
	if(value.value == "Brown Bread"){
		
		calor.innerHTML = weight.value *  BrownBread.CaloriesPerGram
		
		
		protein.innerHTML =  Math.round (weight.value * BrownBread.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  BrownBread.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * BrownBread.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/BrownBread.jpg";
		 
		 Graph(weight.value *BrownBread.ProteinPerGram, weight.value *BrownBread.CarbPerGram, weight.value * BrownBread.FatPerGram);
		
	}
	
	
	if(value.value == "Chicken"){
		
		calor.innerHTML = Math.round (weight.value *  Chicken.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Chicken.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Chicken.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Chicken.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/chicken.jpg";
		 
		 Graph(weight.value *Chicken.ProteinPerGram, weight.value *Chicken.CarbPerGram, weight.value * Chicken.FatPerGram);
		
	}
	
	if(value.value == "Milk"){
		
		calor.innerHTML = Math.round (weight.value *  Milk.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Milk.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Milk.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Milk.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/milk.jpeg";
		 
		 Graph(weight.value *Milk.ProteinPerGram, weight.value *Milk.CarbPerGram, weight.value * Milk.FatPerGram);
		
	}
	

	
	
	if(value.value == "Eggs"){
		
		calor.innerHTML = Math.round (weight.value *  Eggs.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Eggs.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Eggs.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Eggs.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/egg.png";
		 
		 Graph(weight.value *Eggs.ProteinPerGram, weight.value *Eggs.CarbPerGram, weight.value * Eggs.FatPerGram);
		
	}
	
	if(value.value == "Salmon"){
		
		calor.innerHTML = Math.round (weight.value *  Salmon.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Salmon.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Salmon.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Salmon.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/Salmon.jpg";
		 
		 Graph(weight.value *Salmon.ProteinPerGram, weight.value *Salmon.CarbPerGram, weight.value * Salmon.FatPerGram);
		
	}
	
	
	if(value.value == "Steak"){
		
		calor.innerHTML = Math.round (weight.value *  Steak.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Steak.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Steak.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Steak.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/Steak.jpg";
		 
		 Graph(weight.value *Steak.ProteinPerGram, weight.value *Steak.CarbPerGram, weight.value * Steak.FatPerGram);
		
	}
	
	if(value.value == "Tomatoe"){
		
		calor.innerHTML = Math.round (weight.value *  Tomato.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Tomato.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Tomato.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Tomato.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/tomato.jpg";
		 
		 Graph(weight.value *Tomato.ProteinPerGram, weight.value *Tomato.CarbPerGram, weight.value * Tomato.FatPerGram);
		
	}
	
	if(value.value == "White Rice"){
		
		calor.innerHTML = Math.round (weight.value *  WhiteRice.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * WhiteRice.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  WhiteRice.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * WhiteRice.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/WhiteRice.jpg";
		 
		 Graph(weight.value *WhiteRice.ProteinPerGram, weight.value *WhiteRice.CarbPerGram, weight.value * WhiteRice.FatPerGram);
		
	}
	
	if(value.value == "White Bread"){
		
		
		
		calor.innerHTML = Math.round (weight.value *  WhiteBread.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * WhiteBread.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  WhiteBread.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * WhiteBread.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/White-Bread.jpg";
		 
		 Graph(weight.value *WhiteBread.ProteinPerGram, weight.value *WhiteBread.CarbPerGram, weight.value * WhiteBread.FatPerGram);
		
	}
	
	
	if(value.value == "Olive oil"){
		
		
		calor.innerHTML = Math.round (weight.value *  Oliveoil.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * Oliveoil.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  Oliveoil.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * Oliveoil.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/Oliveoil.jpg";
		 
		 Graph(weight.value *Oliveoil.ProteinPerGram, weight.value *Oliveoil.CarbPerGram, weight.value * Oliveoil.FatPerGram);
		
	}
	
	if(value.value == "Peanut Butter"){
		
		
		calor.innerHTML = Math.round (weight.value *  PeanutButter.CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * PeanutButter.ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  PeanutButter.CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * PeanutButter.FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src ="Fitness&Nutrition_img/PeanutButter.jpg";
		 
		 Graph(weight.value *PeanutButter.ProteinPerGram, weight.value *PeanutButter.CarbPerGram, weight.value * PeanutButter.FatPerGram);
		
	}
	
	
	else {
		
		for(var i = 0; i < NewElements.length ;i++ ){
			if(value.value == NewElements[i].Name){
				
			
		calor.innerHTML = Math.round (weight.value *  NewElements[i].CaloriesPerGram);
		
		
		protein.innerHTML =  Math.round (weight.value * NewElements[i].ProteinPerGram);
		
		cabrs.innerHTML = Math.round (weight.value *  NewElements[i].CarbPerGram);
		
		fats.innerHTML =  Math.round (weight.value * NewElements[i].FatPerGram);
		
		
		 gram.innerHTML =  weight.value;
		 
		 	image.src =NewElements[i].image;
		 
		 Graph(weight.value *NewElements[i].ProteinPerGram, weight.value *NewElements[i].CarbPerGram, weight.value * NewElements[i].FatPerGram);			
				
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
	

	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	