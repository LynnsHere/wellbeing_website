$(document).ready(function() {
    $('#signOutLink').on('click', function(e) {
        e.preventDefault();
        $('#signoutpopup').modal('show');
    });

    $('#confirmSignOut').on('click', function() {
        window.location.href = 'signout.php';
    });
});