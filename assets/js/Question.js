 var url = 'https://holycrapteamproject-rickmatos.c9users.io/controllers/Question_list.php?current_user=true';
 
 
 $.ajax({
            type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
            url         :  url, // the url where we want to POST
            dataType    : 'json', // what type of data do we expect back from the server
            data        : data,
            success     : function(data) {
                $("#questionList").html(
                    "Additional Question: " + data["Question"] + " Answer1: " + data["Answer1"] + "Answer2: " + data["Answer2"]
            )}
 });