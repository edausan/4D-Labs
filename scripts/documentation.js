$(function() {


    $('#datasheet-list').change(function() {

        if ($(this).val() != 'All') {
            var dataList = $(this).val();
            $(this).siblings('#datasheet-search-input').removeClass('hidden').attr('placeholder', 'Search '+dataList+' Datasheet');
        } else {
            $(this).siblings('#datasheet-search-input').addClass('hidden');
        }

    });

});