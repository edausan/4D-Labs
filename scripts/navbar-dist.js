$(function(){function a(){$(".notif").hide(),n.val(""),l.removeClass("accForm"),p.css({opacity:"0",top:"10%"}),setTimeout(function(){p.removeClass("viewForm")},300)}function e(){v.removeClass("langView"),u.css({opacity:"0",top:"10%"}),setTimeout(function(){u.removeClass("viewLang")},300)}function r(a){var e=a.text().replace(",","");a.text(e)}function i(a,e){var r=a.height();a.children(e).css({height:r+"px"})}var n=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form input"),t=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper nav.navigation-bar ul li a#search"),o=$("header.header-wrapper section.search-bar-wrapper"),s=$("header.header-wrapper section.search-bar-wrapper form.search-bar span.clear-btn"),c=$("header.header-wrapper section.search-bar-wrapper form.search-bar input"),l=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li a#account"),p=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form"),d=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form span.close-form-btn");t.click(function(){a(),e(),o.hasClass("goDown")?(o.removeClass("goDown"),$(this).removeClass("searching"),c.val("")):($(this).addClass("searching"),o.addClass("goDown"))}),s.click(function(){c.val("")}),d.click(function(){a()}),l.click(function(){o.removeClass("goDown"),t.removeClass("searching"),e(),p.hasClass("viewForm")?a():($(this).addClass("accForm"),p.addClass("viewForm"),setTimeout(function(){p.css({opacity:"1",top:"100%"})},300))});var u=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.languages-wrapper"),v=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li a#languages"),h=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.languages-wrapper ul li a"),m=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li a#languages span.lang"),w=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li a#languages span#lang-name");v.click(function(){o.removeClass("goDown"),t.removeClass("searching"),a(),u.hasClass("viewLang")?e():($(this).addClass("langView"),u.addClass("viewLang"),setTimeout(function(){u.css({opacity:"1",top:"140%"})},300))});var g;h.click(function(){g=m.attr("class");var a=$(this).attr("id"),r=$(this).text();w.text(r),m.removeClass(""+g).addClass("lang lang-"+a),e()});var f=$("div.to-top"),b=$("header.header-wrapper").height();$(window).scroll(function(){$(this).scrollTop()>=b?f.addClass("active"):f.removeClass("active")}),f.click(function(){$("html, body").animate({scrollTop:0},800)});$("ul.breadcrumbs-list li:last-child a").removeAttr("href");var C=$("details.appnote-cat-details ul.appnote-detail-list #supported-processor a:last-child"),k=$("details.appnote-cat-details ul.appnote-detail-list li.appnote-detail ul.env-list li:last-child");C.each(function(){r($(this))}),k.each(function(){r($(this))});var y=$("section.updates-wrapper button#close-update"),T=$("section.updates-wrapper article.updates-container ul li a");y.click(function(){$(this).parents("section.updates-wrapper").remove()}),T.click(function(){$(this).parents("section.updates-wrapper").remove()}),$(document).on("click",'ul.about-nav-list a[href^="#"]',function(a){$(this).addClass("activeAbout"),$(this).parent("li").siblings().children("a.activeAbout").removeClass("activeAbout");var e=$(this).attr("href"),r=$(e);if(0!==r.length){a.preventDefault();var i=r.offset().top;$("body, html").animate({scrollTop:i})}});var D=$("section.about-wrapper nav.about-nav");if(D.length)var x=D.offset().top;var F=$("section.about-wrapper article.about-description ul.desc-list"),A=$("section.about-wrapper article.about-desc .overlay");$("section.about-wrapper article#addtnl-1");$(window).scroll(function(){var a=$(this).scrollTop();a>=x?(D.addClass("fixed-top"),F.addClass("moveDesc"),A.css({opacity:""+(a-x)/300})):(D.removeClass("fixed-top"),F.removeClass("moveDesc"))});var L=$("section.about-wrapper article.team-modal");L.children("button");$(document).on("click","section.about-wrapper #modal article.team-modal button#close",function(){$(this).parents("#modal").removeClass("showTeam"),$("body").css({overflow:"auto"})}),$(document).on("click","section.about-wrapper section.team ul.team-list li.team-member a",function(a){var e=$(this).attr("id");L.addClass("showTeam");var r=e;a.preventDefault(),$("section.about-wrapper #modal").load("team-modal.php",{"team-id":""+r}).addClass("showTeam"),$("body").css({overflow:"hidden"})});var V=$("section.about-wrapper article.about-desc ul li figure").parent(),Y=$("section.about-wrapper article#addtnl-2 ul li");V.each(function(){i($(this),"figure")}),Y.each(function(){i($(this),"figure")});var j=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form input#email-add"),q=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form input#password"),z=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form button#submit"),B=$("header.header-wrapper section.navigation-wrapper section.navigation-container article.navbar-wrapper section.menu-bar ul li div.account-form p.notif");z.click(function(){$(".notif").show(),$("#notif-msg").remove();var a=j.val(),e=q.val();"your@email.com"==a&&"samplepassword"==e?($(".notif").show(),$("#notif-msg").remove(),B.addClass("valid").removeClass("notvalid").append('<span id="notif-msg">Thank You for Logging in.</span>')):($(".notif").show(),$("#notif-msg").remove(),B.addClass("notvalid").removeClass("valid").append("<span id='notif-msg'>You email and password is incorrect or doesn't match.</span>"))}),n.keydown(function(a){13==a.keyCode&&z.click()})});