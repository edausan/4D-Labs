$(function() {

    var parametricWrapper = $('#parametric-wrapper');
    
    parametricWrapper.hide();
    $('#orientation-msg').show();    

    function winResize() {
        
        if ($(window).width() < $(window).height()) {
            parametricWrapper.hide();
            $('#orientation-msg').show();
        } else {
            parametricWrapper.show();
            $('#orientation-msg').hide();
            
        }
    }

    $(window).resize(function() {
        // window.location.href = window.location.href
        var winLocation =   window.location.href;
        if (winLocation == 'http://4dl.4dwebsites.cf/parametric-search' || winLocation == 'http://localhost:7880/4DLabs-dev/parametric-search') {
            winLocation = window.location.href 
            winResize();
        }        
    });

    winResize();   

});