
$(document).ready(function() {
  
  $('#togglePw').click(function() {
    var type = $('#pw').attr('type') === 'password' ? 'text' : 'password';
    $('#pw').attr('type', type);
    $(this).find('i').toggleClass('fa-eye fa-eye-slash');
  });

  $("#signin_form").on('submit', function(event) {
    event.preventDefault();

    var usrname = $('#usrname').val();
    var password = $('#pw').val();

    $.post('../api/signin_api.php', {
      usrname: usrname,
      password: password
    }, function(data) {
      if (data.trim() == 'success') {
        window.location.href = '../app/quote.php';
      } else {
        $('#err_msg').text(data);
      }
      console.log(data);
    });
  });
});
