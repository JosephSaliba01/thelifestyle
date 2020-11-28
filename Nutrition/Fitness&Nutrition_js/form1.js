function CaloricIntake (){
	
	var age = document.getElementById('age').value;
	
	var height = document.getElementById('height').value;
	var weight = document.getElementById('weight').value;
	
	
	
	var gender;
	
	
	if (document.getElementById('male').checked) {
gender = document.getElementById('male').value;
}


if (document.getElementById('female').checked) {
gender = document.getElementById('female').value;
}

var LevelOfActivity = document.getElementById('activities').value;
	
	
	var Level;
	
         if (LevelOfActivity == "Sedentary"){
			   Level = 1.2; 
		 }
		  else if(LevelOfActivity == "Light"){
			   Level = 1.375; 
		   }
		   
		  else if(LevelOfActivity == "Average"){
			   Level = 1.55; 
		   }
		   
		   else if(LevelOfActivity == "High"){
			   Level = 1.725; 
		   }
		   
		   else if (LevelOfActivity == "Intense"){
			   Level = 1.9; 
		   }


var BMR;

if(gender == "male" ) {
	BMR  = Math.round((88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age))* Level);
	
}

if(gender == "female" )
	BMR  = Math.round((447.593 + (9.247 * weight) + (3.098  * height) - (4.330  * age)*Level));



var s = "The age is " + age + " the height is " + height  + " the weight is " + weight  + " the gender is " + gender  +" the level of activity is " + LevelOfActivity;
	
	var calories;
	
	var text = document.getElementById('p3');
	var text2 = document.getElementById('p4');
	var text3 = document.getElementById('p5');
	
	var surplus =Math.round(1.07*BMR) ;
	var deficit = Math.round(0.9* BMR);
	
	var surplus2 = Math.round(surplus - BMR);
	
	var deficit2 = Math.round (BMR - 0.9* BMR);
	
	
	text.innerHTML = "Your basic calories intake  is " + BMR +" calories a day.";
	text2.innerHTML = "If you want to gain muscle on lean bulk you can go with  " + surplus + " calories with a " +  surplus2 + " calories surplus.";
	text3.innerHTML = "If you want to lose weight  you can go with " + deficit +" calories  with a " +  deficit2  + " calories deficit.";
	

	Graph(BMR,surplus,deficit);
/*

Men BMR = 88.362 + (13.397 x weight in kg) + (4.799 x height in cm) - (5.677 x age in years)
Women BMR = 447.593 + (9.247 x weight in kg) + (3.098 x height in cm) - (4.330 x age in years)


*/
	
}


function Graph (a , b ,c ){
	
	
 var text = document.getElementById('p3');
	var text2 = document.getElementById('p4');
	var text3 = document.getElementById('p5');
	
var ctx = document.getElementById('Calories').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Maintenance', 'Bulk', 'Cut'],
        datasets: [{
            label: 'Number of calories per day.',
            data: [a, b, c],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


}

