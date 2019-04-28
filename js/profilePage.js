Scout.configure({
  clientId: "e90f5a13-6bc1-4d8d-b3aa-0724a4212d39"
}).then(() => {
  // Perform Scout queries here
    
})
    
// this should be an on Click to
// this is code that allows to subscrive to a player / follow it

function follow() {
  let subscription = await Scout.players.subscribe("fortnite", "AQUACAGRzjVHkjKvTIpbF3ibQPec", "*"))
  
  subscription.on("data", (player) => {
    console.log(player)
  })
}



function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}