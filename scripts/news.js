$(function() {
    var newsContent = $('section.news-and-events-wrapper .news-container .news-item .news-content-wrapper .news-content p');

    newsContent.each(function() {
        if ($(this).text().length >= 180) {
            $(this).text($(this).text().substring(0,150) + '. . . .');
        }
    });
    

});