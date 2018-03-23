$(function () {
    var sliderRange =   $("#slider-range");
    var amount      =   $("#amount");
    var priceInput  =   $('.price-range-input');
    var minPrice    =   $('input#price-min');
    var maxPrice    =   $('input#price-max');
    var minimum     =   minPrice.attr('min');
    var maximum     =   minPrice.attr('max');
    var priceMin    =   minPrice.val();
    var priceMax    =   maxPrice.val();

    priceInput.focus(function() {
        $(this).parent('.range-input').addClass('range-focus');
    }).blur(function() {
        $(this).parent('.range-input').removeClass('range-focus');
    });
    
    sliderRange.slider({
        range: true,
        min: 0,
        max: 1000,
        values: [priceMin, priceMax],
        slide: function (event, ui) {
            minPrice.val(ui.values[0]);
            maxPrice.val(ui.values[1]);
        }
    });
    
    minPrice.keyup(function() {
        priceMin = $(this).val();
        sliderRange.slider("values", 0, priceMin);

        if (priceMin <= minimum - 1) {
            $(this).val(0);
        }
    }).change(function() {
        priceMin = $(this).val();
        sliderRange.slider("values", 0, priceMin);
    });

    maxPrice.keyup(function() {
        priceMax = $(this).val();
        sliderRange.slider("values", 1, priceMax);

        if (priceMax >= maximum + 1) {
            $(this).val(1000);
        }
    }).change(function() {
        priceMax = $(this).val();
        sliderRange.slider("values", 1, priceMax);
    });

    $('.price-range-input').focus(function() {
        $('.ui-slider-range').addClass('smooth');
        $('.ui-slider-handle').addClass('smooth');
    }).blur(function() {
        $('.ui-slider-range').removeClass('smooth');
        $('.ui-slider-handle').removeClass('smooth');
    });


    
});
