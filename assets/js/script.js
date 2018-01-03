//Set the initial state of the website
$(document).ready(function(){
    $("#loginErrorMessage").hide();
    $("#loginErrorMessageInvalid").hide();
    
    if(!loggedIn){
       $("#logoutButton").hide();
    }else{
        $("#loginModalButton").hide();
    }

 var url = '../controllers/Role_read.php';

 $.ajax({
            type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
            url         :  url, // the url where we want to POST
            dataType    : 'json' // what type of data do we expect back from the server
        }).done(function(data){
            //END - Configure and Execute ajax call.
        if(data.code === 200){
            $.each(data.data, function(index,row){
                $("#Role_Id").append('<option value="' + row["id"] + '">' + row["Role_Name"] + '</option>');
            });
        }else{
            $("#loginErrorMessageInvalid").show();
        }
    });
});

//click event for the login button (the one inside the modal).
$("#loginButton").click(function (){
    //Validated the information inside the form's inputs.
    var loginEmail = $.trim( $("#staticEmail").val() );
    var loginPassword = $.trim( $("#inputPassword").val() );
    
    if(loginEmail.length > 0 && loginPassword.length > 0){
        //END - Validated the information inside the form's inputs.
        
        var formData = {
            'email_info': loginEmail,
            'password_info': loginPassword
        };
        
        var url = '../controllers/login.php';
        
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : url, // the url where we want to POST
            data        : formData // our data object
            //dataType    : 'json' // what type of data do we expect back from the server
        }).done(function(data){
            //console.log(data);
            //END - Configure and Execute ajax call.
            
            response = JSON.parse(data);
            
            if(response.code === 200){
                $("#loginModal").modal('hide');
                $("#loginModalButton").hide();
                $("#logoutButton").show();
                $("#loggedUserEmail").html(response.data);
            }else{
                $("#loginErrorMessageInvalid").show();
            }
        });
    }else{
        $("#loginErrorMessage").show();
    }
});


//Sign Up

$(document).on('click','#btn-save',function(e) {
    var data = $("#signupForm").serialize();
    var url = '../controllers/User_signup.php';
    $.ajax({
        data: data,
        type: "POST",
        url: url
    }).done( function(){ alert("blah");
    });
});