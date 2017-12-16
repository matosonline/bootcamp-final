 var url = 'https://templating-rickmatos.c9users.io/controllers/User_list.php';
 
 
 $.ajax({
            type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
            url         :  url, // the url where we want to POST
            dataType    : 'json' // what type of data do we expect back from the server
        }).done(function(data){
            
            console.log(data);
            //END - Configure and Execute ajax call.
            
        if(data.code === 200){
            $.each(data.data, function(index,row){
                
                $("#userList").append("<tr><td>"+row.Email+"</td><td>"+row.First_Name+"</td><td>"+row.Last_Name+"</td><td>"+row.Role_Name+"</td><td>"+row.City_Name+"</td></tr>");
                
            });
            
        }else{
            $("#loginErrorMessageInvalid").show();
        }
    });