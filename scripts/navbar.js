$(function() {

    var searchBtn   = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper nav.navigation-bar ul li a#search');
    var searchBar   = $('header.header-wrapper section.search-bar-wrapper');
    var clearBtn    = $('header.header-wrapper section.search-bar-wrapper form.search-bar span.clear-btn');
    var searchInput = $('header.header-wrapper section.search-bar-wrapper form.search-bar input');

    var accountBtn  = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li a#account');
    var accountForm = $('header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li form.account-form');

    searchBtn.click(function() {
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

    accountBtn.click(function() {

        if (accountForm.hasClass('viewForm')) {
            $(this).removeClass('accForm');
            accountForm.removeClass('viewForm');
        } else {
            $(this).addClass('accForm');
            accountForm.addClass('viewForm');
        }


    });

});