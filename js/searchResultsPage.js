/*
    Using the search function
    
            Scout.players.search(playername, plaform, console, game);

    1. playername is passed as the string of the player you want to find
    2. platform: "epic", "psn", "xbl"
    3. console: "ps4", "xb1"
    4. game: "fortnite", "csgo", "r6seige" 
    
    if not using platform="epic" & console=null, duplicates appear, sometimes in order,
    sometimes not, idk why. Some of them are in the same exact random order every time.
    
    
    details platform can be null but use "epic"
        If the user has an epic games account, it will only ever say epic.
        Ninja, for example, shows up on every console, but the json platform always says "epic"
    
        If we leave console null and search for platform, it will sort the platform first, then
        by epic games. This means the search sucks because Nashville-Ninja comes up twice before
        Ninja
    
    if you have platform without console, it sorts that platform first but doesn't shorten the list
    console can show duplicates because the console name is constant, but they may use several
        usernames for fortnite 
    
    console without platform is weird, don't do that
    I used it once and idk what it gave me but the platform and console was wrong
    
    
    ************************ THE REAL PERSON IS IN PLAYER NOT PERSONA ******************
    ************************************ PERSONA IS FOR CONSOLE ONLY  ******************
    
*/
var myId;
$(function() {
    username = GetParameterValues('username').split("+").join(" ");

    // if the search found something, then the showMeta will show text and then
    // it will fill in the stats later
    Scout.players.search(username, "epic", null, "fortnite")
        // .then(results => console.log(results))
        .then(results => showMeta(results))

    function showMeta(results) {
        console.log(results)
        if (results.length == 0) {
            
        }
        results = results.results[0];
        console.log(results)
        $("#profile-pic").attr("src", results.persona.pictureUrl);
        $("#profile-name").html(results.player.handle);
        $("#profile-id").html(results.player.playerId);
        
        Scout.players.search(username, "epic", null, "fortnite")
            .then(search => Scout.players.get("fortnite", search.results[0].player.playerId))
            .then(results => showStats(results))
    }
    
    function showStats(results) {
        $("#kills").html("Kills: " + results.stats[0].displayValue);
        $("#score").html("Score: " + results.stats[1].displayValue);
        $("#matchesPlayed").html("Matches played: " + results.stats[3].displayValue);
        $("#wins").html("Wins: " + results.stats[5].displayValue);
        $("#kd").html("K/D: " + results.stats[10].displayValue);
        
        console.log(results)
    }
    
    function GetParameterValues(parameter) {
        url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');  
        for (var i=0; i < url.length; i++) {
            urlParameter = url[i].split('=');
            if (urlParameter[0] === parameter) {
                return urlParameter[1];
            }  
        }  
    }
    
    
    $("#follow-button").on("click", function() {

        collectData();
        
        $.ajax({
            url: "API/followPlayer.php",
            type: "POST",
            data: {
                "me" : profile.getId(), //somethign
                "them": $("#profile-id").html()
            },
            dataType: "text",
            success: function(data, status) {
                console.log("success")
                console.log(data)
            },
            complete: function(data, status) {
                console.log(data)
            }
        });
    });
    
    
    
    
    
    
});
function collectData(){
    // var auth2 = gapi.auth2.getAuthInstance();
    if(gapi.auth2.init().isSignedIn().get()){
        var profile = auth2.getCurrentUser.get().getBasicProfile();
        console.log("ID: " + profile.getId());
        myId = profile.getId();
    }    
    
}
function signOut() {
    
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
    auth2.disconnect();
}