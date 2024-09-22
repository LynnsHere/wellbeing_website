$(document).ready(function() {
    var today = new Date();
    var cell = Math.ceil((today - new Date(today.getFullYear(), 0, 1)) / 86400000);
    console.log(cell);

    var quote_day = cell % 119;
    console.log(quote_day);

    $.ajax({
        method: "POST",
        url: "../data/quotes.json",
    })
    .done(function(data) {
        console.log(data);
        var quote_data = data.quotes;
        console.log(data.quotes[quote_day]);
        var today_quote = data.quotes[quote_day];

        $('p:first-child').text(today_quote.quote);
        $('p:last-child').text("- " + today_quote.author);

        $('#next').click(function() {
            cell += 1;
            console.log(cell);
            quote_day = cell % 119;
            today_quote = data.quotes[quote_day];
            $('p:first-child').text(today_quote.quote);
            $('p:last-child').text("- " + today_quote.author);
            console.log(quote_day);
        });

        $('#previous').click(function() {
            cell -= 1;
            quote_day = cell % 119;
            today_quote = data.quotes[quote_day];
            $('p:first-child').text(today_quote.quote);
            $('p:last-child').text("- " + today_quote.author);
            console.log(quote_day);
        });

        $('#next1').click(function() {
            cell += 1;
            console.log(cell);
            quote_day = cell % 119;
            today_quote = data.quotes[quote_day];
            $('p:first-child').text(today_quote.quote);
            $('p:last-child').text("- " + today_quote.author);
            console.log(quote_day);
        });

        $('#previous1').click(function() {
            cell -= 1;
            quote_day = cell % 119;
            today_quote = data.quotes[quote_day];
            $('p:first-child').text(today_quote.quote);
            $('p:last-child').text("- " + today_quote.author);
            console.log(quote_day);
        });

        document.addEventListener("keydown", e => {
            if(e.key === "ArrowLeft"){
                // console.log(e);
                cell -= 1;
                quote_day = cell % 119;
                today_quote = data.quotes[quote_day];
                $('p:first-child').text(today_quote.quote);
                $('p:last-child').text("- " + today_quote.author);
                console.log(quote_day);
            }
            else if(e.key === "ArrowRight"){
                // console.log(e);
                cell += 1;
                console.log(cell);
                quote_day = cell % 119;
                today_quote = data.quotes[quote_day];
                $('p:first-child').text(today_quote.quote);
                $('p:last-child').text("- " + today_quote.author);
                console.log(quote_day);
            }
        })

        let searchToggled = false; // Track the state of the toggle

        $('#searchbtn').click(function() {
            if (!searchToggled) {
                // Search mode
                var searchText = $('#searchbox').val().toLowerCase();
                
                    var results = quote_data.filter(function(item) {
                        return item.quote.toLowerCase().includes(searchText) || 
                        item.author.toLowerCase().includes(searchText);
                    });
        
                // Display results
                $('#searchresult').empty();
                if (results.length > 0) {
                    results.forEach(function(item) {
                        $('#searchresult').append('<div id="resultset" class="my-2 py-3 text-center  rounded-3 m-5 p-4 bg-light" style="box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);font-size: 15px;"><div class="">' + item.quote + '</div><div class="text-end" style="font-size:13px;"> - '  + item.author + '</div></div>');
                    });
                } else {
                    $('#searchresult').append('<div>No results found.</div>');
                }
            } else {
                // Clear mode
                $('#searchresult').empty();    // Clear the search results
                $('#searchbox').val('');       // Clear the search input
            }
            if(searchText == ''){
                $('#searchresult').empty();
            }
            // Toggle the state
            searchToggled = !searchToggled;
        });
        
    });

    function toggleButtons() {
        var width = $(window).width();
        // console.log("Window width:", width); // For debugging

        if (width < 996) {
            // console.log("Small screen - showing downbtn, hiding sidebtn");
            $(".downbtn").show();
            $(".sidebtn").hide();
        } else {
            // console.log("Large screen - hiding downbtn, showing sidebtn");
            $(".downbtn").hide();
            $(".sidebtn").show();
        }
    }

    toggleButtons();

    $(window).resize(function() {
        toggleButtons();
    });

    // Keyboard Navigation

    document.addEventListener("keydown", e => {
        // console.log(e);
        if(e.key.toLowerCase() === "n" && e.altKey){
            window.location.href = '../app/rating.php';
        }
        else if(e.key.toLowerCase() === "p" && e.altKey){
            window.location.href = '../app/userprofile.php';
        }
    })
        
});
