
$(document).ready(function() {

    $.ajax({
          url: '../api/accinfo_api.php',
          method: 'GET',
          datatype: 'json',
          success: function(data) {
              data = JSON.parse(data);
              $('#namedata').text(data.name);
                  console.log(data.name)
              $('#usrnamedata').text(data.username);
                  console.log(data.username)
              $('#datedata').text(data.date);
                  console.log(data.date)
          },
      });
         
    $('#passwordchk').click(function(event) {
  
      var password = $('#password').val();
      console.log(password);
  
      if(!(password === '')){
        $.post('chk_password.php',{password: password}, function(data){
          console.log(data);
          if(data.trim() == 1){
            $('#password').addClass('border-success').removeClass('border-info').removeClass('border-danger').prop('disabled',true);
            $('#passwordchk').addClass('btn-success').removeClass('btn-info').removeClass('btn-danger').html('<div class=""><i class="fa-solid fa-check"></i></div>').prop('disabled',true);
            $('#accdel').prop('disabled',false);
          }
          else{
            $('#password').addClass('border-danger').removeClass('border-info').attr('placeholder', 'wrong password! Try again.').val("");
            $('#passwordchk').addClass('btn-danger').removeClass('btn-info');
          }
          
        })
      } else{
        $('#password').addClass('border-danger').removeClass('border-info').attr('placeholder', 'Enter password here!');
        $('#passwordchk').addClass('btn-danger').removeClass('btn-info');
      }
      
    });
  
    $("#accdel").click(function(){
      $.post("../api/delacc_api.php", function(response){
        if(response.trim() == 1) {
            window.location.href = "signin.php";
        } else {
            alert("Sorry! we can't delete your account rightnow.");
        }
      });
    });
  
  });
  
  document.addEventListener("keydown", e => {
          console.log(e);
          if(e.key.toLowerCase() === "n" && e.altKey){
              window.location.href = '../app/quote.php';
          }
          else if(e.key.toLowerCase() === "p" && e.altKey){
              window.location.href = '../app/aboutus.php';
          }
      })
        
  