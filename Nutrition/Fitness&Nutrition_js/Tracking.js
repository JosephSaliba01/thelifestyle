
function tracking {

Chart.defaults.global.legend.display = false;


 var text = document.getElementById('p3');
	var text2 = document.getElementById('p4');
	var text3 = document.getElementById('p5');
	
var ctx = document.getElementById('Tracking').getContext('2d');
var myChart = new Chart(ctx, {


    type: 'bar',label: 'Number of calories per day.',
	 tooltipTitleFontSize: 0,
    data: {
        labels: ['Proteins', 'Fats', 'Carbs ' ,'Calories '],
        datasets: [{
		 // label: 'Fats',
            data: [150, 300, 200,2500],
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
        }	
    }
});

}