$(function() {
    Scout.players.search("Ninja", "epic", null, "fortnite")
        .then(search => Scout.players.get("fortnite", search.results[0].player.playerId))
        .then(ninja => console.log(ninja))
});