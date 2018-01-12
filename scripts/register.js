$(function() {
    var inputWrapper    =   $('section.register-wrapper form.registration-form .input-wrapper');
    var regInput        =   $('section.register-wrapper form.registration-form .input-wrapper input.reg-input');
    var regInputIcon    =   $('section.register-wrapper form.registration-form .input-wrapper span i');

    regInput.focus(function() {
        $(this).parent(inputWrapper).addClass('activeIn');
        $(this).siblings('span').addClass('cc');
    }).blur(function() {
        $(this).parent(inputWrapper).removeClass('activeIn');
        $(this).siblings('span').removeClass('cc');
    });

    inputWrapper.each(function() {
        var p   =   $(this);
        var c   =   'span';
        parentHeight(p, c);
    });

    function parentHeight(p, c) {
        var ph = p.height();
        p.children(c).css({'height':''+ph+'px'});
    }


    

    var newsletter      =   $('section.register-wrapper form.registration-form .newsletter');
    var newsletterCbox  =   newsletter.children('input');

    newsletter.click(function() {
        $(this).children('input').click();
    });

    newsletterCbox.change(function() {
        
        if ($(this).is(':checked')) {
            $(this).siblings('i').addClass('showCheck');
            $(this).parent('.newsletter').addClass('hideBox');
        } else {
            $(this).siblings('i').removeClass('showCheck');
            $(this).parent('.newsletter').removeClass('hideBox');
            $(this).siblings('label').removeClass('changeColor');
        }
    });

    $('input[type=email]').keyup(function() {


        if ($(this).is(":invalid")) {
            $(this).parent('.input-wrapper').addClass('invalid');

        } else {
            $(this).parent('.input-wrapper').removeClass('invalid');
        }

    }).blur(function() {
        if ($(this).val() == '') {
            $(this).parent('.input-wrapper').removeClass('invalid');
        }
    });


   
});