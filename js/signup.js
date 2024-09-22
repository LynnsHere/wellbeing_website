


$(document).ready(function() {

  $('#togglePw').click(function() {
    var type = $('#pw').attr('type') === 'password' ? 'text' : 'password';
    $('#pw').attr('type', type);

    var type = $('#cpw').attr('type') === 'password' ? 'text' : 'password';
    $('#cpw').attr('type', type);
    $(this).find('i').toggleClass('fa-eye fa-eye-slash');
  });
  

  $('#usrBtn').click(function() {
    var input = $('#usrname').val().trim();
    console.log(input);

    $.post('chk_usrname.php', {
      usrname: input
    }, function(data) {
      if (data.trim() == 'success') {
        $('#hidden_usrname').val(input);
        $('#usrname').prop('disabled', true);
        $('#usrBtn').prop('disabled', true).html('<i class="fa-solid fa-check"></i>');
        $('#err_usrname').text('');
        // $('#usrname').html('<input type="text" class="form-control" name="usrname" id="usrname" aria-label="Disabled input example" disabled>');
        $('#usrBtn').html('<i class="fa-solid fa-check"></i>');
        $('#usrChk').text('');
        $('#usrChk').addClass('text-success').removeClass('text-danger');
      } else {
        $('#usrChk').text(data);
        $('#usrChk').addClass('text-danger').removeClass('text-success');
      }
    });
  });

  $('#signup_form').on('submit', function(event) {
    event.preventDefault();

    var name = $('#name').val();
    var pw = $('#pw').val();
    var cpw = $('#cpw').val();
    var len_pw = pw.length;
    var name_pattern = /^[a-zA-Z ]+$/;
    var isValid = true;
    var hidden_usrname = $('#hidden_usrname').val();
    
    console.log(name);
    console.log(hidden_usrname);
    console.log(pw);

    if (!(name === '')) {
      if (name_pattern.test(name)) {
        $('#err_name').text('');
      } else {
        $('#err_name').text('Invalid name format.');
        isValid = false;
      }
    } else {
      $('#err_name').text('Required to fill your name.');
      isValid = false;
    }

    if (!(pw === '')) {
      if (len_pw < 8) {
        $('#err_pw').text('Password must be at least 8 characters long.');
        isValid = false;
      } else {
        $('#err_pw').text('');
      }
    } else {
      $('#err_pw').text('Required to fill your password.');
      isValid = false;
    }

    if (!(cpw === '')) {
      if (!(cpw === pw)) {
        $('#err_cpw').text('Confirmed password must be the same as password.');
        isValid = false;
      } else {
        $('#err_cpw').text('');
      }
    } else {
      $('#err_cpw').text('Required to fill confirmed password.');
      isValid = false;
    }

    if (!($('#usrChk').hasClass('text-success'))) {
      $('#err_usrname').text('You need to check your "Username".');
      isValid = false;
    } else {
      $('#err_usrname').text('');
    }

    if (isValid) {
      // this.submit();
      $.post('../api/signup_api.php',{name:name,hidden_usrname:hidden_usrname,pw:pw},function(data){
        if(data.trim()== 'put'){
          window.location.href = 'signin.php';
        }
      })
    }
  });
});


