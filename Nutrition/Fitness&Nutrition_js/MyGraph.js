
function racking() {

	var weight = document.getElementById("weight");
	
if(weight.value =="")
	alert("Please enter a value for weight and verify the food you're entering before logging the value. ");
	
	else {

 var text = document.getElementById('calor');
	var text2 = document.getElementById('protein');
	var text3 = document.getElementById('carbs');
	var text4 = document.getElementById('fats');


	Graph2(text2.innerHTML,text4.innerHTML,text3.innerHTML,text.innerHTML );
	
	}
	
	function Graph2(a , b , c ,d ){
	
var ctx = document.getElementById('Tracking').getContext('2d');

var value1 = "0";
var value2 = "0";
var value3 = "0";
var value4 = "0";

value1+=a;
value2+=b;
value3+=c;
value4+=d;

var myChart = new Chart(ctx, {


    type: 'bar',label: 'Number of calories per day.',
	 tooltipTitleFontSize: 0,
    data: {
        labels: ['Proteins', 'Fats', 'Carbs ' ,'Calories '],
        datasets: [{
		 // label: 'Fats',
            data: [value1, value2, value3,value4],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 159, 64, 0.2)',
				'rgb(152,251,152)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 159, 64, 1)',
					'rgb(0,128,0)'
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
        },
legend: {
    display: false
  }		
    }
	
}) 
}
}