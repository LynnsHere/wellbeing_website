$(document).ready(function() {
    $.ajax({
        url: '../api/todayscore_api.php',
        method: 'GET',
        datatype: 'json',
        success: function(data) {
            data = JSON.parse(data);
            $('#happiness').text(data.happiness);
                console.log(data.happiness)
            $('#workload').text(data.workload);
                console.log(data.workload)
            $('#anxiety').text(data.anxiety);
                console.log(data.anxiety)
        },
    });
});
