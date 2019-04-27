// client id: e90f5a13-6bc1-4d8d-b3aa-0724a4212d39
// client secret: fdf14291909f5eb40478cc13ef96c231cee034b8ecafd38334f5d656666b710c

Scout.configure({
    clientId: "e90f5a13-6bc1-4d8d-b3aa-0724a4212d39"
}).then(() => {
    // Perform Scout queries here
    
})


// Scout.titles.list().then(titles => console.log(titles));
Scout.players.search("Ninja", "epic", null, "fortnite").then(results => {
      console.log(results)
    })

$(function(){
    //**********************************************************************
    //*******************_______NAVIGATION BAR_______***********************
    var type = "getPCPlayer.php";
    $("#ps4Tab").on("click", function(){
        type = "getPS4Player.php";
        // console.log(type);
    });
    $("#xbxTab").on("click", function(){
        type = "getXBXPlayer.php";
        // console.log(type);
    });
    $("#pcTab").on("click", function(){
        type = "getPCPlayer.php";
        // console.log(type);
    });
    
    // ****************_______search ajax call_______********************
    // $.ajax({
    //     type:"GET" ,
    //     url: "api/" + console,
    //     dataType: "json",
    //     data:{
    //         "search": $("#searchQ").val()
    //     },
    //     success:function(data, status){
            
    //     }
    // });
    
});