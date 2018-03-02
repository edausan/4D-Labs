$(function() {

    var mNav            =   $(document).find('.mobile-navbar-wrapper');
    var openMnav        =   $('#open-mnav');
    var closeMnav       =   $('#close-mnav');
    var overlay         =   $('#overlay');
    
    openMnav.click(function() {

        if($(this).find('i').hasClass('fa-plus')) {
            $(this).find('i').removeClass('fa-plus').addClass('fa-bars');
            $('body').removeClass('scrollOff');

            mNav.removeClass('showMnav');

            setTimeout(function() {
                mNav.hide();
                overlay.fadeOut(100);
            }, 750);
            
        } else {
            $(this).find('i').removeClass('fa-bars').addClass('fa-plus');
            $('body').addClass('scrollOff');

            mNav.show();
            overlay.fadeIn(100);
            setTimeout(function() {
                mNav.addClass('showMnav');
            }, 10);
        }
    });

    closeMnav.click(function() {
        mNav.slideUp(200);
        $('body').removeClass('scrollOff');
    });

    

});