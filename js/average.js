$(document).ready(function(){
    $.ajax({
        method: 'GET',
        url: '../api/average_api.php',
    }).done(function(data){
        // console.log(data);
        if(data.trim() == 'find'){
            $(".avg_result").html('');
        }
        else{
            $(".avg_result").html('<div class="alert alert-danger" role="alert">' + 'Your mental status is very low. Please call your personal assistant to care your mental health' + '</div>')
        }
    });
       
});
