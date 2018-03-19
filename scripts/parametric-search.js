$(function() {

    var dataTR =  $('section.parametric-wrapper .parametric-table-wrapper table#para-tb-2 tbody tr');
    var prodTR =  $('section.parametric-wrapper .parametric-table-wrapper table#para-tb-1 tbody tr');

    dataTR.each(function(i) {
        prodTR.eq(''+i+'').height($(this).height());
        i++;
    });

    var dataCatCbox =   $(document).find('section.parametric-wrapper .parametric-table-wrapper table.parametric-table thead tr th .th-wrapper ul li input[type="checkbox"]');
    var filter      =   $(document).find('.filter-reset label');

    dataCatCbox.change(function() {
        if ($(this).is(':checked')) {
            $(this).siblings('label').css({'color':'#327B83'});
            $(this).parents('.th-wrapper').siblings('.filter-reset').find('label').show();

        } else {
            $(this).siblings('label').css({'color':'black'});
            $(this).parents('.th-wrapper').siblings('.filter-reset').find('label').hide();
        }
    });

    filter.click(function() {
        $(this).hide();
        var th_ID = $(this).parents('th').prop('id');
        var checkedBox  =   $(this).parent('.filter-reset').siblings('.th-wrapper').find('input[type="checkbox"]');    
        var cboxLabel   =   $(this).parent('.filter-reset').siblings('.th-wrapper').find('label')  
        checkedBox.prop('checked', false);
        cboxLabel.css({'color':'black'});

        console.log(th_ID);
        
        $(document).find('table.parametric-table thead tr th#'+th_ID+' .th-wrapper').removeClass('changed');
    });

    var paraSel = $('section.parametric-wrapper .para-category-wrapper select#para-category');
    var paraSelLabel = $('section.parametric-wrapper .para-category-wrapper h3#para-category-label');

    paraSel.change(function() {
        paraSelLabel.text($(this).val());
    });

    var filterController = $('section.parametric-wrapper .menu-bar button#filter-control');

    filterController.click(function() {
        $(this).toggleClass('hide show');

        if ($(this).hasClass('show')) {
            $(this).children('#filter-control-text').text('Show ');
            $(document).find('.para-input-wrapper').hide(300);
        } else {
            $(this).children('#filter-control-text').text('Hide ');
            $(document).find('.para-input-wrapper').show(300);
        }

    });

    var pageSizeBtn = $('section.parametric-wrapper .menu-bar .page-size-wrapper button');

    pageSizeBtn.click(function() {
        $(this).addClass('active-size');
        $(this).siblings('button').removeClass('active-size');
    });

    var th = $('section.parametric-wrapper .parametric-table-wrapper table.parametric-table thead tr th');

    th.click(function() {
        $(this).find('#sorter i').toggleClass('fa-arrow-down fa-arrow-up');
        $(this).find('#sorter').removeAttr("hidden");
        $(this).siblings('th').find('#sorter').attr('hidden', true);
    });


    var tbBodyRow = $('section.parametric-wrapper tbody').find('tr');

    tbBodyRow.mouseover(function() {
        var rowId = $(this).attr('id');
        $(this).css({'background':'whitesmoke'});
        $('#'+rowId+'').css({'background':'whitesmoke'});
    }).mouseleave(function() {
        var rowId = $(this).attr('id');
        $(this).css({'background':'white'});
        $('#'+rowId+'').css({'background':'white'});
    });

    var compareCbox =   $('section.parametric-wrapper .parametric-table-wrapper table.parametric-table tbody tr td#para-prod-cbox input.compare-cbox');
    var compareBtn  =   $('section.parametric-wrapper .parametric-table-wrapper table.parametric-table#para-tb-1 thead tr th#compare button#compare-btn');
    var x = 0;

    compareCbox.change(function() {
        if ($(this).is(':checked')) {
            x++;
        } else {
            x--;
        }
        
        if (x >= 2) {
            compareBtn.removeAttr('disabled');
        } else {
            compareBtn.attr('disabled', true);
        }
        console.log(x);
    });

    var comparePopup = $(document).find('section.compare-popup-wrapper');

    $(document).find('section.compare-popup-wrapper').hide();

    compareBtn.click(function() {
        $(this).toggleClass('showCompare hideCompare');

        if ($(this).hasClass('showCompare')) {
            $(document).find('section.compare-popup-wrapper').show();

            setTimeout(function() {
                $(document).find('section.compare-popup-wrapper').addClass('pop');
            }, 250);
            
        } else {
            $(document).find('section.compare-popup-wrapper').removeClass('pop');
            setTimeout(function() {
                $(document).find('section.compare-popup-wrapper').hide();
            }, 250);
        }

    });

    $(document).on('click', '#compare-x-btn', function() {
        $(document).find('section.compare-popup-wrapper').removeClass('pop');
        compareBtn.toggleClass('showCompare hideCompare');

        setTimeout(function() {
            $(document).find('section.compare-popup-wrapper').hide();
        }, 250);
    });


    var resetFilterBtn  =   $('#reset-filter');
    var paraCbox        =   $('section.parametric-wrapper .parametric-table-wrapper table.parametric-table thead tr#para-input-wrapper th .th-wrapper input');
    var thWrap          =   $('section.parametric-wrapper .parametric-table-wrapper table.parametric-table thead tr th .th-wrapper');

    resetFilterBtn.click(function() {
        paraCbox.prop('checked', false);
        $('section.parametric-wrapper .parametric-table-wrapper table.parametric-table thead tr th .th-wrapper ul li label').css({'color':'black'});
        thWrap.removeClass('changed');
    });

    paraCbox.change(function() {
        var thID = $(this).parents('th').attr('id');

        if ($(this).is(':checked')) {
            $(document).find('table.parametric-table thead tr th#'+thID+' .th-wrapper').addClass('changed');
        } else {
            if (!$(this).parent('li').siblings('li').children('input').is(':checked')) {
                $(document).find('table.parametric-table thead tr th#'+thID+' .th-wrapper').removeClass('changed');
            }
        }

    });



    var quantityInput   =   $('section.parametric-wrapper .parametric-table-wrapper table.parametric-table tbody tr td #prod-quantity input');
    var scrollTable     =   $('section.parametric-wrapper .parametric-table-wrapper .para-tb-2-wrapper');

    scrollTable.scroll(function() {
        quantityInput.blur();
    }).mousedown(function() {
        quantityInput.blur();
    });

    
    quantityInput.click(function() {
        $(this).focus();
    });
    



    

});