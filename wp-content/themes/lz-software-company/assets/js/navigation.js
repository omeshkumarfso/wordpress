/* global LZSoftwareCompanyScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

function lz_software_company_open() {
	window.lz_software_company_mobileMenu=true;
	jQuery(".sidenav").addClass('show');
}
function lz_software_company_close() {
	window.lz_software_company_mobileMenu=false;
	jQuery(".sidenav").removeClass('show');
}
	window.lz_software_company_currentfocus=null;
  	lz_software_company_checkfocusdElement();
	var lz_software_company_body = document.querySelector('body');
	lz_software_company_body.addEventListener('keyup', lz_software_company_check_tab_press);
	var lz_software_company_gotoHome = false;
	var lz_software_company_gotoClose = false;
	window.lz_software_company_mobileMenu=false;
 	function lz_software_company_checkfocusdElement(){
	 	if(window.lz_software_company_currentfocus=document.activeElement.className){
		 	window.lz_software_company_currentfocus=document.activeElement.className;
	 	}
 	}
	function lz_software_company_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.lz_software_company_mobileMenu){
			if (!e.shiftKey) {
				if(lz_software_company_gotoHome) {
					jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.responsive-menu").is(":focus")) {
				lz_software_company_gotoHome = true;
			} else {
				lz_software_company_gotoHome = false;
			}

		}else{

			if(window.lz_software_company_currentfocus=="mobiletoggle"){
				jQuery( "" ).focus();
			}
			}
		}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.lz_software_company_currentfocus=="header-search"){
				jQuery(".mobiletoggle").focus();
			}else{
				if(window.lz_software_company_mobileMenu){
				if(lz_software_company_gotoClose){
					jQuery("a.closebtn.responsive-menu").focus();
				}
				if (jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
					lz_software_company_gotoClose = true;
				} else {
					lz_software_company_gotoClose = false;
				}
			
			}else{

			if(window.lz_software_company_mobileMenu){
			}
			}

			}
		}
		}
	 	lz_software_company_checkfocusdElement();
	}