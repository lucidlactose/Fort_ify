	// Load google charts
//GET THE FIRST PIECHART (PIECHART1)

$(function() {
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart1);
    
    // Draw the chart and set the chart values
    function drawChart1() {
    	var data = google.visualization.arrayToDataTable([
    	['Task', 'Hours per Day'],
    	['Team', 8],
    	['You', 2]
    	]);
    
    	// Optional; add a title and set the width and height of the chart
    	var options = {'title':'My Stats vs My Followers', 'width':300, 'height':300,backgroundColor: 'transparent',is3D: true};
    
    	// Display the chart inside the <div> element with id="piechart"
    	var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
    	chart.draw(data, options);
    }
    
    //GET THE SECOND PIECHART (PIECHART2)
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart2);
    function drawChart2() {
    	var data = google.visualization.arrayToDataTable([
    	['Task', 'Hours per Day'],
    	['Team', 8],
    	['You', 2]
    	]);
    
    	// Optional; add a title and set the width and height of the chart
    	var options = {'title':'My Stats vs My Followers', 'width':300, 'height':300,backgroundColor: 'transparent',is3D: true};
    
    	// Display the chart inside the <div> element with id="piechart"
    	var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
    	chart.draw(data, options);
    }
    
    //GET THE SECOND PIECHART (PIECHART3)
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart3);
    function drawChart3() {
    	var data = google.visualization.arrayToDataTable([
    	['Task', 'Hours per Day'],
    	['Team', 8],
    	['You', 2]
    	]);
    
    	// Optional; add a title and set the width and height of the chart
    	var options = {'title':'My Stats vs My Followers', 'width':300, 'height':300,backgroundColor: 'transparent',is3D: true};
    
    	// Display the chart inside the <div> element with id="piechart"
    	var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
    	chart.draw(data, options);
    }
});