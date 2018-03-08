$(function() {
    
    $('details').details();

    function dynamicallyLoadScript(url) {
        var script = document.createElement("script"); // Make a script DOM node
        // script.setAttribute("async", "");
        script.src = url; // Set it's src to the provided URL
        document.body.appendChild(script); // Add it to the end of the head section of the page (could change 'head' to 'body' to add it to the end of the body section instead)
    }
    
    
    
    dynamicallyLoadScript('scripts/navbar.js');
    dynamicallyLoadScript('scripts/home.js');
    dynamicallyLoadScript('scripts/shop.js');
    dynamicallyLoadScript('scripts/register.js');
    dynamicallyLoadScript('scripts/product-tabs.js');
    dynamicallyLoadScript('scripts/support.js');
    dynamicallyLoadScript('scripts/mce.js');
    dynamicallyLoadScript('scripts/documentation.js');
    dynamicallyLoadScript('scripts/parametric-search.js');
    dynamicallyLoadScript('scripts/contact.js');
    dynamicallyLoadScript('scripts/news.js');
    dynamicallyLoadScript('scripts/product-thumb-slider.js');
    dynamicallyLoadScript('scripts/product-price.js');
    dynamicallyLoadScript('scripts/product-video-popup.js');
    dynamicallyLoadScript('scripts/mobile-navbar.js');
    dynamicallyLoadScript('scripts/fb.js');
    dynamicallyLoadScript('scripts/defer-video.js');
});



