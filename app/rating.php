<?php
    session_start();
    require_once('../api/sessionlock.php');

    include('navhome.php')
?>

  
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="rating.css"> -->
    <script src="https://kit.fontawesome.com/012d22a369.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/rating.js"></script>
    <script src="../js/average.js"></script>

    <link rel="stylesheet" href="../css/rating.css">
    <title>Rating</title>

    <style>

      
    </style>
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
          <div class="col-10 col-md-6 col-lg-4 mt-3">

              <div class="row justify-content-center">
                  <div class="happinessborder col-12 border rounded-3 mt-3 fs-3">
                      <div class="myrating_h">
                          <div class="text-center mt-3"><header>Happiness</header></div>
                          <div class="text-center">
                              <div class="stars_h stars">
                                  <input type="radio" name="rating_h" id="h1" value="5"><label for="h1" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_h" id="h2" value="4"><label for="h2" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_h" id="h3" value="3"><label for="h3" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_h" id="h4" value="2"><label for="h4" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_h" id="h5" value="1"><label for="h5" class="fa-solid fa-star px-1"></label>
                              </div>
                              <div class="rating-score border border-info rounded p-1 mb-2 fs-5" id="happiness">None</div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row justify-content-center">
                  <div class="workloadborder col-12 border rounded-3 mt-3 fs-3">
                      <div class="myrating_w">
                          <div class="text-center mt-3"><header>Work Load</header></div>
                          <div class="text-center">
                              <div class="stars_w stars">
                                  <input type="radio" name="rating_w" id="w1" value="5"><label for="w1" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_w" id="w2" value="4"><label for="w2" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_w" id="w3" value="3"><label for="w3" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_w" id="w4" value="2"><label for="w4" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_w" id="w5" value="1"><label for="w5" class="fa-solid fa-star px-1"></label>
                              </div>
                              <div class="rating-score border border-info rounded p-1 mb-2 fs-5" id="workload">None</div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row justify-content-center">
                  <div class="anxietyborder col-12 border rounded-3 mt-3 fs-3">
                      <div class="myrating_a">
                          <div class="text-center mt-3"><header>Anxiety</header></div>
                          <div class="text-center">
                              <div class="stars_a stars">
                                  <input type="radio" name="rating_a" id="a1" value="5"><label for="a1" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_a" id="a2" value="4"><label for="a2" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_a" id="a3" value="3"><label for="a3" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_a" id="a4" value="2"><label for="a4" class="fa-solid fa-star px-1"></label>
                                  <input type="radio" name="rating_a" id="a5" value="1"><label for="a5" class="fa-solid fa-star px-1"></label>
                              </div>
                              <div class="rating-score border border-info rounded p-1 mb-2 fs-5" id="anxiety">None</div>
                          </div>
                      </div>
                  </div>
              </div>

                <div class="row justify-content-center">
                    <div id="result" class="mt-2 text-center col-10">
                    </div>
                </div>

              <div class="row">
                  <div class="col-12 text-end">
                      <input type="button" id="ratingBtn" name="ratingBtn" value="Submit" class="btn btn-primary">
                    </div>
                </div>

              <!-- <div id="result" class=""></div> -->
            </div>
        </div>
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- <script src="rating.js"></script> -->
  


  </body>
  </html>
