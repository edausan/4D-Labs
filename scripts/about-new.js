$(function() {
    var win = $(window);
    var aboutContent = $('section.about-wrapper .history-wrapper .history-item');
    var winHeight   =   win.height()  / 2;

    win.scroll(function() {
        var winScroll = $(this).scrollTop();

        aboutContent.each(function(i, el) {
            var elID = $(this).attr('id');
            var elTop = $('div#'+elID+'').offset().top;

            if (winScroll >= (elTop - winHeight)) {
                if ($(this).children('.history').hasClass('fleft')) {
                    $(this).addClass('leftToDefault');
                } else {
                    $(this).addClass('rightToDefault');
                }
            } else {
                $(this).removeClass('leftToDefault rightToDefault');
            }
        });

    });


});