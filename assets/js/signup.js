
//Sign Up
var url = '../controllers/User_signup.php';

$(document).on('click','#btn-save',function(e) {
    var data = $("#signupForm").serialize();

    $.ajax({
        data: data,
        type: "POST",
        url: url,
        success: function(data){
            alert("New user added");
        }
    });
});