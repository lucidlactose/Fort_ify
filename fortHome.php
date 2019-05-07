<!-- <?php

//     $url = "https://localhost/searchResults.php";
//     $queryString = http_build_query("username"=>username);

// ?> 
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Fort-ify</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://sdk.scoutsdk.com/1.0.0/js/Scout.js"></script>
        <script type="text/javascript" src="js/everyPage.js"></script>
        <script type="text/javascript" src="js/profilePage.js"></script>
        <script type="text/javascript" src="js/homePage.js"></script>
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
            <!--***********The whole table div*********** -->
    		<div id = "tables">
    			<!--********** Global rank Table************ -->
    			<div id = "globalRank">
    				<br>
    				<table id = "globalTable">
    					<tr>
    						<b id= "sectionTitle">Global Stats</b>
    					</tr>
    					<tr>
    						<th>Username</th>
    						<th>Wins</th>
    					</tr>
    					<tr id = "globalStats">
    						<td>fduenez</td>
    						<td>21</td>
    					</tr>
    				</table>
    				<br>
    			
    			</div>
    			<!--********** xbox rank Table************ -->
    			<div id = "xboxRank">
    				<br>
    				<table id = "xboxTable">
    					<tr>
    						<b id= "sectionTitle">Xbox Stats</b>
    					</tr>
    					<tr>
    						<th>Username</th>
    						<th>Wins</th>
    					</tr>
    					<tr id = "xboxStats">
    						<td>fduenez</td>
    						<td>21</td>
    					</tr>
    				</table>
    				<br>
    			
    			</div>
    			<!--********** ps4 rank Table************ -->
    			<div id = "ps4Rank">
    				<br>
    				<table id = "ps4Table">
    					<tr>
    						<b id= "sectionTitle">PS4 Stats</b>
    					</tr>
    					<tr>
    						<th>Username</th>
    						<th>Wins</th>
    					</tr>
    					<tr id = "ps4Stats">
    						<td>fduenez </td>
    						<td>21</td>
    					</tr>
    				</table>
    				<br>
    			</div>
    			<!--********** pc rank Table************ -->
    			<div id = "pcRank">
    				<br>
    				<table  id = "pcTable">
    					<tr>
    						<b id= "sectionTitle">PC Stats</b>
    					</tr>
    					<tr>
    						<th>Username</th>
    						<th>Wins</th>
    					</tr>
    					<tr id = "pcStats ">
    						<td>fduenez </td>
    						<td>21</td> 
    						
    					</tr>
    				</table>
    				<br>
    			</div>
    		</div>

        </body>
        
</html>
