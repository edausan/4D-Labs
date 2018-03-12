$(function() {

    var showAsideBtn = $('button#showAside');
    var hideAsideBtn = $('button#hideAside');

    showAsideBtn.click(function() {
        $(document).find('aside.sidebar-wrapper').addClass('showAside');
        hideAsideBtn.addClass('showHideAside');
    });

    hideAsideBtn.click(function() {
        $(document).find('aside.sidebar-wrapper').removeClass('showAside');
        $(this).removeClass('showHideAside');
    });
});