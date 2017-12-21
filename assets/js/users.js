 var url = 'https://holycrapteamproject-rickmatos.c9users.io/controllers/Question_list.php?current_user=true';
 
 
 $.ajax({
            type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
            url         :  url // the url where we want to POST
            //dataType    : 'json' // what type of data do we expect back from the server
        }).done(function(data){
        
        if(data.code === 200){
            $.each(data.data, function(index,row){
    
            document.getElementById("#questionList").innerHTML = data;
                
            });
        }else{
            $("#loginErrorMessageInvalid").show();
        }
    });