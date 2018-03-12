$(function() {

    var prodThumbItem   =   $('ul.diagram-thumb-list li');
    var thumbWrapper    =   $(document).find('figure.diagram-thumb .diagram-thumb-wrapper');

    prodThumbItem.click(function() { 
        $(this).addClass('active-thumb').siblings().removeClass('active-thumb');
        var thumbData = $(this).attr('data-move');
        thumbWrapper.css({'transform':'translate3d(-'+ thumbData +'%, 0, 0)'});
    });

});