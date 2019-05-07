<!DOCTYPE html>
<html lang="en">
	<head>
        <title> Player </title>
        <!--<meta charset="utf-8">-->
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
        
        <div class= "player-box">
		    <div class="player-specifics">
		        <div id="profile-pic"> <img src="#" alt="profilePic"> </div>
		        <div id="profile-name"> playerName </div>
		        <button id="follow-button" name="follow"> <img src="img/followImg.png" alt="+"> </button>
		        <button id="refresh-button">  <img src="img/refreshImg.png" alt="refresh"> </button>
		    </div>
		    
		    <div class="stats">
	            <span id="stat-header">Tags: </span>
	            <span id="stat"> <button> BBC     </button> </span>
		        <!--<div id="stat"> <button> score    </button> </div>-->
                <span id="stat"> <button> HARDCORE    </button> </span>
		        <span id="stat"> <button> BLONDE  </button> </span>   
		    </div>
		    
		    <div class="stats">
	            <span id="stat-header">Stats: </span>
	            <span id="stat"> <button> WINS     </button> </span>
                <span id="stat"> <button> SCORE    </button> </span>
		        <span id="stat"> <button> WINRATE  </button> </span>
		        <span id="stat"> <button> KILLS    </button> </span>
		        <span id="stat"> <button> K/D      </button> </span>        
		    </div>
		    
	        <div class="current-stat">
		        <div id="wins"> Here are my amount of wins. Maybe you can help increase it ;) </div>
		        <div id="score"> Here's my score: </div>
		        <div id="kd"> My k/d... ik im not that good... maybe... you can help ;> </div>
		        <div id="matchesPlayed"> I wish could play more.... with youuu </div>
		        <div id="kills"> kills: </div>
	        </div>    
		</div>
			
</body>
<div class="g-signin2" style = "visibility:hidden"></div>

</html>
