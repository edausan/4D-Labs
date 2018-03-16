$(function() {
    $('#parametric-wrapper').hide();
    $('.loading-wraper').fadeIn(300);
    $('body').addClass('scrollOff');

    var loads = setInterval(function() { winReady() }, 100);

    function winReady() {
        if ( $(window).ready()) {
            load();
        }
    }

    function load() {
        $('.loading-wrapper').fadeOut(300);
        setTimeout(function() {
            $('.loading-wrapper').hide();
            $('.page-container').css('opacity', 1);
            $('body').removeClass('scrollOff');
            clearInterval(loads);
        }, 400);
        
    }; 
});