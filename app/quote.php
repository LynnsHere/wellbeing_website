<?php
    session_start();
    require_once('../api/sessionlock.php');
    
    include('navhome.php');
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/012d22a369.js" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/quote.js"></script>
    <script src="../js/average.js"></script>

    <link rel="stylesheet" href="../css/quote.css">


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


    <div class="greet mt-2 text-center">Welcome from Well-Being website, <?php echo $_SESSION['name']?>....</div>

        <div class="row justify-content-center mt-2">
            <div class="sidebtn col-2 text-center " id="sidebtn1"> <button type="button" class="btn" id="previous"><i class="fa-solid fa-circle-chevron-left"></i></button></div>
            <div class="myquote col-11 col-md-10 col-lg-8 col-xl-5">
                <blockquote>
                    <p>
                        Success is not final, failure is not fatal: it is the courage to continue that counts.
                        Success is not final, failure is not fatal: it is the courage to continue that counts.
                    </p>

                    <p>
                        —Winston Churchill
                    </p>
                </blockquote>

                
            </div>
            <div class="sidebtn col-2 text-center" id="sidebtn2"> <button type="button" class="btn" id="next"><i class="fa-solid fa-circle-chevron-right"></i></button></div>

        </div>
        <div class="downbtn">
            <div class="row text-center justify-content-center">
                        <div class="col-2"><button type="button" class="btn" id="previous1"><i class="fa-solid fa-circle-chevron-left"></i></button></div>
                        <div class="col-2"><button type="button" class="btn" id="next1"><i class="fa-solid fa-circle-chevron-right"></i></button></div>
            </div>
        </div>
    </div>
    <hr class="my-4 mx-auto w-75">

    <!-- <div class="row justify-content-center"><div class="border border-dark col-9 mt-3"></div></div> -->

    <div class="d-flex justify-content-center mt-3">
    <div class="col-8 col-md-5 col-lg-3">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search Quote Here" aria-label="Search Quote Here" aria-describedby="button-addon2" id="searchbox">
            <button class="btn btn-outline-secondary" type="button" id="searchbtn" style="font-size: 15px;">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div id="searchresult" class="col-12 col-md-10 col-lg-7"></div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
 

</body>
</html>