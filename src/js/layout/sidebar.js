"use strict";

// Class definition
var KTAppSidebar = function () {
	// Private variables
	var scroll;
	var sidebar;
	var toggle;

	var handleToggle = function () {
		var toggleObj = KTToggle.getInstance(toggle);

		if ( toggleObj === null) {
			return;
		}

		// Add a class to prevent sidebar hover effect after toggle click
		toggleObj.on('kt.toggle.change', function() {
			// Set animation state
			sidebar.classList.add('animating');
			
			// Wait till animation finishes
			setTimeout(function() {
				// Remove animation state
				sidebar.classList.remove('animating');
			}, 300);
		});

		// Store sidebar minimize state in cookie
		toggleObj.on('kt.toggle.changed', function() {
			// In server side check sidebar_minimize_state cookie 
			// value and add data-kt-app-sidebar-minimize="on" 
			// attribute to Body tag and "active" class to the toggle button
			var date = new Date(Date.now() + 30 * 24 * 60 * 60 * 1000); // 30 days from now

			KTCookie.set("sidebar_minimize_state", toggleObj.isEnabled() ? "on" : "off", {expires: date}); 
		});
	}

	var handleMenuScroll = function() {
		var menuActiveItem = scroll.querySelector(".menu-link.active");

		if ( !menuActiveItem ) {
			return;
		} 

		if ( KTUtil.isVisibleInContainer(menuActiveItem, scroll) === true) {
			return;
		}

		scroll.scroll({
			top: KTUtil.getRelativeTopPosition(menuActiveItem, scroll),
			behavior: 'smooth'
		});
	}

	// Public methods
	return {
		init: function () {
			// Elements
			toggle = document.querySelector('#kt_app_sidebar_toggle');
			scroll = document.querySelector('#kt_app_sidebar_navs_scroll');
			sidebar = document.querySelector('#kt_app_sidebar');

			if ( toggle ) {
				handleToggle();	
			}
			
			if ( scroll ) {
				handleMenuScroll();
			}
		}
	};
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	KTAppSidebar.init();
});