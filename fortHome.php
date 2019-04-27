<!DOCTYPE html>
<html>
    <head>
        <title> Fortnite Looker </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />

        
    </head>
    <body>
        
        <header>
            <form class="navigationBar">
                <div id = "logo">
                    <h3 style = "color:white;">Fort-ify</h3>
                </div>
                <button type = "button" id="ps4Tab" >PS4</button>
                <button type = "button" id="xbxTab" >XBX</button>
                <button type = "button" id="pcTab" >PC</button>
                <input type="text" placeholder="Enter your Epic Games username..." name="search" id = "searchQ">
                <button type="button" id ="searchButton"><i class="fa fa-search"></i></button>
                <nav>
                    <a href id = "rankingsTab"src = "index.php">Rankings</a>
                    <a href id = "newsTab" src = "index.php">News</a>
                    <a href id = "streamingTab" src = "index.php">Streaming</a>
                    <a href id = "faqTab" src = "index.php">FAQ</a>
                </nav>
            </form>
        </header>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript">
        
        $(function(){
                    
            //**********************************************************************
            //*******************_______NAVIGATION BAR_______***********************
            var type = "getPCPlayer.php";
            $("#ps4Tab").on("click",function(){
                type = "getPS4Player.php";
                // console.log(type);
            });
            $("#xbxTab").on("click",function(){
                type = "getXBXPlayer.php";
                // console.log(type);
            });
            $("#pcTab").on("click",function(){
                type = "getPCPlayer.php";
                // console.log(type);
            });
            
            // ****************_______search ajax call_______********************
            $.ajax({
                type:"GET" ,
                url: "api/" + console,
                dataType: "json",
                data:{
                    "search": $("#searchQ").val()
                },
                success:function(data, status){
                    
                }
            });
            
            
            
        });
        
        

        </script>

    </body>
</html>