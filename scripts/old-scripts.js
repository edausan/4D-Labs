$(function() {
    
    
    
        // DOM Caching
        // Caching the Sub-menu
        var subMenu = $('#header .sub-menu');
        var product = $('#header .sub-menu ul.submenu-list .submenu-item ul li a');
        var overviewImg = $('#header .sub-menu ul.submenu-list .submenu-item div.overview-wrapper img');
        var pageLink = $('#header .sub-menu ul.submenu-list .submenu-item div.overview-wrapper a');
    
        // hover event on the processors inside sub-menu
        product.mouseover(function() {
            var proId = $(this).attr('id');
    
            var src = 'img/'+ proId +'.png';
            var href = proId +'.php';
    
            overviewImg.attr('src', src).css({ 'opacity': '1' });
            pageLink.attr('href', href);
        });
    
        
        var navBottomLink = $('#header .nav-wrapper nav#navigation .menus ul.nav li a');
        var subMenuList = $('#header .sub-menu ul.submenu-list');
        var recentNav;
        var navId;
        var subMenuHeight;
    
        navBottomLink.mouseover(function() {
            recentNav = $(this).attr('id');
            
            navId = $(this).attr('id');
    
            subMenu.find('ul#'+ navId +'').addClass('showSubMenuContent').removeClass('hideSubMenuContent');
    
            setTimeout(function() {
                subMenu.find('ul#'+ navId +'').addClass('opaque');
            }, 300);
    
            subMenu.addClass('showSub').removeClass('hiddenSub');
    
            subMenuHeight = subMenu.find('ul#'+ navId +'').height();
    
            subHeight(subMenuHeight);
    
        }).mouseleave(function() {
    
            subMenu.addClass('hiddenSub').removeClass('showSub');
            $('ul#'+ recentNav +'').removeClass('showSubMenuContent opaque').addClass('hideSubMenuContent');
    
        });
    
    
        function subHeight() {
            subMenu.height(subMenuHeight);
        }
    
    
    
    
    
        subMenu.mouseover(function() {
    
            $(this).addClass('stay');
            $('ul#'+ navId +'').addClass('showSubMenuContent opaque').removeClass('hideSubMenuContent');
    
        }).mouseleave(function() {
    
            $(this).removeClass('stay');
            $('ul#'+ navId +'').removeClass('showSubMenuContent opaque').addClass('hideSubMenuContent');
    
        });
    
    
        var header = $('#header');
        var headerTop = header.offset().top;
    
        $(window).scroll(function() {
    
            var winScroll = $(this).scrollTop();
    
            if ($(this).width() <= 767) {
    
                    header.css({ 'top':'0px' });
    
            } else if ($(this).width() >= 768) {
    
                if (winScroll >= headerTop) {
                    header.css({ 'top':'0px' });
    
                } else {
    
                    header.css({ 
                        'top': headerTop - winScroll+'px' 
                    });
        
                }
    
            } 
    
        });
    
    
    
    
       
    
    
    });