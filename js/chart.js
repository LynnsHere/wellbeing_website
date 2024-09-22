google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  // Fetch data from the PHP script
  fetch('../api/chart_api.php') // Adjust this path if necessary
    .then(response => response.json())
    .then(jsonData => {
      var data = google.visualization.arrayToDataTable(jsonData);

      var options = {
        title: 'Well-Being Rating Chart',
        curveType: 'function',
        legend: { position: 'bottom' },
        hAxis: {
          title: 'Time',
          textPosition: 'none' // Hides the x-axis text
        },
        vAxis: {
          title: 'Score',
          viewWindow: {
            min: 0
          }
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);

      
    });
}

document.addEventListener("keydown", f => {
    console.log(f);
    if(f.key.toLowerCase() === "n" && f.altKey){
        window.location.href = '../app/aboutus.php';
    }
    else if(f.key.toLowerCase() === "p" && f.altKey){
        window.location.href = '../app/rating.php';
    }

  })

