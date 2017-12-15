$(function() {

    // Product Tabs
    var tabs        = $('article.product-details-wrapper section.product-tabs article.tabs-wrapper ul.tabs li.tab');
    var tabContent  = $('article.product-details-wrapper section.product-tabs article.tab-content');
    var orderTab = $('article.product-details-wrapper section.product-tabs article.tabs-wrapper ul.tabs li.tab.order');

    tabs.click(function() {
        var tabId = $(this).attr('id');
        console.log(tabId);
        $(this).addClass('active').siblings().removeClass('active');

        tabContent.children('#'+ tabId +'').removeClass('tab-hidden').siblings().addClass('tab-hidden');

        if (orderTab.hasClass('active')) {
            $(this).parent('ul.tabs').addClass('orderActive');
        } else {
            $(this).parent('ul.tabs').removeClass('orderActive');
        }
    });

    

    

});