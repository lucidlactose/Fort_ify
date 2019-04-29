// client id: e90f5a13-6bc1-4d8d-b3aa-0724a4212d39
// client secret: fdf14291909f5eb40478cc13ef96c231cee034b8ecafd38334f5d656666b710c

$(function(){
    //**********************************************************************
    //*******************_______NAVIGATION BAR_______***********************
    Scout.configure({
        clientId: "e90f5a13-6bc1-4d8d-b3aa-0724a4212d39"
    }).then(() => {
        // Perform Scout queries here
        
    })
    
    username = $(this).data("username");
    $("[name=search]").on("click", function() {
        // Scout.titles.list().then(titles => console.log(titles));
        window.location.href = "searchResults.php?username=" + username;
    })
     
});