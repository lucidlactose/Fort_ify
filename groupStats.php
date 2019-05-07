<!DOCTYPE html>
<html>
	<head>
        <title>Group Stats</title>
        <!--<link href="css/styles.css" rel="stylesheet" type="text/css"/>-->
        <link href="css/armandostuffIdontwantinmine.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://sdk.scoutsdk.com/1.0.0/js/Scout.js"></script>
        <script type="text/javascript" src="js/homePage.js"></script>
        <script type="text/javascript" src="js/everyPage.js"></script>
        <script type="text/javascript" src="js/groupStats.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="771332740040-bst02ajh5o98uga1dk3e36sv30pjknuh.apps.googleusercontent.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    
	<body>
		<header>
            <form class="navigationBar">
                <div id = "logo">
                    <h3 style = "color:white;">Fort-ify</h3>
                </div>
                <button type = "button" id="ps4Tab" ><i class="fab fa-playstation"></i></button>
                <button type = "button" id="xbxTab" ><i class="fab fa-xbox"></i></button>
                <button type = "button" id="pcTab" ><i class="fab fa-windows"></i></button>
                <input type="text" placeholder="Enter your Epic Games username..." data-username="{{result['username']}}" name="search" id = "searchQ">
                <button type="button" id ="searchButton"><i class="fa fa-search"></i></button>
                <nav>
                    <a href id = "rankingsTab"src = "index.php">Rankings</a>
                    <a href id = "newsTab" src = "index.php">News</a>
                    <a href id = "streamingTab" src = "index.php">Streaming</a>
                </nav>
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
            </form>
        </header>
		<div id = "playerstats">
			<table id = "myStatsTable">
				<tr>
					<b id= "gamertag">Fduenez</b>
				</tr>
				<tr>
					<td id="mystatimgtd"><img src="img/player3.png"/><td>
					<td>
						<div class="limiter1">
							<div class="wrap1">
								<div class="table1 ver1 m-b-110">
									<div class="table1-body js-pscroll">
										<table>
											<tbody>
												<tr>
													<td class="column11">K/D</td>
													<td class="column12">1704/1409</td>
												</tr>

												<tr>
													<td class="column11">Kills</td>
													<td class="column12">5073</td>
												</tr>
												<tr>
													<td class="column11">Win Rates:</td>
													<td class="column12">51/1460</td>
												</tr>
												<tr>
													<td class="column11">Top 1:</td>
													<td class="column12">3244</td>
												</tr>
												<tr>
													<td class="column11">Top 25:</td>
													<td class="column12">1704/1409</td>
												</tr>
												<tr>
													<td class="column11">Players outlived</td>
													<td class="column12">1704/1409</td>
												</tr>
												<tr>
													<td class="column11">Time played:</td>
													<td class="column12">1704/1409</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<b style="margin-left: 500px; font-size: 50px;">Team stats</b>
		<div id= "everyonesStats">
			<div id = "killsDiv">
				<h1>Rank by K/D</h1>
				<div class="limiter2">
					<div class="wrap2">
						<div class="table2 ver1 m-b-110">
							<div class="table2-body js-pscroll">
								<table>
									<tbody>
										<tr>
											<td class="column21">K/D</td>
											<td class="column22">1704/1409</td>
										</tr>

										<tr>
											<td class="column21">Kills</td>
											<td class="column22">5073</td>
										</tr>
										<tr>
											<td class="column21">Win Rates:</td>
											<td class="column22">51/1460</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div id="piechart1"></div>
				</div>
			</div>

			<div id = "topOneDiv">
				<h1>Ranking by Top 1 </h1>
				<div class="limiter3">
					<div class="wrap3">
						<div class="table3 ver1 m-b-110">
							<div class="table3-body js-pscroll">
								<table>
									<tbody>
										<tr>
											<td class="column31">K/D</td>
											<td class="column32">1704/1409</td>
										</tr>

										<tr>
											<td class="column31">Kills</td>
											<td class="column32">5073</td>
										</tr>
										<tr>
											<td class="column31">Win Rates:</td>
											<td class="column32">51/1460</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div id="piechart2"></div>
				</div>
			</div>
			
			<div id = "kdDiv">
				<h1>Rank by K/D</h1>
				<div class="limiter4">
					<div class="wrap4">
						<div class="table4 ver1 m-b-110">
							<div class="table4-body js-pscroll">
								<table>
									<tbody>
										<tr>
											<td class="column41">K/D</td>
											<td class="column42">1704/1409</td>
										</tr>

										<tr>
											<td class="column41">Kills</td>
											<td class="column42">5073</td>
										</tr>
										<tr>
											<td class="column41">Win Rates:</td>
											<td class="column42">51/1460</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div id="piechart3"></div>
				</div>
			</div>
			<div id = "comparewithteammate">
				<b style="margin-left: 350px; font-size: 50px;">Compare with Teammate</b>
				<br>
				<h2 id= "searchteammate">Search: <input type="text" id = "compairFriendTag"> <button type="button" id="compairbutton">Enter</button><h2>
				
			</div>	
		</div>
		
	</body>
	<div class="g-signin2" style = "visibility:hidden"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	// Load google charts
//GET THE FIRST PIECHART (PIECHART1)
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
</script>

	
</html>
