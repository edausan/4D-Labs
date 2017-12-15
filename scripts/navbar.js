$(function() {

    var searchBtn   = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper nav.navigation-bar ul li a#search');
    var searchBar   = $('header.header-wrapper section.search-bar-wrapper');
    var clearBtn    = $('header.header-wrapper section.search-bar-wrapper form.search-bar span.clear-btn');
    var searchInput = $('header.header-wrapper section.search-bar-wrapper form.search-bar input');

    var accountBtn  = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li a#account');
    var accountForm = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form');

    var accFormCloseBtn = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form span.close-form-btn');

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

        console.log(winScroll);

        if (winScroll >= headerHeight) {
            toTop.addClass('active');
            // alert('top');
        } else {
            toTop.removeClass('active');
        }


    });


    toTop.click(function() {
        $('html, body').animate({scrollTop : 0},800);
    });
    









    // --------------------------------------------------
    // ----- delete the codes below ---------------------
    // ----- this is only a sample form validation ------
    // --------------------------------------------------

    var emailAdd = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form input#email-add');
    var password = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form input#password');
    var submitBtn = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form button#submit');
    var notif = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form p.notif');

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

    var formInputs = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form input');

    formInputs.keydown(function(e) {
        if (e.keyCode == 13) {
            submitBtn.click();
        }
    });
    // --------------------------------------------------


    
});