<!DOCTYPE html>
<html>
	<head>
        <title> Fortnite Looker </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/armandostuffIdontwantinmine.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://sdk.scoutsdk.com/1.0.0/js/Scout.js"></script>
        <script type="text/javascript" src="js/homePage.js"></script>
        <script type="text/javascript" src="js/everyPage.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="771332740040-bst02ajh5o98uga1dk3e36sv30pjknuh.apps.googleusercontent.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    
	<body>
		
		<header>
			<div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">My Stats</a>
                <a href="#">Following</a>
                <a href="#">Followers</a>
                <a href="fortHome.php" onclick="signOut()">Sign Out</a>
            </div>
			<form class="navigationBar">
				<div id = "logo">
					<h3 style = "color:white;">Fort-ify</h3>
				</div>
				<button type = "button" id="ps4Tab" ><i class="fab fa-playstation"></i></button>
                <button type = "button" id="xbxTab" ><i class="fab fa-xbox"></i></button>
                <button type = "button" id="pcTab" ><i class="fab fa-windows"></i></button>
				<input type="text" placeholder="Enter your Epic Games username..." name="search" id = "searchQ">
				<button type="button" id ="searchButton"><i class="fa fa-search"></i></button>
				<nav>
					<a href id = "rankingsTab"src = "index.php">Rankings</a>
					<a href id = "newsTab" src = "index.php">News</a>
					<a href id = "streamingTab" src = "index.php">Streaming</a>
				</nav>
				<span id = "sideMenu" onclick="openNav()">&#9776;</span>
			</form>
		</header>
		<div id = "playerstats">
			<table id = "myStatsTable">
				<tr>
					<b id= "gamertag">Fduenez</b>
				</tr>
				<tr>
					<td><img src="img/player3.png"/><td>
					<td>
						<table id = "mystats">
							<tr>
								<td>K/D:</td>
								<td>1704/1409</td>
							</tr>
							<tr>
								<td>Wins:</td>
								<td>51/1460</td>
							</tr>
							<tr>
								<td>Alive:</td>
								<td> 79 hours</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<b style="margin-left: 500px; font-size: 50px;">Team stats</b>
		<div id= "everyonesStats">
			<div id = "percentage">
				<h1>Effectivness on team (%)<h1>
			</div>
			<div id = "squadTable">
				<table id = "teammateStat">
					<tr>
						<td>K/D:</td>
						<td>1704/1409</td>
					</tr>
					<tr>
						<td>Wins:</td>
						<td>51/1460</td>
					</tr>
					<tr>
						<td>Alive:</td>
						<td> 79 hours</td>
					</tr>
				</table>
			</div>
			<div id = "friendRanking">
				<h1>Friend ranking</h1>	
			</div>
		</div>
		<div id = "comparewithteammate">
			<b style="margin-left: 350px; font-size: 50px;">Compare with Teammate</b>
			<br>
			<h2 id= "searchteammate">Search: <input type="text" id = "compairFriendTag"> <button type="button" id="compairbutton">Enter</button><h2>
			
		</div>
			
</body>
<div class="g-signin2" style = "visibility:hidden"></div>
	
</html>
