// DOCUMENT READY
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
	
	// IE8 Bug Fix for fontawesome menu icon
	if($('html').hasClass('lt-ie9')) {
			var head = document.getElementsByTagName('head')[0],
			style = document.createElement('style');
		style.type = 'text/css';
		style.styleSheet.cssText = ':before,:after{content:none !important';
		head.appendChild(style);
		setTimeout(function(){
			head.removeChild(style);
		}, 0);
	}
	
	// Initiaite Browser Detect from functions.js:
	BrowserDetect.init();
    // document.write("You are using <b>" + BrowserDetect.browser + "</b> with version <b>" + BrowserDetect.version + "</b>");
	// identity: "Chrome", "Explorer", "Firefox", "Safari", "Opera" 
	// ex: if(BrowserDetect.browser == 'Firefox') { //do something... }
	
	/************************************************************
	BUILT IN SCRIPTS:
	************************************************************/
	// ANIMATE SOMETHING BASED ON URL HASH
	var hash = window.location.hash;
	/* if(hash == '#div-id') { 
			// do something
		}
	*/
	
	// PLACEHOLDER BEHAVIOR FOR FORMS
	// Reference: http://mathiasbynens.github.io/jquery-placeholder
	$('input, textarea').placeholder();
	
	// Add bootstrap's clearfix classes if div has class of "clear"
	$('.clear').each(function(i,e){
		
		$(e).addClass('clearfix visible-xs-block');
		
	});
	
	/************************************************************
	CUSTOM CODING:
	************************************************************/
	
	
	
	/************************************************************
	WINDOW RESIZE (if needed)
	************************************************************/
	$(window).resize(function(){
	
		if($(window).width() >= '768') { // ipad
			
		} else {
			
		}
		
		// IE8 Bug Fix for fontawesome menu icon
		if($('html').hasClass('lt-ie9')) {
				var head = document.getElementsByTagName('head')[0],
				style = document.createElement('style');
			style.type = 'text/css';
			style.styleSheet.cssText = ':before,:after{content:none !important';
			head.appendChild(style);
			setTimeout(function(){
				head.removeChild(style);
			}, 0);
		}
	
	});
	
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

// ON LOAD
$(window).load(function(){
	/************************************************************
	BUILT IN SCRIPTS:
	************************************************************/
	
	
	/************************************************************
	CUSTOM CODING:
	************************************************************/
	
});