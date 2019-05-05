/*
    Using the search function
    
            Scout.players.search(playername, plaform, console, game);

    1. playername is passed as the string of the player you want to find
    2. platform: "epic", "psn", "xbl"
    3. console: "ps4", "xb1")
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


$(function() {
    console.log("search: ")
    // Scout.players.search("Ninja", "psn", "ps4", "fortnite")
        // .then(search => Scout.players.get("fortnite", search.results[0].player.playerId))
        // .then(ninja => console.log(ninja))
    // Scout.titles.list().then(titles => console.log(titles))

    // Scout.players.search("Ninja", "psn", null, "fortnite")
    //     .then(search => Scout.players.get("fortnite", search.results[0].player.playerId))
    //     .then(ninja => console.log(ninja))
    
});

