// Searchbar Handler

$(function() {
    var searchField = $('#query');
    var icon = $('#search-btn');

    // Focus Event Handler :
    $(searchField).on('focus', function() {
        $(this).animate({
            width:'100%'
        },400);

        $(icon).animate({
            right: '10px'
        },400); 
    });


    // Blur Event Handler :
    $(searchField).on('blur', function() {
        if(searchField.val() == '') {
            $(searchField).animate({
                width:'45%'  
            },400, function(){});

            $(icon).animate({
                right: '360px'
            },400, function(){});
        }
    });

    $('#search-form').submit(function(e) {
        e.preventDefault();
    })
});

function search() {
    // Clear results :
    $('#results').html('');
    $('#buttons').html('');

    // Get Form input :
    q = $('#query').val();

    // Run GET Request on API :
    $.get(
        "https://www.googleapis.com/youtube/v3/search", {
            part: 'snippet, id',
            q: q,
            type: 'video',
            key: 'AIzaSyAuwd5unHZnInjGb5LJzajnxTcWCLsJd6I'
        },
        function(data) {
            var nextPageToken = data.nextPageToken;
            var previousPageToken = data.previousPageToken;

            // Log Data :
            console.log(data);

            $.each(data.items, function(i, item) {
                // Get Output :
                var output = getOutput(item);

                // Display Results :
                $('#results').append(output);
            });

            var buttons = getButtons(nextPageToken, previousPageToken);

            // Display Buttons :
            $('#buttons').append(buttons);

        }
    );
}

// Build Output :
function getOutput(item) {
    var videoId = item.id.videoId;
    var title = item.snippet.title;
    var description = item.snippet.description;
    var thumb = item.snippet.thumbnails.high.url;
    var channelTitle = item.snippet.channelTitle;
    var videoDate = item.snippet.publishedAt;

    // Build Output String :
    var output = '<li>' + 
    '<div class="list-left">' + 
    '<img src="' + thumb + '" />' +
    '</div>' +
    '<div class="list-right">' +
    '<h3>' + title + '</h3>' +
    '<small>By <span class="cTitle">' + channelTitle + '</span> on ' + videoDate + ' </small>' +
    '<p>' + description + '</p>' +
    '</div>' +
    '</li>' +
    '<div class="clearfix"></div>' +
    '';

    return output;
}


// Build the buttons :
function getButtons(nextPageToken, previousPageToken) {
    if(!previousPageToken) {
        var btnoutput = '<div class="button-container">' +
            '<button id="next-button" class="btn btn-info paging-button" data-token="' + nextPageToken + '" data-query="' + q + '"' +
            ' onclick="nextPage();">Next Page</button></div>';
        ;
    } else {
        var btnoutput = '<div class="button-container">' +
            '<button id="previous-button" class="btn btn-info paging-button" data-token="' + previousPageToken + '" data-query="' + q + '"' +
            ' onclick="previousPage();">previous Page</button>' +

            '<button id="next-button" class="btn btn-info paging-button" data-token="' + nextPageToken + '" data-query="' + q + '"' +
            ' onclick="nextPage();">Next Page</button></div>';
    }

    return btnoutput;
}