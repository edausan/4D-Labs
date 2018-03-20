$(function() {
    var formInputs = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li .account-form input');
    var searchBtn   = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper nav.navigation-bar ul li a#search');
    var searchBar   = $('header.header-wrapper section.search-bar-wrapper');
    var clearBtn    = $('header.header-wrapper section.search-bar-wrapper form.search-bar span.clear-btn');
    var searchInput = $('header.header-wrapper section.search-bar-wrapper form.search-bar input');

    var accountBtn  = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li a#account');
    var accountForm = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li .account-form');

    var accFormCloseBtn = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li .account-form span.close-form-btn');

    searchBtn.click(function() {
        closeAccForm();
        closeLang();
        if (searchBar.hasClass('goDown')) {
            searchBar.removeClass('goDown');
            $(this).removeClass('searching');
            searchInput.val('');
        } else {
            $(this).addClass('searching');
            searchBar.addClass('goDown');
        }
    });


    clearBtn.click(function() {
        searchInput.val('');
    });


    accFormCloseBtn.click(function() {
        closeAccForm();
    });

    accountBtn.click(function() {
        searchBar.removeClass('goDown');
        searchBtn.removeClass('searching');
        closeLang();
        if (accountForm.hasClass('viewForm')) {            
            closeAccForm();
        } else {
            $(this).addClass('accForm');
            accountForm.addClass('viewForm');

            setTimeout(function() {
                accountForm.css({ 'opacity':'1', 'top':'100%'});
            }, 300);
        }
    });


    function closeAccForm() {
        $('.notif').hide();
        formInputs.val('');
        accountBtn.removeClass('accForm');
        accountForm.css({ 'opacity':'0', 'top':'10%'});
        setTimeout(function() {
            accountForm.removeClass('viewForm');
        }, 300);
    }


    var langWrap = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.languages-wrapper');
    var languageBtn = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li a#languages');
    var languages = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.languages-wrapper ul li a');
    var selectedLang = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li a#languages span.lang');
    var selectedLangName = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li a#languages span#lang-name');

    languageBtn.click(function() {
        searchBar.removeClass('goDown');
        searchBtn.removeClass('searching');
        closeAccForm();
        if (langWrap.hasClass('viewLang')) {            
            closeLang();
        } else {
            $(this).addClass('langView');
            langWrap.addClass('viewLang');

            setTimeout(function() {
                langWrap.css({ 'opacity':'1', 'top':'140%'});
            }, 300);
        }
    });

    var recLang;

    languages.click(function() {

        recLang = selectedLang.attr('class');
        var langId = $(this).attr('id');
        var langName = $(this).text();
        selectedLangName.text(langName);
        selectedLang.removeClass(''+recLang+'').addClass('lang lang-'+ langId +'');
        closeLang();

    });

    function closeLang() {
        languageBtn.removeClass('langView');
        langWrap.css({ 'opacity':'0', 'top':'10%'});
        setTimeout(function() {
            langWrap.removeClass('viewLang');
        }, 300);
    }



    // To Top Button
    var toTop = $('div.to-top');
    var headerHeight = $('header.header-wrapper').height();

    $(window).scroll(function() {

        var winScroll = $(this).scrollTop();

        if (winScroll >= headerHeight) {
            toTop.addClass('active');
        } else {
            toTop.removeClass('active');
        }
    });


    toTop.click(function() {
        $('html, body').animate({scrollTop : 0},800);
    });



    var breadLinks = $('ul.breadcrumbs-list li:last-child a');

    breadLinks.removeAttr('href');
    

    var lastSupProcessor = $('details.appnote-cat-details ul.appnote-detail-list #supported-processor a:last-child');
    var lastSupEnvironment = $('details.appnote-cat-details ul.appnote-detail-list li.appnote-detail ul.env-list li:last-child');

    lastSupProcessor.each(function() {
        removeComma($(this));
    });

    lastSupEnvironment.each(function() {
        removeComma($(this));
    });

    function removeComma(elem) {
        var lastTxt = elem.text().replace(',','');
        elem.text(lastTxt);
    }



    var closeUpdate = $('section.updates-wrapper button#close-update');
    var updateLinks = $('section.updates-wrapper article.updates-container ul li a');
    var par;
    

    closeUpdate.click(function() {
        var par = $(this).parents('section.updates-wrapper');
        par.remove();
    });

    updateLinks.click(function() {
        var par = $(this).parents('section.updates-wrapper');
        par.remove();
    });

    // About page nav
    $(document).on('click', 'ul.about-nav-list a[href^="#"]', function(e) {
        $(this).addClass('activeAbout')
        $(this).parent('li').siblings().children('a.activeAbout').removeClass('activeAbout');

        // target element id
        var id = $(this).attr('href');
    
        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }
    
        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();
    
        // top position relative to the document
        var pos = $id.offset().top;
    
        // animated top scrolling
        $('body, html').animate({scrollTop: pos});
    });


    var aboutNav            =   $('section.about-wrapper nav.about-nav');
    if (aboutNav.length) {
        var aboutNavTop         =   aboutNav.offset().top;
    }
    
    var descList            =   $('section.about-wrapper article.about-description ul.desc-list');
    var aboutBanner         =   $('section.about-wrapper article.about-desc .overlay');
    var addntlBanner        =   $('section.about-wrapper article#addtnl-1');

    var navbarFixed = $(document).find('section.navigation-container');

    $(window).scroll(function() {
        var winScroll = $(this).scrollTop();
        
        if (winScroll >= aboutNavTop) {
            aboutNav.addClass('fixed-top');
            descList.addClass('moveDesc');
            aboutBanner.css({'opacity':''+ (winScroll - aboutNavTop)/300 +''});
        } else {
            aboutNav.removeClass('fixed-top');
            descList.removeClass('moveDesc');
        }


        if (winScroll > 1) {
            navbarFixed.addClass('fixed');
        } else {
            navbarFixed.removeClass('fixed');
        }
    });


    var teamModal = $('section.about-wrapper article.team-modal');
    var closeModalBtn = teamModal.children('button');

    $(document).on('click', 'section.about-wrapper #modal article.team-modal button#close', function() {
        $(this).parents('#modal').removeClass('showTeam');
        $('body').css({'overflow':'auto'});
    });


    $(document).on('click', 'section.about-wrapper section.team ul.team-list li.team-member a', function(e) {
        
        var activeTeam = $(this).attr('id');       

        teamModal.addClass('showTeam');

        var post_id = activeTeam;
        e.preventDefault();

        $('section.about-wrapper #modal').load('team-modal.php', {'team-id': ''+post_id}).addClass('showTeam');
        $('body').css({'overflow':'hidden'});

    });

    
    var aboutIconFig = $('section.about-wrapper article.about-desc ul li figure');
    var aboutFigParent = aboutIconFig.parent();
    var aboutLastFigParent  =   $('section.about-wrapper article#addtnl-2 ul li');

    aboutFigParent.each(function() {
        var p   =   $(this);
        var c = 'figure';
        parentHeight(p, c);
    });

    aboutLastFigParent.each(function() {
        var p   =   $(this);
        var c = 'figure';
        parentHeight(p, c);
    });

    function parentHeight(p, c) {
        var ph = p.height();
        p.children(c).css({'height':''+ph+'px'});
    }


    
    var navlink     =   $('nav.navigation-bar ul li a');
    var underline   =   $('nav.navigation-bar ul .underline');
    var width       =   0;
    var left        =   0;
    var navLinkId;
    var navActiveLinkId;
    var navActiveLinkWidth  =   0;

    navlink.each(function() {
        if ($(this).hasClass('nav-active')) {
            navActiveLinkId = $(this).attr('id');
            navActiveLinkWidth = $(this).width();
        } else {
            width = 0;
            left = 0;
        }
        width = navActiveLinkWidth;
        navLinkCheck(navActiveLinkId);
    });

    navlink.mouseover(function() {
        
        navLinkId   = $(this).attr('id');
        width       = $(this).width();
        left        = 0;

        navLinkCheck(navLinkId);
        
    }).mouseleave(function() {
        if (navActiveLinkId == undefined) {
            width = 0 - 20;
            moveUnderline(navLinkId, width, left);
        } else {
            width = navActiveLinkWidth;
            navLinkCheck(navActiveLinkId);
        }
    });


    function navLinkCheck(navLinkId) {
        if (navLinkId == 'products') {
            left = 0;
            moveUnderline(navLinkId, width, left);

        } else if (navLinkId == 'solutions') {
            left = 14.5;
            moveUnderline(navLinkId, width, left);

        } else if (navLinkId == 'app-notes') {
            left = 29.4;
            moveUnderline(navLinkId, width, left);

        } else if (navLinkId == 'support') {
            left = 44.7;
            moveUnderline(navLinkId, width, left);

        } else if (navLinkId == 'about') {
            left = 57.8;
            moveUnderline(navLinkId, width, left);

        } else if (navLinkId == 'parametric-search') {
            left = 68;
            moveUnderline(navLinkId, width, left);
        }
        
    }

    function moveUnderline(navLinkId, width, left) {
        width = width + 20;        
        underline.css({ 'width':''+width+'px', 'left':''+left+'%' });
    }
    









    // --------------------------------------------------
    // ----- delete the codes below ---------------------
    // ----- this is only a sample form validation ------
    // --------------------------------------------------

    var emailAdd = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li .account-form input#email-add');
    var password = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li .account-form input#password');
    var submitBtn = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li .account-form button#submit');
    var notif = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li .account-form p.notif');

    submitBtn.click(function() {
        $('.notif').show();
        $('#notif-msg').remove();

        var email = emailAdd.val();
        var pass = password.val();

        if(email == 'your@email.com' && pass == 'samplepassword') {
            
            $('.notif').show();
            $('#notif-msg').remove();
            notif.addClass('valid').removeClass('notvalid').append('<span id="notif-msg">Thank You for Logging in.</span>');
        } else {
            
            $('.notif').show();
            $('#notif-msg').remove();
            notif.addClass('notvalid').removeClass('valid').append("<span id='notif-msg'>You email and password is incorrect or doesn't match.</span>");
        }

    });

    
    formInputs.keydown(function(e) {
        if (e.keyCode == 13) {
            submitBtn.click();
        }
    });
    // --------------------------------------------------


    
});