Scout.configure({
    clientId: "e90f5a13-6bc1-4d8d-b3aa-0724a4212d39"
}).then(() => {
    // Perform Scout queries here
    
})


// Scout.titles.list().then(titles => console.log(titles));
Scout.players.search("Ninja", "epic", null, "fortnite")
  .then(search => Scout.players.get("fortnite", search.results[0].player.playerId))
  .then(ninja => console.log(ninja))