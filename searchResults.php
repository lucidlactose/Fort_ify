<!DOCTYPE html>
<html>

	<head>
        <title> Player </title>
        <!--our stylesheets-->
        <link href="css/searchResults.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <!--someone else crud-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://sdk.scoutsdk.com/1.0.0/js/Scout.js"></script>
        <!--our webpage javascript-->
        <script type="text/javascript" src="js/everyPage.js"></script>
        <script type="text/javascript" src="js/searchResultsPage.js"></script>
        
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="771332740040-bst02ajh5o98uga1dk3e36sv30pjknuh.apps.googleusercontent.com">
    </head>
    
	<body>
		<header>
		    <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">My Stats</a>
                <a href="#">Following</a>
                <a href="#">Followers</a>
                <a href="#">Sign Out</a>
            </div>
            <form class="navigationBar">
                <div id = "logo">
                    <h3 style = "color:white;">Fort-ify</h3>
                </div>
                <button type = "button" id="ps4Tab" >PS4</button>
                <button type = "button" id="xbxTab" >XBX</button>
                <button type = "button" id="pcTab" >PC</button>
                <input type="text" placeholder="Enter your Epic Games username..." data-username="{{result['username']}}" name="search" id = "searchQ">
                <button type="button" id ="searchButton"><i class="fa fa-search"></i></button>
                <nav>
                    <a href id = "rankingsTab"src = "index.php">Rankings</a>
                    <a href id = "newsTab" src = "index.php">News</a>
                    <a href id = "streamingTab" src = "index.php">Streaming</a>
                    <a href id = "faqTab" src = "index.php">FAQ</a>
                </nav>
                <span id = "sideMenu" onclick="openNav()">&#9776;</span>

            </form>
        </header>
        
	
		<div id = "playerstats">
		    <div>
		        <div id="profilePic"> <img src="#" alt="profilePic"> </div>
		        <div id="playerName"> playerName </div>
		        <button id="follow" name="follow"> <img src="img/followImg.png" alt="+"> </button>
		        <button id="refresh">  <img src="img/refreshImg.png" alt="refresh"> </button>
		    </div>
		    
		    <div id="stats">
		        <div id="stat"> wins:    <span id="wins"></span> </div>
		        <div id="stat"> score:   <span id="score"></span> </div>
		        <div id="stat"> winrate: <span id="kd"></span> </div>
		        <div id="stat"> kills:   <span id="kills"></span> </div>
		        <div id="stat"> K/D:     <span id="kd"></span> </div>
		    </div>
		</div>
			
</body>
		
</html>
