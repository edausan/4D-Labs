$(function() {

    var searchInput = $('header.header-wrapper nav.nav-wrapper section.menu-container article.menu-bar section.menu-wrapper form.search-form input');
    var searchForm = $('header.header-wrapper nav.nav-wrapper section.menu-container article.menu-bar section.menu-wrapper form.search-form');
    var searchIcon = $('header.header-wrapper nav.nav-wrapper section.menu-container article.menu-bar section.menu-wrapper form.search-form span');

    searchInput.focus(function() {

        searchForm.addClass('focused');
        searchIcon.addClass('focus');

    }).blur(function() {

        searchForm.removeClass('focused');
        searchIcon.removeClass('focus');

    });



});