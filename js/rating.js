
    $(document).ready(function() { 

      $.ajax({
        url: '../api/todayscore_api.php',
        method: 'GET',
        datatype: 'json',
        success: function(data) {
            data = JSON.parse(data);
            if(data.status == 1){
              $("#result").html("<div class='alert alert-warning' role='alert'>You already rated today. Anyway, u can rate it again.</div>")
            }
        },
      });

    let happiness, workload, anxiety;

    function handleRating(starClass) {
      var stars = $(starClass + " input");
      var scoreDisplay = $(starClass).parent().next();

    }

    handleRating(".stars_h");
    handleRating(".stars_w");
    handleRating(".stars_a");

    $('input[type=radio][name=rating_h]').change(function() { 
      happiness = $('input[name="rating_h"]:checked').val();
      console.log(happiness);
      $("#happiness").text("Rating: "+happiness+"/5"); 
    });

    $('input[type=radio][name=rating_w]').change(function() { 
      workload = $('input[name="rating_w"]:checked').val();
      console.log(workload);
      $("#workload").text("Rating: "+workload+"/5"); 
    });

    $('input[type=radio][name=rating_a]').change(function() { 
      anxiety = $('input[name="rating_a"]:checked').val();
      console.log(anxiety);
      $("#anxiety").text("Rating: "+anxiety+"/5"); 
    });

    
      $('#ratingBtn').click(function(data) { 
          $.post('../api/rating_api.php',{ happiness:happiness, workload:workload, anxiety:anxiety},function(data){ 
            window.location.href = '../app/chart.php'
          })
      });


      //Keyboard navigation

      document.addEventListener("keydown", f => {
        console.log(f);
        if(f.key.toLowerCase() === "n" && f.altKey){
            window.location.href = '../app/chart.php';
        }
        else if(f.key.toLowerCase() === "p" && f.altKey){
            window.location.href = '../app/quote.php';
        }

      })
  });


