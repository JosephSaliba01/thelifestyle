function Graph (a , b ,c ){
 var text = document.getElementById('p3');
	var text2 = document.getElementById('p4');
	var text3 = document.getElementById('p5');
	
var ctx = document.getElementById('Calories').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Bulk', 'Maintenance', 'Cut'],
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