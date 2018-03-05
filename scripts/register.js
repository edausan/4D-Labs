$(function() {
    var inputWrapper    =   $('section.register-wrapper form.registration-form .input-wrapper');
    var regInput        =   $('section.register-wrapper form.registration-form .input-wrapper input.reg-input');
    var regInputIcon    =   $('section.register-wrapper form.registration-form .input-wrapper span i');

    // Focus event in Registration Form fields. 
    $(document).on('focus', 'section.register-wrapper form.registration-form .input-wrapper input.reg-input, textarea', function() {
        $(this).parent(inputWrapper).addClass('activeIn');
        $(this).siblings('span').addClass('cc');
    });
    $(document).on('blur', 'section.register-wrapper form.registration-form .input-wrapper input.reg-input, textarea', function() {
        $(this).parent(inputWrapper).removeClass('activeIn');
        $(this).siblings('span').removeClass('cc');
    });

    // foreach loop of field wrapper
    inputWrapper.each(function() {
        var p   =   $(this);
        var c   =   'span';
        parentHeight(p, c);
    });

    // getting the height of every field wrapper
    function parentHeight(p, c) {
        var ph = p.height();
        p.find(c).css({'height':''+ph+'px'});
    }

    // $('.cbox label').click(function() {
        
    // });

    // if 
    $(document).on('click', '.cbox', function() {
        $(this).find('input').click();
    });

    $(document).on('click', '.cbox label', function() {
        $(this).siblings('input').click();
    });


    // checkbox wrapper for opening shipping and billing fields
    var newsletter      =   $(document).find('#open-other-details');
    // checkbox input for opening shipping and billing fields
    var newsletterCbox  =   newsletter.find('input');

    if ($(document).find('.cbox input#same-with-billing').is(':checked')) {
        $(document).find('.cbox input#same-with-billing').siblings('i').addClass('showCheck');
        $(document).find('.cbox input#same-with-billing').parent('.cbox').addClass('hideBox');
    }

    var sameWithBilling =   $('section.register-wrapper form.registration-form .shipping-and-billing-wrapper .shipping-details-wrapper header.form-header #just-check');


    $(document).on('click', '#just-check', function() {
        var billingWrap = $(document).find('#billing-details-wrapper');
        var shippingWrap = $(document).find('#shipping-details-wrapper');

        var billAdd1 = $(document).find('input#billing-address1').val();
        var billAdd2 = $(document).find('input#billing-address2').val();
        var billCity = $(document).find('input#billing-city').val();
        var billState = $(document).find('input#billing-state').val();
        var billPostal = $(document).find('input#billing-postal').val();
        var billCountry = $(document).find('select#billing-country').val();
        var billPhone = $(document).find('input#billing-phone').val();
        var billtaxid = $(document).find('input#billing-taxid').val();

        if ($(this).find('input[type=checkbox]').is(':checked')) {

            $(document).find('input#shipping-address1').val(billAdd1);
            $(document).find('input#shipping-address2').val(billAdd2);
            $(document).find('input#shipping-city').val(billCity);
            $(document).find('input#shipping-state').val(billState);
            $(document).find('input#shipping-postal').val(billPostal);

            $(document).find('select#shipping-country option[value='+billCountry+']').attr('selected', true);

            $(document).find('input#shipping-phone').val(billPhone);
            $(document).find('input#shipping-taxid').val(billtaxid);

        } else {
            $(document).find('input').val('');
            $(document).find('select#shipping-country option[value='+billCountry+']').prop('selected', false);
            $(document).find('select#shipping-country option[value=0]').prop('disabled', false).prop('selected', true);

            setTimeout(function() {
                $(document).find('select#shipping-country option[value=0]').prop('disabled', true)
            }, 200);
        }
    });

    var billingWrap         =   $('section.shipping-billing-userin-wrapper form.sb-form .sb-input-wrapper.billing-details-input-wrapper');
    var shippingWrap        =   $('section.shipping-billing-userin-wrapper form.sb-form .sb-input-wrapper.shipping-details-input-wrapper');

    var regFormShipBill     =  $('section.register-wrapper form.registration-form .shipping-and-billing-wrapper');
    var regFormSelect       =   $('section.register-wrapper form.registration-form .input-wrapper select');

    var billingSelect       = $('section.shipping-billing-userin-wrapper form.sb-form .billing-details-input-wrapper select');

    billingSelect.removeAttr('disabled');





    $(document).on('change','.cbox input',function() {
        if ($(this).is(':checked')) {
            $(this).siblings('i').addClass('showCheck');
            $(this).parent('.cbox').addClass('hideBox');
        
        } else {
            $(this).siblings('i').removeClass('showCheck');
            $(this).parent('.cbox').removeClass('hideBox');
            $(this).siblings('label').removeClass('changeColor');
        }
    });





    // ###
    // Shipping and Billing Details Form
    newsletterCbox.change(function() {

        // ### Billing wrapper
        var billingWrap = $(document).find('#billing-details-wrapper');
        // ### Shipping wrapper
        var shippingWrap = $(document).find('#shipping-details-wrapper');

        // ### getting the Billing Wrapper form fields values
        var billFname = $(document).find('input#billing-firstname').val();
        var billLname = $(document).find('input#billing-lastname').val();
        var billCompany = $(document).find('input#billing-company').val();
        var billAdd1 = $(document).find('input#billing-address1').val();
        var billAdd2 = $(document).find('input#billing-address2').val();
        var billCity = $(document).find('input#billing-city').val();
        var billState = $(document).find('input#billing-state').val();
        var billPostal = $(document).find('input#billing-postal').val();
        var billCountry = $(document).find('select#billing-country').val();
        var billPhone = $(document).find('input#billing-phone').val();
        var billtaxid = $(document).find('input#billing-taxid').val();

        // checking if the 'My Shipping details are the same as my Billing details.' is checked
        if ($(this).is(':checked')) {
            // adding class to the checkbox to show checkmark
            $(this).siblings('i').addClass('showCheck');
            // adding class to the .cbox to hide the checkbox's box
            $(this).parent('.cbox').addClass('hideBox');

            // move billing wrapper move to right
            billingWrap.addClass('translate-to-right');
            // move shipping wrapper move to right
            shippingWrap.addClass('translate-to-right');
            
            // adding disabled attribute to the shipping details form fields
            shippingWrap.find('input').attr('disabled', true);
            shippingWrap.find('select').attr('disabled', true);
            regFormSelect.removeAttr('disabled');

            regFormShipBill.find('input').removeAttr('disabled');

            // passing data from Billing form Fields to Shipping Form Fields
            shippingWrap.find('input#shipping-firstname').val(billFname);
            shippingWrap.find('input#shipping-lastname').val(billLname);
            shippingWrap.find('input#shipping-company').val(billCompany);
            shippingWrap.find('input#shipping-address1').val(billAdd1);
            shippingWrap.find('input#shipping-address2').val(billAdd2);
            shippingWrap.find('input#shipping-city').val(billCity);
            shippingWrap.find('input#shipping-state').val(billState);
            shippingWrap.find('input#shipping-postal').val(billPostal);

            shippingWrap.find('select#shipping-country option[value='+billCountry+']').attr('selected', true);

            shippingWrap.find('input#shipping-phone').val(billPhone);
            shippingWrap.find('input#shipping-taxid').val(billtaxid);

        } else {
            billingWrap.removeClass('translate-to-right');
            shippingWrap.removeClass('translate-to-right');

            shippingWrap.find('input').removeAttr('disabled');
            shippingWrap.find('select').removeAttr('disabled');
            regFormSelect.attr('disabled', true);

            regFormShipBill.find('input').attr('disabled', true);

            $(this).siblings('i').removeClass('showCheck');
            $(this).parent('.cbox').removeClass('hideBox');
            $(this).siblings('label').removeClass('changeColor');
            $(document).find('select#shipping-country option[value=0]').prop('disabled', true);
        }
    });


    function passDataToShippingFields() {

    }

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


   var shipbillCbox =   $('section.register-wrapper form.registration-form .newsletter input#ship-cbox');
   var personInfowrapper    =   $('section.register-wrapper form.registration-form .personal-info-wrapper');
   var shipbillWrapper  =   $('section.register-wrapper form.registration-form .shipping-and-billing-wrapper');

   shipbillCbox.change(function() {

    if ($(this).is(':checked')) {
        $('body').addClass('overflowY');

        personInfowrapper.removeClass('translate-right');
        personInfowrapper.addClass('fifty-percent');
        shipbillWrapper.removeClass('translate-right');

        personInfowrapper.removeAttr('disabled', true);

    } else {
        $('body').removeClass('overflowY');
        personInfowrapper.attr('disabled', true);

        $('body, html').animate({scrollTop: 0});

        shipbillWrapper.addClass('translate-right');
        personInfowrapper.addClass('translate-right');
        personInfowrapper.removeClass('fifty-percent');

    }

   });


//    var shippingPreference   =   $('section.shipping-method-wrapper section.shipping-preference-wrapper ul li input');

//    shippingPreference.change(function() {
//         if ($(this).is(':checked')) {
//             $(this).parent('li.shipping-preference-item').siblings('li.shipping-preference-item').find('input').prop('checked', false);
//         }
//    });

});