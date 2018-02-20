$(function() {

    var qPlus       =   $('.quantity-field button#q-plus');
    var qMinus      =   $('.quantity-field button#q-minus');
    var qInput      =   $('.quantity-field input#quantity-input');
    var price       =   $('#price-wrapper span#price');
    var subtotal    =   $('#subtotal-wrapper .subtotal input');
    var stockVal    =   $('#stock-wrapper input#stock-val').val();
    var stock       =   stockVal.replace(/,/g, '');
    var stockNotif  =   $('span#stock-notif');

    stockNotif.hide();

    

    var q = parseInt($('input#min-quantity').val().replace(/,/g, ''));
    var qp = parseInt($('input#min-quantity').val().replace(/,/g, ''));
    var unitPrice = $(document).find('#'+q+'').find('strong#u-price').text()

    qPlus.click(function() {
        if (q >= stock) {
            stockNotif.slideDown(200);
            // qInput.val(stock);
        } else {
            q+=qp;
            qPrice(q);
        }
        
    });
    qMinus.click(function() {
        if (qInput.val() == qp) {
            $(this).attr('disabled');
        } else {
            $(this).removeAttr('disabled');
            q-=qp;
            qPrice(q);
            stockNotif.slideUp(200);
        }
    });
    

    
    function qPrice() {
        qInput.val(q);
        $(document).find('#'+q+'').addClass('active-q').siblings().removeClass('active-q');
        var uPrice = $(document).find('#'+q+'').find('strong#u-price').text();
        
        if (uPrice != '') {
            price.text(uPrice);
            unitPrice = uPrice;
        }
        subTotal(q, unitPrice);
    }

    function subTotal() {
        var subPrice = Number(unitPrice * q);
        var sub = subPrice.toFixed(2);
        subtotal.val('$'+parseFloat(sub).toLocaleString('en'));
    }

    subTotal();
    

    $(document).find('#'+q+'').addClass('active-q').siblings().removeClass('active-q');

});