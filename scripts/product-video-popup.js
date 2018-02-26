$(function() {

    var prodVidWrap = $(document).find('section.product-video-popup');
    var viewProdVid  = $(document).find('.product-head .product-overview ul li a#view-product-video');

    $(document).find('section.product-video-popup').hide();

    viewProdVid.click(function() {
        $('body').addClass('scrollOff');
        
        $(this).toggleClass('showVideo hideVideo');

        if ($(this).hasClass('showVideo')) {
            $(document).find('section.product-video-popup').css({'z-index':'1007'});

            setTimeout(function() {
                $(document).find('section.product-video-popup').show();
            }, 50);
            
            setTimeout(function() {
                $(document).find('section.product-video-popup').addClass('video-pop');
            }, 250);
            
        } else {

            $(document).find('section.product-video-popup').removeClass('video-pop');
            setTimeout(function() {
                $(document).find('section.product-video-popup').hide();
            }, 250);
        }
    });

    $(document).on('click', '#vid-popup-x', function() {
        $('body').removeClass('scrollOff');

        viewProdVid.toggleClass('showVideo hideVideo');

        $(document).find('section.product-video-popup').removeClass('video-pop');
    
        setTimeout(function() {
            $(document).find('section.product-video-popup').hide();
        }, 250);
    });

});