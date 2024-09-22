<?php
    session_start();
    require_once('../api/sessionlock.php');    
    include('navhome.php');
    // include('avg_test.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/012d22a369.js" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/average.js"></script>
    <link rel="stylesheet" href="../css/userprofile.css">
  </head>
  <body>
    <div class="padding"></div>




    <div class="container">

    
    <div class="row justify-content-center text-center">
        <div class="col-11 col-md-9 col-lg-6">
            <div class="avg_result">

            </div>
        </div>
    </div>
    
      <div class="row justify-content-center">
        <div class="profilebox border col-10 col-md-7 col-lg-4 d-flex flex-column px-3 pt-4 pb-3">
          <div class="row mb-4 text-center">
            <h3>Account Information</h3>
          </div>
          <table class="table table-striped table-hover">
            <tbody>
              <tr>
                <td>Name</td>
                <td id="namedata">None</td>
              </tr>
              <tr>
                <td>Username</td>
                <td id="usrnamedata">None</td>
              </tr>
              <tr>
                <td>Account creation date</td>
                <td id="datedata">None</td>
              </tr>
            </tbody>
          </table>

          <div class="mt-auto text-end">    
              <button class="btn btn-danger" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Delete Account</button>
          </div>

        </div>
      </div>

    
    
    <!-- Modal -->

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Delete account</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div><p>Enter your password to delete your account</p></div>

            <div class="input-group mb-3">
            <input type="text" class="form-control border border-info" id="password" placeholder="Password" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-info text-light" type="button" id="passwordchk">Check</button>
            </div>

          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" id="accdel" disabled>Delete</button>
          </div>
        </div>
      </div>
    </div>

    
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="../js/userprofile.js"></script>

</body>
</html>