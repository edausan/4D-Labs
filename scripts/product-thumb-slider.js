$(function() {

    var prodThumbItem   =   $('ul.diagram-thumb-list li');
    var thumbWrapper    =   $(document).find('figure.diagram-thumb .diagram-thumb-wrapper');
    var ctrlLeft        =   $('button#ctrl-left');
    var ctrlRight       =   $('button#ctrl-right');
    var thumbController =   $('button.thumb-slide-control');
    
    var slides = [0, 25,50,75];
    var x = 0;
    var slide;

    thumbController.click(function() {
        if ($(this).attr('id') == 'ctrl-left') {
            x--;
        } else {
            x++;
        }
    
        if (x <= 0) {
            x = 0;
            thumbWrapper.css({'transform':'translate3d(-'+ slides[x] +'%, 0, 0)'});
            prodThumbItem.eq(x).addClass('active-thumb').siblings().removeClass('active-thumb');
        } else if(x >= slides.length) {
            x = 3;
        }
        prodThumbItem.eq(x).addClass('active-thumb').siblings().removeClass('active-thumb');
        thumbWrapper.css({'transform':'translate3d(-'+ slides[x] +'%, 0, 0)'});
        
    }).mouseover(function() {
        clearInterval(slide);
    }).mouseleave(function() {
        thumbSlide(x);
    });

    

    prodThumbItem.click(function() {
        $(this).addClass('active-thumb').siblings().removeClass('active-thumb');
        var thumbData = $(this).attr('data-move');
        thumbWrapper.css({'transform':'translate3d(-'+ thumbData +'%, 0, 0)'});
        clearInterval(slide);
        if (thumbData == 0) {
            x = 0;
            thumbSlide(x);
        } else if(thumbData == 25) {
            x = 1;
            thumbSlide(x);
        } else if(thumbData == 50) {
            x = 2;
            thumbSlide(x);
        } else if(thumbData == 75) {
            x = 3;
            thumbSlide(x);
        }
    });

    thumbWrapper.mouseover(function() {
        clearInterval(slide);
    }).mouseleave(function() {
        thumbSlide(x);
    });

    function thumbSlide(x) {
        slide = setInterval(function() {
            if (x > slides.length) {
                x = 0;
            }
            prodThumbItem.eq(x).addClass('active-thumb').siblings().removeClass('active-thumb');
            thumbWrapper.css({'transform':'translate3d(-'+ slides[x] +'%, 0, 0)'});
            x++;
            x = x;
        }, 3000);

    }

    thumbSlide(x);

});