$(document).ready( function(){
    $( document ).on('click','.ans-btn', function(event) {
        console.log(event);
        
        var data = 
        
        /*$.ajax({
            data: data,
            type: "POST",
            url: url,
            success: function(data){
                console.log("so far so good");
            }   
        });*/
    });
});

 var qlurl = 'https://holycrapteamproject-rickmatos.c9users.io/controllers/Question_list.php?current_user=true';
 
 
    $.ajax({
            type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
            url         :  qlurl, // the url where we want to POST
            dataType    : 'json' // what type of data do we expect back from the server
        }).done(function(data){
            
            console.log(data);
            //END - Configure and Execute ajax call.
            
        if(data.code === 200){
            $.each(data.data, function(index,row){
                
                $("#questionList").append('<tr><td>'+row.Question+'</td><td><button type="button" class="btn btn-primary ans-btn" data-qid="'+row.Q_id+'" data-aid="'+row.Aid1+'">Vote for: '+row.Answer1+'</button></td> <td><button type="button" class="btn btn-primary ans-btn" data-qid="'+row.Q_id+'" data-aid="'+row.Aid2+'">Vote for: '+row.Answer2+'</button></td></tr>');
                
            });
            
        }else{
            $("#loginErrorMessageInvalid").show();
        }
    });
    

    
