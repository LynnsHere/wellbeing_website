<?php

    include('prehome_nav.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <style>
      body{
    font-family: Arial, sans-serif;
    background-image: url('../img/white_bg2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 100vh;
}

div.container{
    padding-top: 230px;
}

#nav{
    background: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(10px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
}

h1{
    color: #212245;
    font-size: 50px;
}

p{
    color: #64c6c4;
    font-size: 20px;
}
@media (max-width: 576px) { 
    div.container{
    padding-top: 150px;
}

h1{
    color: #212245;
    font-size: 35px;
}

p{
    color: #64c6c4;
    font-size: 15px;
}
}
    </style>
</head>
  <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-lg-6 text-center">
                    <h1>Welcome</h1>
                    <p>
                    Welcome to Well-Being! We're here to help you take control of your mental health with daily tracking and insights. Join us on your journey to a balanced and healthier mind. Thank you for choosing Well-Being!
                    </p>

                    <a href="signin.php" class="btn btn-light border border-dark">Get Start</a>
                </div>
            </div>
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
