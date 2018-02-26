$(function() {

    var qPlus       =   $('.quantity-field button#q-plus');
    var qMinus      =   $('.quantity-field button#q-minus');
    var qInput      =   $('.quantity-field input#quantity-input');
    var price       =   $('#price-wrapper input#price');
    var subtotal    =   $('#subtotal-wrapper .subtotal input');
    var stockVal    =   $('#stock-wrapper input#stock-val').val();
    var stock       =   stockVal.replace(/,/g, '');
    var stockNotif  =   $('span#stock-notif');

    stockNotif.hide();

    var q = parseInt($('input#min-quantity').val().replace(/,/g, ''));
    var qp = parseInt($('input#min-quantity').val().replace(/,/g, ''));
    var unitPrice = price.val();

    qInput.keyup(function() {
        if ($(this).val() < 1) {
            $(this).val('');
            subtotal.val('$'+0);
        } else {

            q = parseInt($(this).val());

            if (q < 500) {
                unitPrice = 6.27;
                $(document).find('.q-list').removeClass('active-q');
                price.val(unitPrice);
            }

            if (q > stock) {
                stockNotif.slideDown(200);
                $(this).val(stock);
            } else {
                stockNotif.slideUp(200);
            }
            
            $(document).find('#'+q+'').addClass('active-q').siblings().removeClass('active-q');

            var uPrice = $(document).find('#'+q+'').find('strong#u-price').text();
            unitPrice = uPrice;
            qCheck(q);
            qPrice(q);
            subTotal(unitPrice, q);
        }
    });

    qPlus.click(function() {
        if (q > stock - 1) {
            qInput.val(stock);
            stockNotif.slideDown(200);
            
        } else {
            q+=qp;
            qCheck(q);
            qPrice(q);
        }
    });

    qMinus.click(function() {
        if (qInput.val() <= qp) {
            $(this).attr('disabled');
        } else {
            $(this).removeAttr('disabled');
            q-=qp;

            qCheck(q);
            qPrice(q);

            stockNotif.slideUp(200);
        }
    });


    function qCheck() {
        if (q >= 10000) {
            $(document).find('#10000').addClass('active-q').siblings().removeClass('active-q');
            var uPrice = $(document).find('#10000').find('strong#u-price').text();
            price.val(uPrice);
        } else if(q >= 5000) {
            $(document).find('#5000').addClass('active-q').siblings().removeClass('active-q');
            var uPrice = $(document).find('#5000').find('strong#u-price').text();
            price.val(uPrice);
        } else if(q >= 2000) {
            $(document).find('#2000').addClass('active-q').siblings().removeClass('active-q');
            var uPrice = $(document).find('#2000').find('strong#u-price').text();
            price.val(uPrice);
        } else if(q >= 1000) {
            $(document).find('#1000').addClass('active-q').siblings().removeClass('active-q');
            var uPrice = $(document).find('#1000').find('strong#u-price').text();
            price.val(uPrice);
        } else if(q >= 500) {
            $(document).find('#500').addClass('active-q').siblings().removeClass('active-q');
            var uPrice = $(document).find('#500').find('strong#u-price').text();
            price.val(uPrice);
        } else if(q < 500){
            $(document).find('.q-list').removeClass('active-q');
            price.val(6.27);
        }
        
    }
    

    
    function qPrice() {
        qInput.val(q);
        var uPrice = $(document).find('#price-wrapper input#price').val();
        if (uPrice != '') {
            price.val('US$'+uPrice);
            unitPrice = uPrice;
            subTotal(q, unitPrice);
        }
    }

    function subTotal() {
        var subPrice = Number(unitPrice * q);
        var sub = subPrice.toFixed(2);
        subtotal.val('$'+parseFloat(sub).toLocaleString('en'));
    }

    qPrice();
    
    $(document).find('#'+q+'').addClass('active-q').siblings().removeClass('active-q');

});