<?php
  session_start(); // Start the session
  // require_once('../api/sessionlock.php');
  if (isset($_SESSION["signin"]) == 1) {
      include('navhome.php'); // Include homenav.php if session['signin'] is 1
  } else {
      include('aboutus_nav.php'); // Include aboutus_nav.php otherwise
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aboutus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/aboutus.css">
    <script src="../js/aboutus.js"></script>
  
  </head>
  <body>

  

      <div id="padding"></div>
      
    <div class="container">
      <div class="row" >
        <div class="d-flex justify-content-center mt-5 mb-5">
          <div class="col-12 col-md-10 border rounded" id="box">
            <div class="p-2 p-md-5 pt-4" id="aboutus">
              <h4>ABOUT US</h4>

              <h5>Welcome to Well-Being!</h5>
              <p>
                At Well-Being, we are dedicated to helping you take control of your mental health and wellness. Our innovative platform allows you to rate your mental state daily, providing insights and support to help you maintain a balanced and healthy mind.
              </p>

              <h5>Who We Are</h5>
              <p>
                We are a passionate team of mental health advocates, technology enthusiasts, and data scientists committed to improving mental well-being for everyone. Our mission is to empower you with the tools and information needed to understand and improve your mental health.
              </p>

              <h5>Our Vision</h5>
              <p>
              Our vision is to be the leading platform for mental wellness, offering comprehensive and user-friendly tools that promote a healthier, happier life. We believe that everyone deserves to feel their best, and we are here to support you on your journey to mental well-being.
              </p>

              <h5>What We Do</h5>
              <ul id="ul">
                <li><b>Daily Mental Health Ratings:</b> Track your happiness, workload, and anxiety levels daily to gain a clear understanding of your mental state.</li>
                <li><b>Data Insights:</b> Save your rating scores daily and visualize them with graphs to identify trends and patterns in your mental health.</li>
                <li><b>Alerts and Support:</b> Receive alerts when your scores indicate that your mental health may need attention, helping you take proactive steps to care for your well-being.</li>
              </ul>

              <h5>Our Values</h5>
              <ul id="ul">
                <li><b>Empowerment:</b> We provide the tools and resources you need to take control of your mental health.</li>
                <li><b>Compassion:</b> We are dedicated to supporting you with empathy and understanding.</li>
                <li><b>Innovation:</b> We continuously strive to improve our platform with the latest technology and research.</li>
              </ul>
              
              <h5>Keyboard Navigation</h5>
              <ul id="ul">
                <li><b>Ctrl + N & Ctrl + P:</b> Next page and Previous page.</li>
                <li><b>Left Arrow & Right Arrow:</b> Next quote and Previous quote on Home page.</li>
              </ul>

              <h5>Join Our Community</h5>
              <p>
              Explore our platform and discover how Well-Being can help you achieve a better balance in your life. Whether you're looking to track your mental health, gain insights, or receive support during challenging times, Well-Being is here for you.
              </p>
              <p>
              Thank you for choosing Well-Being. We look forward to being a part of your mental wellness journey!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
