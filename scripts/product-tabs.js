$(function() {
    console.log('Product-tabs JS');
    
    // Product Tabs
    var tabs        = $('section.product-tabs article.tabs-wrapper ul.tabs li.tab');
    var tabContent  = $('section.product-tabs article.tab-content');
    var orderTab = $('section.product-tabs article.tabs-wrapper ul.tabs li.tab.order');

    tabs.click(function() {
        var tabId = $(this).attr('id');
        $(this).addClass('active').siblings().removeClass('active');

        tabContent.children('#'+ tabId +'').removeClass('tab-hidden').siblings().addClass('tab-hidden');

        if (orderTab.hasClass('active')) {
            $(this).parent('ul.tabs').addClass('orderActive');
        } else {
            $(this).parent('ul.tabs').removeClass('orderActive');
        }
    });



    $(window).ready(function() {
        if (window.location.href == "http://localhost:7880/4DLabs-dev/goldelox#product-page-tabs" || window.location.href == "http://localhost:7880/4DLabs-dev/diablo16#product-page-tabs" || window.location.href == "http://localhost:7880/4DLabs-dev/picaso#product-page-tabs" || window.location.href == "http://localhost:7880/4DLabs-dev/picaso-Lite#product-page-tabs" || window.location.href == 'http://localhost:7885/4DL-upload/goldelox#product-page-tabs' || window.location.href == 'http://localhost:7885/4DL-upload/diablo16#product-page-tabs' || window.location.href == 'http://localhost:7885/4DL-upload/picaso#product-page-tabs' || window.location.href == 'http://localhost:7885/4DL-upload/picaso-Lite#product-page-tabs') {

            var activeTab   =   $(document).find('#prod-active-tab').val();
            $('section.product-tabs article.tabs-wrapper ul.tabs li#'+activeTab+'').addClass('active').siblings().removeClass('active');
            tabContent.children('#'+ activeTab +'').removeClass('tab-hidden').siblings().addClass('tab-hidden');
            console.log(activeTab);

        }
    });
    

    
    

    

});