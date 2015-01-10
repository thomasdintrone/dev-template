$(function(){
	/************************************************************
	SET UP THE BASICS:
	************************************************************/
	// Load PrettyPhoto (Lightbox)
	//$("a[rel^='prettyPhoto']").prettyPhoto();
	
	// For ie10 Selection => reflected in css/browsers.css
	var b = document.documentElement;
	b.setAttribute('data-useragent',  navigator.userAgent);
	b.setAttribute('data-platform', navigator.platform );
	
	/************************************************************
	CUSTOM CODING:
	************************************************************/
	
	
	/************************************************************
	REPSONSIVE (if needed)
	************************************************************/
	if($(window).width() == '768') { // ipad
			
	} else {
							 
	}
	
	// OR? - haven't tested this yet...
	var isiPad = navigator.userAgent.match(/iPad/i) != null;
	function isiPhone(){
		return (
			//Detect iPhone
			(navigator.platform.indexOf("iPhone") != -1) ||
			//Detect iPod
			(navigator.platform.indexOf("iPod") != -1)
		);
	}
});