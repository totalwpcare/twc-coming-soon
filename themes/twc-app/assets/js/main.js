(function($){
	"use strict";
	jQuery(document).on('ready', function () {

		// Sidebar Modal
        $(".navbar-menu .burger-menu").on('click',  function() {
			$('.sidebar-modal').toggleClass('active');
		});
        $(".sidebar-modal-close-btn").on('click',  function() {
			$('.sidebar-modal').removeClass('active');
		});

    });

    // WOW JS
	$(window).on ('load', function (){
        if ($(".wow").length) { 
            var wow = new WOW({
            boxClass:     'wow',      // Animated element css class (default is wow)
            animateClass: 'animated', // Animation css class (default is animated)
            offset:       20,         // Distance to the element when triggering the animation (default is 0)
            mobile:       true,       // Trigger animations on mobile devices (default is true)
            live:         true,       // Act on asynchronously loaded content (default is true)
          });
          wow.init();
        }
	});

	// Preloader JS
	$(window).on('load', function() {
		$('.preloader').fadeOut();
	});
    
}(jQuery));