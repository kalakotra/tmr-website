jQuery.noConflict();

(function($) {
	$(document).ready(function() {
		$(".hamburger").click(function() {
			$(this).toggleClass("is-active");
			$("#mobileMenu").toggleClass("is-active");
		});

		$("#mobileMenu .arrow").on("click", function() {
			var myHolder = $(this).parent();
			myHolder.toggleClass("active");
		});

		var lastScrollTop = 0;
		$(window).scroll(function() {
			/*if ($(document).scrollTop() > 100) {
				$('header').addClass('scrolled');
			} else {
				$('header').removeClass('scrolled');
			}*/

			st = $(this).scrollTop();
			if(st < lastScrollTop) {
				$('header').removeClass('scrolled');
			}
			else {
				if ($(this).scrollTop() > 100) {
					$('header').addClass('scrolled');
				} else {
					$('header').removeClass('scrolled');
				}
			}
			lastScrollTop = st;
		});

		$(".ContentBlockHolder button").on("click", function() {
			$(this).closest(".ContentBlockHolder").toggleClass("active").find(".textHolder").find("> div").slideToggle();
		});

		/*
		// Enable AOS in PageController::init() function first!!!
		AOS.init({
			// Global settings:
			disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
			startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
			initClassName: 'aos-init', // class applied after initialization
			animatedClassName: 'aos-animate', // class applied on animation
			useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
			disableMutationObserver: false, // disables automatic mutations' detections (advanced)
			debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
			throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


			// Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
			offset: 120, // offset (in px) from the original trigger point
			delay: 0, // values from 0 to 3000, with step 50ms
			duration: 800, // values from 0 to 3000, with step 50ms
			easing: 'ease', // default easing for AOS animations
			once: false, // whether animation should happen only once - while scrolling down
			mirror: false, // whether elements should animate out while scrolling past them
			anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

		});
		*/
	});
}(jQuery));
