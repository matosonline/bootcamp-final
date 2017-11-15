$(document).ready(function(){
    $("#loginErrorMessage").hide();
    $("#loginErrorMessageInvalid").hide();
    $("#logoutButton").hide();
});

$("#logInButton").click(function (){
   var loginEmail = $.trim( $("#staticEmail").val() );
   var loginPassword = $.trim( $("#inputPassword").val() );
   
   if(loginEmail.length > 0 && loginPassword.length > 0) {
        //send data
        $("loginErrorMessage").hide();

        var formData = {
            'email_info': loginEmail,
            'password_info': loginPassword
        };
       
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'controllers/login.php', // the url where we want to POST
            data        : formData, // our data object
            //dataType    : 'json', // what type of data do we expect back from the server
        }).done(function(data){
           console.log(data);
           response = JSON.parse(data);
           
          if(response.code === 200) {
              $("#loginModal").modal('hide');
              $("#loginModalButton").hide();
              $("#logoutButton").show();
              $("#loggedUserEmail").html(response.data);
              
            }else{
            $("#loginErrorMessageInvalid").show();
          }
          
        });
    }else {
    $("#loginErrorMessage").show();
   }
});



$("#logoutButton").click(function (){
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'views/logout.php', // the url where we want to POST
            // data        : formData, // our data object
            //dataType    : 'json', // what type of data do we expect back from the server
        });
});