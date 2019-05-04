// client id: e90f5a13-6bc1-4d8d-b3aa-0724a4212d39
// client secret: fdf14291909f5eb40478cc13ef96c231cee034b8ecafd38334f5d656666b710c

//**********************************************************************
//*******************_______NAVIGATION BAR_______***********************
    

$(function(){
    Scout.configure({
        clientId: "e90f5a13-6bc1-4d8d-b3aa-0724a4212d39"
    }).then(() => {
        // Perform Scout queries here
        
    });
    
    $("#searchButton").on("click", function() {
        username = $("[name=search]").val();
        if (username !== "") {
            username = username.split(" ").join("+");
            for (i=0; i<username.length; ++i) {
                if (username !== "+") {
                    console.log(username);
                    // Scout.titles.list().then(titles => console.log(titles));
                    window.location.href = "searchResults.php?username=" + username;
                }    
            }
        }
        
    });
    
});

$(document).on('keypress', function(e) {
    var keycode = event.keyCode || event.which;
    if(keycode == 13) {
        alert('You pressed enter!');
    }
});