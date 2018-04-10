$(function() {

    var addToCartNotifBtn   =   $('#param-add-to-cart');
    var addToCartNotif      =   $(document).find('.add-to-cart-notif');
    var cartNotif           =   $(document).find('.cart-notif');
    var notifTitlePlaceholder   =   $(document).find('#add-to-cart-placeholder');

    var recentNotif =   0;
    var latestNotif =   0;
    var notif       =   1;

    // Show Add to cart notif when add to cart button is clicked
    $(document).on('click', '#param-add-to-cart', function() {
        var cartBtnData = $(this).attr('data-prod');
        addNotif(cartBtnData);
        $(document).find('.cart-notif').addClass('showAddToCartNotif');
        latestNotif = notif++;
    });

    function addNotif(cartBtnData) {
        var notif = '<article id="cart-notif-'+latestNotif+'" class="cart-notif hide-notif"><button class="close-notif-btn"><i class="fa fa-close"></i></button><label for=""><span id="add-to-cart-placeholder">'+cartBtnData+'</span> is added to your Shopping Cart.</label><a href="shopping-cart">Check your Shopping Cart.</a></article>';
        addToCartNotif.append(notif);

        setTimeout(function() {
            $(document).find('#cart-notif-'+recentNotif+'').removeClass('hide-notif');
        }, 100);

        recentNotif = latestNotif;
        removeAddToCartNotif();
    }

    function removeAddToCartNotif() {        
        $(document).find('.cart-notif').each(function(notif, i) {
            var notifID = $(this).attr('id');

            setTimeout(function() {
                $(document).find('#'+notifID+'').removeClass('showAddToCartNotif');
                deleteNotif(notifID);
            }, 2000);
        });
    }

    function deleteNotif(notifID) {
        setTimeout(function() {
            $(document).find('#'+notifID+'').remove();
        }, 100);
    }

    addToCartNotif.mouseover(function() {
        $(document).find('.cart-notif').addClass('stayAddToCartNotif');
    }).mouseleave(function() {
        $(document).find('.cart-notif').removeClass('stayAddToCartNotif');
    });



});