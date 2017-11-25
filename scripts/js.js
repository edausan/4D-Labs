jQuery.noConflict();

jQuery(document).ready(function($) {




            $("body").animate({
                scrollTop: 0
            }, "fast");
      

    var screen = $(window).width();
    if (screen < 700) {
        $('.panel-col-first').css({
            display: "none"
        });
$("a#back-top").click(function() {

            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        
  });
      
$('#my-orders-table tfoot tr td, #my-invoice-table-3 tfoot tr td').removeAttr('colspan');

		$('.mini-nav-toggle').addClass('arrow-down');
	
        $('.mini-nav-toggle').click(function(e) {

            // Prevent default behaviour
            e.preventDefault();
            $('.panel-col-first').slideToggle('slow');

            if ($(this).hasClass('arrow-up')) {
                $(this).addClass('arrow-down').removeClass('arrow-up');
            } else {
                $(this).addClass('arrow-up').removeClass('arrow-down');
            }
        });
		
		$('.order-info-box').addClass('adjustcent');
		$( '<a href="#" id="back-top">&nbsp;</a>' ).appendTo( $( "body" ) );
		$( '<span class="arrow-down"></span>' ).appendTo( $( ".order-info-box" ) );
        $('.order-info-box span').click(function() {
			if ($(this).hasClass('arrow-up')) {
                $(this).addClass('arrow-down').removeClass('arrow-up');
				$(this).parent().addClass('adjustcent');
            } else {
                $(this).addClass('arrow-up').removeClass('arrow-down');
				$(this).parent().removeClass('adjustcent');
            }
        });
    }

    $('#table-tprice').DataTable({
        paging: false,
        bFilter: false,
        ordering: false,
        aaSorting: [
            [1, 'asc']
        ],
        searching: true,
        dom: 't' // This shows just the table
    });

    $('#table-attr').DataTable({
        paging: false,
        bFilter: false,
        ordering: false,
        aaSorting: [
            [0, 'asc']
        ],
        searching: true,
        stripeClasses: [],
        dom: 't' // This shows just the table
    });

    $('.easytabs li.color-6 span').attr('id', 'cart');

    //$("#clone-qty").on("keyup", function () {
    //	$('#qty').val($(this).val());    
    //});
    $("#clone-qty").blur(function() {

        console.log($(this).val());
    });


    $("#clone-product-addtocart-button").click(function() {
        $('#product-addtocart-button').click();
    });

    $('#product_tabs_dev_tools_products_tabbed_contents').find('.row').removeClass('row');

    $("#global-search-option-type").click(function() {
        $("#global-search-option-list").slideToggle();
    });

    $("#global-search-option-list li").on("click", function() {
        var _val = $(this).attr('data-id');
        var _text = $(this).text();
        $('#global-search-option').val(_val);
        $("#global-search-option-list").slideUp();

        $('.s').attr("placeholder", "Search for " + _text);
    });

    $("#global-search-option-list li:first-child").trigger('click');

    $('#downloadable-links-list li span label').each(function() {
        $(this).parent().addClass('shortcut-dl');
        var data = $(this).text();
        var arr = data.split('/');

        //$(this).parent().parent().addClass(arr[0]);
        $(this).text('');

        //$(this).parent().find('a').text(arr[1]);
        $(this).parent().find('a').addClass(arr[0]);
    });

    //$("#downloadable-links-list li").on("click", function () {
    //	$(this).find('a').trigger('click');
    //});

    $("#downloadable-links-list li").click(function() {
        $(this).find("a").click();
    });




    $('.shortcut-dl').on("click", function() {
        var id = $(this).attr('id');
        $('#catch_' + id).trigger('click');
    });

    var segment_1_clean;
    setTimeout(function() {
        var pathArray = window.location.pathname.split('/'); //the url
        var segment_1 = pathArray[1]; //first segment appnotes.html
        var segment_clean = segment_1.split('.'); //split appnotes.html into 2
        segment_1_clean = segment_clean[0]; //split appnotes 
        if (segment_1_clean == 'appnotes') {
            $('ul.easytabs li.color-2').css('display', 'none');
            $('div.field__item.even h1').css('padding-top', '15px');
            $('span.label a').html('Download');
            //$('.panel-pane.pane-block.pane-views-4bcaaff60f402d0331a6eb1ca2f3f87e').css('display', 'none');
            $('.product-options-bottom').css('display', 'none');
            console.log(segment_1_clean);
            $('#swichable-title .pane-content h1').html('App Note Selector');


            $('#cat-option').val('27');

        }
        var t = $('#cat-option').val();
        if (t == 27) {
            $('.views-exposed-form label').html('Search for App Notes');
            var prod_found = $(".view-header").text();
            var res = prod_found.replace("Products", "App Note(s)");
            $('.view-header').text(res);
			$("#global-search-option-list li:last-child").trigger('click');
        } else {
            $('.views-exposed-form label').html('Search for Products');
			$("#global-search-option-list li:first-child").trigger('click');
        }
        if (segment_1_clean == 'customer') {
            $('div.block.block-account div.block-content ul').attr("class", "customer-options");
        }
        $('#table-tprice thead tr th').removeAttr('style');
    }, 10);

    var hash = window.location.hash;
    var tprice_info = $('#tprice-inner').html();
    $('.pane-tier-content').html(tprice_info);

    console.log(hash);
    $("#rfq").on("click", function() {

        window.location.href = 'http://4dlabs.com.au/dev/contact-us?department=sales-support';
    });

    $(".easytabs li.color-6 a").on("click", function() {

        location.hash = $('.easytabs li.color-6 a').attr('href');
        var prud_info = $('.pane-product-data').html();

        $('#product_tabs_price_and_availability_products_tabbed_contents').html(prud_info);
    });

    if (hash = 'product_tabs_price_and_availability_products_tabbed_contents') {

        var prud_info = $('.pane-product-data').html();
        $('#product_tabs_price_and_availability_products_tabbed_contents').html(prud_info);

    }

    $(".owl-carousel2").owlCarousel({
        pagination: false,
        navigation: true,
        items: 1,
        addClassActive: true,
        itemsCustom: [
            [0, 1],
            [320, 1],
            [480, 2],
            [700, 3],
            [975, 2],
            [1200, 2],
            [1400, 2],
            [1600, 2]
        ],
    });

    $(window).resize(function() {
        set_size();
    });

    set_size();



    if ($('body').hasClass('catalog-category-view')) {
        $('#swichable-title').html('<div class="pane-content">' +
            '<h1>Product Selector</h1>' +
            '</div>');
    }
    $('.flexslider').flexslider({
        animation: "slide",
        prevText: "",
        nextText: ""
    });

    $('.latest_news').flexslider({
        animation: "fade",
        prevText: "",
        nextText: ""
    });

    $('.product_img').flexslider({
        animation: "fade",
        animationLoop: true,
        randomize: true,
        controlNav: false,
        slideshowSpeed: getRandomInt(1000, 5000)
    });

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }

    function set_size() {

        var sw = $(window).width();
        var sh = $(window).height();

        var iw = $('.col-full').width();
        var remW = (sw - iw);
        var disW = (remW / 2) + 5;
        var navH = $('#header').height();
        var ah = (sh - navH);
        var sldrH = (ah / 100) * 47;
        var ftreH = (ah / 100) * 36;

        var fH = $('#footer-wrapper').height();
        var fhH = $('#header').height() + 50;

        var mcH = sh - (fH + fhH);

        console.log('screen width : ' + sw);
        console.log('screen height : ' + sh);

        console.log('inner width : ' + iw);
        console.log('actual height : ' + ah);
        console.log('slider height : ' + Math.floor(sldrH));
        console.log('feature height : ' + Math.floor(ftreH));

        console.log('devided distance width : ' + disW);

        //$( '<div id="masked" style="position: fixed; top: 0px;left: 0px;z-index: 999999;height: 40px; background: #f4f4f4; width:'+disW+'px; "></div>').insertBefore( "#header" );

        var lW = (iw / 100) * 30;

        $('#logo').css({
            "width": lW + "px",
            "height": navH + "px"
        });
        $('.flexslider .slides img').css({
            "height": Math.floor(sldrH) + "px"
        });
        $('.flexslider .slides li').css({
            "height": Math.floor(sldrH) + "px",
            "background-size": "100% " + Math.floor(sldrH) + "px"
        });
        var xxx = $('#header').height();
        //$('#inner-wrapper').css({"padding-top": xxx+"px !important"});
        $('.site-container').css({
            "min-height": (ah - fH) + "px"
        });
        $('#inner-wrapper').attr("style", "padding-top: '+xxx+'px !important");
    }

});