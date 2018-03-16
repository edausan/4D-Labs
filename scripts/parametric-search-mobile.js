$(function() {

    var parametricWrapper = $('#parametric-wrapper');
    
    parametricWrapper.hide();
    $('#orientation-msg').show();    

    function winResize() {
        if ($(window).width() <= 500) {
            parametricWrapper.hide();
            $('#orientation-msg').show();
        } else {
            
            parametricWrapper.show();
            $('#orientation-msg').hide();
            
        }
    }

    $(window).resize(function() {
        if (window.location.href == 'http://4dl.4dwebsites.cf/parametric-search') {
            window.location.href = window.location.href
            winResize();
        }        
    });

    winResize();
    
    

})