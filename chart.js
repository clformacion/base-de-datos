google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

	var chartData_json = document.getElementById('chartinfo').value;

	let obj = JSON.parse(chartData_json) ; 
	let jsonData = obj;
	var chartData = [];
	
	// Add Chart data
   	var chartData = [
	  ['Ciudad','Total Personal',{ role: 'annotation'}],
	];

    for (var key in obj) {
	  	if (obj.hasOwnProperty(key)) {
		    var val = obj[key];

		    var city = val.ciudad;
		    var totalusers = Number(val.totalusers);

		    // Add to Array
		    chartData.push([city,totalusers,totalusers]);
		    
	  	}
	} 

	var data = google.visualization.arrayToDataTable(chartData);

	// Options 
	var options = {
		title:'Reporte por ciudad',
		colors: ['#4473c5']
	};

	// Initialize 
	var chart = new google.visualization.ColumnChart(document.getElementById('ciudadChart'));
	chart.draw(data, options);
	
}