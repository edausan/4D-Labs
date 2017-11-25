/*-----------------------------------------------------------------------------------*/
/* GENERAL SCRIPTS */
/*-----------------------------------------------------------------------------------*/

		function centerDropdown() {
		
			if ( jQuery(window).width() < 767 ) {
				jQuery('#main-nav li ul').each(function(){
			    	jQuery(this).css('margin-left', 0);
		    	});
		    	return;
			}
		
			jQuery('#main-nav li ul').each(function(){
				var li_width = jQuery(this).parent('li').width();
				li_width = ((li_width - 170) / 2) - 10;
				jQuery(this).css('margin-left', li_width);
			});
		
		}
		
		jQuery(document).ready(function($){
		
			// Table alt row styling
			jQuery( '.entry table tr:odd' ).addClass( 'alt-table-row' );
		
			// FitVids - Responsive Videos
			//jQuery( '.post, .widget, .panel, .page, #featured-slider .slide-media' ).fitVids();
		
			// Add class to parent menu items with JS until WP does this natively
			jQuery( 'ul.sub-menu, ul.children' ).parents( 'li' ).addClass( 'parent' );
		
		
			/**
			 * Navigation
			 */
			// Add the 'show-nav' class to the body when the nav toggle is clicked
			jQuery( '.nav-toggle' ).click(function(e) {
		
				// Prevent default behaviour
				e.preventDefault();
		
				// Add the 'show-nav' class
				jQuery( 'body' ).toggleClass( 'show-nav' );
		
				// Check if .top-navigation already exists
				if ( jQuery( '#navigation' ).find( '.top-navigation' ).size() ) return;
		
				// If it doesn't, clone it (so it will still appear when resizing the browser window in desktop orientation) and add it.
				jQuery( '#top .top-navigation' ).clone().appendTo( '#navigation .menus' );
			});
			
			/**
			 * Navigation
			 */
			// Add the 'show-nav' class to the body when the nav toggle is clicked
			jQuery( '#mini-nav-toggle' ).click(function(e) {
		
				// Prevent default behaviour
				e.preventDefault();
				jQuery( '.panel-col-first' ).slideToggle( 'slow' );
				// Add the 'show-nav' class
				//jQuery( 'body' ).toggleClass( 'show-nav' );
		
				// Check if .top-navigation already exists
				//if ( jQuery( '#navigation' ).find( '.top-navigation' ).size() ) return;
		
				// If it doesn't, clone it (so it will still appear when resizing the browser window in desktop orientation) and add it.
				//jQuery( '#top .top-navigation' ).clone().appendTo( '#navigation .menus' );
			});
			

			
			// Remove the 'show-nav' class from the body when the nav-close anchor is clicked
			jQuery('.nav-close').click(function(e) {
		
				// Prevent default behaviour
				e.preventDefault();
		
				// Remove the 'show-nav' class
				jQuery( 'body' ).removeClass( 'show-nav' );
			});
		
			// Remove 'show-nav' class from the body when user tabs outside of #navigation on handheld devices
			var hasParent = function(el, id) {
		        if (el) {
		            do {
		                if (el.id === id) {
		                    return true;
		                }
		                if (el.nodeType === 9) {
		                    break;
		                }
		            }
		            while((el = el.parentNode));
		        }
		        return false;
		    };
			if (jQuery(window).width() < 767) {
				if (jQuery('body')[0].addEventListener){
					document.addEventListener('touchstart', function(e) {
			        if ( jQuery( 'body' ).hasClass( 'show-nav' ) && !hasParent( e.target, 'navigation' ) ) {
				        // Prevent default behaviour
				        e.preventDefault();
		
				        // Remove the 'show-nav' class
				        jQuery( 'body' ).removeClass( 'show-nav' );
			        }
			    }, false);
				} else if (jQuery('body')[0].attachEvent){
					document.attachEvent('ontouchstart', function(e) {
			        if ( jQuery( 'body' ).hasClass( 'show-nav' ) && !hasParent( e.target, 'navigation' ) ) {
				        // Prevent default behaviour
				        e.preventDefault();
		
				        // Remove the 'show-nav' class
				        jQuery( 'body' ).removeClass( 'show-nav' );
			        }
			    });
				}
			}
		
			// Fix dropdowns in Android
			if ( navigator.userAgent.match(/Android/i) ) {
				jQuery( '.nav li:has(ul)' ).doubleTapToGo();
			}
		
			// Animate progress bar
			// Cheers! http://css-tricks.com/css3-progress-bars/
			// jQuery(".track > .handle").each(function() {
			// 	jQuery(this)
			// 		.data("origWidth", jQuery(this).width())
			// 		.width(0)
			// 		.animate({
			// 			width: jQuery(this).data("origWidth")
			// 		}, 1200);
			// }); 
		
			// Center nav menus
			centerDropdown();
		
		});
		
		jQuery(window).resize(function() {
			centerDropdown();
		});
	