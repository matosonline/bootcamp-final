 var url = 'https://holycrapteamproject-rickmatos.c9users.io//controllers/Candidate_list.php';
 
 
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
    
    //  var url = 'https://holycrapteamproject-rickmatos.c9users.io//controllers/Question_list.php';
    //    $.ajax({
    //         type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
    //         url         :  url, // the url where we want to POST
    //         dataType    : 'json' // what type of data do we expect back from the server
    //     }).done(function(data){
            
    //         console.log(data);
    //         //END - Configure and Execute ajax call.
            
    //     if(data.code === 200){
    //         $.each(data.data, function(index,row){
                
    //             $("#userList").append("<tr><td>"+row.Question+"</td><td>"+row.Answer1+<button type="button" class="btn btn-primary" id="btn_1">Primary</button>"</td><td>"+row.Answer2+<button type="button" class="btn btn-primary" id="btn_2">Primary</button>"</td></tr>>");
                
    //         });
            
    //     }
    // });