$(function() {

    var dataTR =  $('section.parametric-wrapper .parametric-table-wrapper table#para-tb-2 tbody tr');
    var prodTR =  $('section.parametric-wrapper .parametric-table-wrapper table#para-tb-1 tbody tr');

    dataTR.each(function(i) {
        prodTR.eq(''+i+'').height($(this).height());
        i++;
    });

    var dataCatCbox = $('section.parametric-wrapper .parametric-table-wrapper table.parametric-table thead tr th .th-wrapper ul li input[type="checkbox"]');

    dataCatCbox.change(function() {

        if ($(this).is(':checked')) {
            $(this).siblings('label').css({'color':'#0099FF'});
        } else {
            $(this).siblings('label').css({'color':'black'});
        }
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

});