// client id: e90f5a13-6bc1-4d8d-b3aa-0724a4212d39
// client secret: fdf14291909f5eb40478cc13ef96c231cee034b8ecafd38334f5d656666b710c

//**********************************************************************
//*******************_______NAVIGATION BAR_______***********************
 
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
    
function search() {
    username = $("[name=search]").val();
    if (username !== "") {
        username = username.split(" ").join("+");
        for (i=0; i<username.length; ++i) {
            if (username !== "+") {
                console.log(username);
                window.location.href = "searchResults.php?username=" + username;
            }    
        }
    }
}

$(function(){
    Scout.configure({
        clientId: "e90f5a13-6bc1-4d8d-b3aa-0724a4212d39"
    }).then(() => {
        // Perform Scout queries here
    });
    
    $("#searchButton").on("click", search);
    
});

$(document).on('keypress', function(e) {
    var keycode = event.keyCode || event.which;
    if (keycode == 13) {
        e.preventDefault();
        console.log("aspkdasiojd")
        search();
    }
});