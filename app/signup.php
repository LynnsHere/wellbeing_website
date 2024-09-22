<?php
  include('prehome_nav.php')
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="../js/jquery-3.7.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/012d22a369.js" crossorigin="anonymous"></script>
  <script src="../js/signup.js"></script>
  <link rel="stylesheet" href="../css/signup.css">


  <style>

    

  </style>
</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- <nav  class="navbar navbar-expand-lg fixed-top" id="nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="../img/iconlogo.png" alt="logo" height="40px">
            <img src="../img/textlogo.png" alt="logo" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav nav-underline">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="aboutus.php">ABOUT US</a>
            </li>
        
            
            
        </ul>
        </div>
    </div>
</nav> -->

<div class="padding" ></div>


  <div class="d-flex align-items-center" style="height: 80%;">
    <div class="container">
      <div class="row m-2 m-md-0 mt-5 justify-content-center">
        <div class="col-lg-5">
          <div class="border-2 rounded pt-4 ps-4 pe-4 pb-2 form_bg ">
            <form action="" method="POST" id="signup_form">
              <div class="text-center mb-4">
                <h3>Sign Up New Account</h3>
              </div>

              <div class="row mb-3 align-items-center">
                <div class="col-lg-3 text-lg-center"><label for="name" class="form-label">Name</label></div>
                <div class="col-lg-9">
                  <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                  <div class="text-start text-danger"><span id="err_name"></span></div>
                </div>
              </div>

              <div class="row mb-3 align-items-center">
                <div class="col-lg-3 text-lg-center"><label for="usrname" class="form-label">Username</label></div>
                <div class="col-lg-9">
                  <div class="input-group">
                    <input type="text" class="form-control" name="usrname" id="usrname" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn" type="button" id="usrBtn" name="usrBtn">Check</button>
                  </div>
                  <div class="text-start"><span id="usrChk"></span></div>
                  <div class="text-start text-danger"><span id="err_usrname"></span></div>
                </div>
              </div>

              <input type="hidden" name="hidden_usrname" id="hidden_usrname">
              
              <div class="row mb-3 align-items-center">
                <div class="col-lg-3 text-lg-center"><label for="pw" class="form-label">Password</label></div>
                <div class="col-lg-9">
                  <div class="input-group">
                    <input type="password" class="form-control" id="pw" name="pw">
                    <button class="btn btn-outline-secondary" type="button" id="togglePw">
                      <i class="fa fa-eye"></i>
                    </button>
                  </div>
                  <div class="text-start text-danger "><span id="err_pw"></span></div>
                </div>
              </div>

              

              <div class="row mb-3 align-items-center">
                  <div class="col-lg-3 text-lg-center"><label for="cpw" class="form-label">Confirmed password</label></div>
                  <div class="col-lg-9">
                      <input type="password" class="form-control" id="cpw" name="cpw">
                  <div class="text-start text-danger"><span id="err_cpw"></span></div>
                  </div>

                  
              </div>
              <div class="row">
                    <div class="col-12 text-end">
                      <button type="submit" class="btn btn" name="signupBtn">Sign Up</button>
                    </div>

                    <div class="row text-center border-top border-top-4 mt-2 mb-0 ms-0 me-0 pt-2" style="color: rgb(58, 68, 93)">
                      <div>If you already have an account, <a href="signin.php" id="signin_link">Sign in</a>.</div>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>