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
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="../js/chart.js"></script>
    <script src="../js/average.js"></script>
    <script src="../js/todayscore.js"></script>
    <link rel="stylesheet" href="../css/chart.css">

</head>
  <body>
  <div class="padding"></div>

<div class="container-fluid">

  <div class="row justify-content-center text-center">
        <div class="col-11 col-md-9 col-lg-11">
          <div class="avg_result">

          </div>
        </div>
  </div>


  <!-- Today Rating -->
<div class="row justify-content-center overflow-hidden my-3">  
  <div class="col-12 text-center"><h5>Today's Score</h5></div>

  <div class="col-11 col-md-4 col-lg-2 mb-2">
    <div class="row">
      <div class="col-3 border border-2 border-info rounded-4 bg-light text-center" id="happiness">h</div>
      <div class="col-8">
        <label>Happiness</label>
      </div>
    </div>
  </div>

  <div class="col-11 col-md-4 col-lg-2 mb-2">
    <div class="row">
      <div class="col-3 border border-2 border-info rounded-4 bg-light text-center" id="workload">w</div>
      <div class="col-8">
        <label>Workload</label>
      </div>
    </div>
  </div>

  <div class="col-11 col-md-4 col-lg-2 mb-2">
    <div class="row">
      <div class="col-3 border border-2 border-info rounded-4 bg-light text-center" id="anxiety">a</div>
      <div class="col-8">
        <label>Anxiety</label>
      </div>
    </div>
  </div>
  

</div>

  <!-- <div class="row"> -->
    <div class="chart-container">
      <div id="curve_chart">

      </div>
    </div> 
  <!-- </div> -->

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>