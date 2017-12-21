 var url = 'https://holycrapteamproject-rickmatos.c9users.io/controllers/candidate.php?current_user=true';

$(document).ready(function(e) {
    $('#btn-qst').click(function() {
        var question = $('#question').val();
        var answer1 = $('#answer1').val();
        var answer2 = $('#answer2').val();
        
        $.ajax({
            type    : 'POST',
            data    : {question:question, answer1:answer1, answer2:answer2},
            url     : url,
            success : function(result) {
                //display success message on form
                $('#alert').show();
                //and print result in span id:show
                $('#show').html(result);
            }
        })
    });
});

