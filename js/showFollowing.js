$(function() {
    $.ajax({
        url: "API/getFollowing.php",
        type: "POST",
        data: {
        },
        dataType: "json",
        success: function(data, status) {
            console.log("success")
            console.log(data)
        },
        complete: function(data, status) {
            console.log(data)
        }
    });
     
});