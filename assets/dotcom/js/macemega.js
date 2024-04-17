


jQuery(document).ready(function () {
	jQuery("#macemega").menuzord({
		align: "right",
		trigger: "click"
	});

	jQuery('main,#main').click(function (e) {
		jQuery(".activearrow").remove();
		jQuery(".megamenu").fadeOut("fast");
	});
});

jQuery(window).bind("load", function () {
	jQuery("#mmenu").find(".mm-navbar__title[href]").text("BACK");
});


document.addEventListener(
	"DOMContentLoaded", () => {

		const menu = new Mmenu("#mmenu", {

			"offCanvas": {
				"position": "top"
			}

		});

		const api = menu.API;

		document.querySelector(".hbgrclose")
			.addEventListener(
				"click", () => {
					api.close();
				}
			);
	}
);

(function ($) {

	jQuery.fn.menuzord = function (options) {
		var settings;
		$.extend(settings = {
			showSpeed: 300,
			hideSpeed: 300,
			trigger: "hover",
			showDelay: 0,
			hideDelay: 0,
			effect: "fade",
			align: "left",
			responsive: true,
			animation: "none",
			indentChildren: true,
			indicatorFirstLevel: "",
			indicatorSecondLevel: "",
			scrollable: true,
			scrollableMaxHeight: 400
		}, options);

		// variables
		var menu_container = jQuery(this);
		var menu = jQuery(menu_container).children(".menuzord-menu");
		var menu_li = jQuery(menu).find("li");
		var showHideButton;
		var mobileWidthBase = 70;
		var bigScreenFlag = 2000; // a number greater than "mobileWidthBase"
		var smallScreenFlag = 20; // a number less than "mobileWidthBase"

		// navigation alignment
		if (settings.align == "right") {
			jQuery(menu).addClass("menuzord-right");
		}

		// scrollable menu
		if (settings.scrollable) {
			if (settings.responsive) {
				jQuery(menu).css("max-height", settings.scrollableMaxHeight).addClass("scrollable").append("<li class='scrollable-fix'></li>");
			}
		}

		// shows a dropdown
		function showDropdown(item) {
			jQuery(".activearrow").remove();
			jQuery(item).find("a").after("<span class='activearrow animate__animated animate__bounceInRight'></span");
			if (settings.effect == "fade")
				jQuery(item).children(".dropdown, .megamenu").stop(true, true).delay(settings.showDelay).fadeIn(settings.showSpeed).addClass(settings.animation);
			else
				jQuery(item).children(".dropdown, .megamenu").stop(true, true).delay(settings.showDelay).slideDown(settings.showSpeed).addClass(settings.animation);
			jQuery(".megamenu").removeClass("animate__animated animate__slideOutDown animate__faster");

		}

		// hides a dropdown
		function hideDropdown(item) {
			jQuery(".activearrow").remove();

			if (settings.effect == "fade")
				jQuery(item).children(".dropdown, .megamenu").stop(true, true).delay(settings.hideDelay).fadeOut(settings.hideSpeed).removeClass(settings.animation);

			else
				jQuery(item).children(".dropdown, .megamenu").stop(true, true).delay(settings.hideDelay).slideUp(settings.hideSpeed).removeClass(settings.animation);

			jQuery(item).children(".dropdown, .megamenu").find(".dropdown, .megamenu").stop(true, true).delay(settings.hideDelay).fadeOut(settings.hideSpeed);
			//jQuery(item).children(".dropdown, .megamenu")
			jQuery(".megamenu").addClass("animate__animated animate__slideOutDown animate__faster");
		}

		// landscape mode
		function landscapeMode() {
			jQuery(menu).find(".dropdown, .megamenu").hide(0);

			if (navigator.userAgent.match(/Mobi/i) || window.navigator.msMaxTouchPoints > 0 || settings.trigger == "click") {
				jQuery(".menuzord-menu > li > a, .menuzord-menu ul.dropdown li a").bind("click touchstart", function (e) {
					e.stopPropagation();
					e.preventDefault();
					jQuery(this).parent("li").siblings("li").find(".dropdown, .megamenu").stop(true, true).fadeOut(300);
					if (jQuery(this).siblings(".dropdown, .megamenu").css("display") == "none") {
						showDropdown(jQuery(this).parent("li"));
						return false;
					}
					else {
						hideDropdown(jQuery(this).parent("li"));
					}
					window.location.href = jQuery(this).attr("href");
				});
				jQuery(document).bind("click.menu touchstart.menu", function (ev) {
					if (jQuery(ev.target).closest(".menuzord").length == 0) {
						jQuery(".menuzord-menu").find(".dropdown, .megamenu").fadeOut(300);
					}
				});
			}
			else {
				jQuery(menu_li).bind("mouseenter", function () {
					showDropdown(this);
				}).bind("mouseleave", function () {
					hideDropdown(this);
				});
			}
		}


		// Fix the submenu on the right side
		function fixSubmenuRight() {
			var submenus = jQuery(menu).children("li").children(".dropdown, .megamenu");
			if (jQuery(window).innerWidth() > mobileWidthBase) {
				var menu_width = jQuery(menu_container).outerWidth(true);
				for (var i = 0; i < submenus.length; i++) {
					if (jQuery(submenus[i]).parent("li").position().left + jQuery(submenus[i]).outerWidth() > menu_width) {
						jQuery(submenus[i]).css("right", 0);
					}
					else {
						if (menu_width == jQuery(submenus[i]).outerWidth() || (menu_width - jQuery(submenus[i]).outerWidth()) < 20) {
							jQuery(submenus[i]).css("left", 0);
						}
						if (jQuery(submenus[i]).parent("li").position().left + jQuery(submenus[i]).outerWidth() < menu_width) {
							jQuery(submenus[i]).css("right", "auto");
						}
					}
				}
			}
		}

		// show the bar to show/hide menu items on mobile
		function showMobileBar() {
			jQuery(menu).hide(0);
			jQuery(showHideButton).show(0).click(function () {
				if (jQuery(menu).css("display") == "none")
					jQuery(menu).slideDown(settings.showSpeed);
				else
					jQuery(menu).slideUp(settings.hideSpeed).find(".dropdown, .megamenu").hide(settings.hideSpeed);
			});
		}

		// hide the bar to show/hide menu items on mobile
		function hideMobileBar() {
			jQuery(menu).show(0);
			jQuery(showHideButton).hide(0);
		}

		// unbind events
		function unbindEvents() {
			jQuery(menu_container).find("li, a").unbind();
			jQuery(document).unbind("click.menu touchstart.menu");
		}

		// return window's width
		function windowWidth() {
			return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		}

		// navigation start function
		function startMenu() {
			fixSubmenuRight();
			if (windowWidth() <= mobileWidthBase && bigScreenFlag > mobileWidthBase) {
				unbindEvents();
				if (settings.responsive) {
					showMobileBar();
					//portraitMode();
				}
				else {
					landscapeMode();
				}
			}
			if (windowWidth() > mobileWidthBase && smallScreenFlag <= mobileWidthBase) {
				unbindEvents();
				hideMobileBar();
				landscapeMode();
			}
			bigScreenFlag = windowWidth();
			smallScreenFlag = windowWidth();
			//menuTabs();
			/* IE8 fix */
			if (/MSIE (\d+\.\d+);/.test(navigator.userAgent) && windowWidth() < mobileWidthBase) {
				var ieversion = new Number(RegExp.$1);
				if (ieversion == 8) {
					jQuery(showHideButton).hide(0);
					jQuery(menu).show(0);
					unbindEvents();
					landscapeMode();
				}
			}
		}

		startMenu();
		jQuery(window).resize(function () {
			//startMenu();
			//fixSubmenuRight();
		});

	}
}(jQuery));

