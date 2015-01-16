/* Custom jQuery Functions can go here */

/******************************************************** 
SET HEIGHT/WIDTH TO AUTO

Reference: http://css-tricks.com/snippets/jquery/animate-heightwidth-to-auto/
Usage:
$(".animateHeight").bind("click", function(e){
    $(".test").animateAuto("height", 1000); 
});

$(".animateWidth").bind("click", function(e){
    $(".test").animateAuto("width", 1000); 
});

$(".animateBoth").bind("click", function(e){
    $(".test").animateAuto("both", 1000); 
});
********************************************************/
jQuery.fn.animateAuto = function(prop, speed, callback){
    var elem, height, width;
    return this.each(function(i, el){
        el = jQuery(el), elem = el.clone().css({"height":"auto","width":"auto"}).appendTo("body");
        height = elem.css("height"),
        width = elem.css("width"),
        elem.remove();
        
        if(prop === "height")
            el.animate({"height":height}, speed, callback);
        else if(prop === "width")
            el.animate({"width":width}, speed, callback);  
        else if(prop === "both")
            el.animate({"width":width,"height":height}, speed, callback);
    });  
}

/******************************************************** 
DELAY TILL AIMATION IS DONE
********************************************************/
var waitForFinalEvent = (function () {
	  var timers = {};
	  return function (callback, ms, uniqueId) {
		if (!uniqueId) {
		  uniqueId = "Don't call this twice without a uniqueId";
		}
		if (timers[uniqueId]) {
		  clearTimeout (timers[uniqueId]);
		}
		timers[uniqueId] = setTimeout(callback, ms);
	  };
	})();
/*
USAGE:
$(window).resize(function () {
		waitForFinalEvent(function(){
		  
		  // PERFORM AWESOME CODE HERE
		  
		});
		  
		}, 500, "some unique string");
	});
*/


/******************************************************** 
SORT BY CLICK
********************************************************/
function sortByClick(trigger, elementsToHide, elementsToSort) {
	$(trigger).on({ 
		click: function(e){
						
			$(elementsToHide).each(function (index, element) {
				$(element).animate({ height:0, width:0, margin:0, opacity:0 });
			});
			$(elementsToSort).each(function (index, element) {
				$(element).animate({  });
			});
							
			return false;
		}
	});
}

/******************************************************** 
OPEN HOME SLIDES
********************************************************/
function openSlide(trigger, slide, settings) {
			// settings
			var config = {
				//'dollarPosition': [0, 0, 0, 0, 0],
				'theme': 'green',
			};
			if ( settings ){$.extend(config, settings);}
			
			slide = slide.find('article');
			
			// Remove class for window resize padding
			slide.removeClass('unresizeable');
			
			
			// Define Colors:
			slide.find('div.story').each(function(i,e){
				$(e).removeClass('green blue red purple').addClass(config.theme);
			});
			
			$('div.storyboxWrap').removeClass('green blue red purple').addClass(config.theme);
				
			// Begin Animation
			$('div.storiesWrap').animate({ opacity:1 });
			
			slide.animate({ 'padding-top':'110px' }, 1000).addClass('unresizeable');
			slide.find('p.description').animate({ opacity:0 }, 500, function(){
				slide.find('p.description').css({ visibility:'hidden' });
			});
			trigger.animate({ top:'-120px', opacity:0 }, 1100, function(){
				trigger.css({ visibility:'hidden' });
			});
			slide.find('h1 span').animate({ fontSize:'40px' }, 1000);
			
			slide.find('.storiesWrap').animate({ 'margin-top':'-150px' }, 1000, function(){
				slide.parent('section').addClass('scroll').addClass('selected');
			});
}


/******************************************************** 
SLIDE RESET
********************************************************/
function slideReset() {
	$('section.slide2').removeClass('selected');
	$('section.interiorSlide').css({ zIndex:10, height:0 }).removeClass('scroll');
	$('div.storiesWrap').css({ marginTop:'300px', opacity:0 });
	$('section article a#arrow').css({ top:0, 'visibility':'visible', opacity:1 });
	$('p.description').css({ 'visibility':'visible', opacity:1 });
	$('section.interiorSlide h1 span').css({ fontSize:'76px' });
	$('section.interiorSlide article').css({ paddingTop:'324px' });
	
	$('div.introText').each(function(i,e) {
		var topPadding	= (($(window).height() - $(e).height())/2) + 50;
		$(e).parent('div').parent('article').animate({ paddingTop: topPadding });
	});
	
}

/******************************************************** 
DETECT DEVICES
********************************************************/
// iPad
function isiPad(){
    return (navigator.platform.indexOf("iPad") != -1);
}

// iPhone
function isiPhone(){
    return (
        //Detect iPhone
        (navigator.platform.indexOf("iPhone") != -1) ||
        //Detect iPod
        (navigator.platform.indexOf("iPod") != -1)
    );
}

/*
USAGE:
if(isiPad()) {
	// do stuff
}
*/

/******************************************************** 
SCROLL TO
********************************************************/
function goToByScroll(id){
      $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}

/******************************************************** 
SWAP ELEMENTS
********************************************************/
jQuery.fn.swapWith = function(to) {
    return this.each(function() {
        var copy_to = $(to).clone(true);
        var copy_from = $(this).clone(true);
        $(to).replaceWith(copy_from);
        $(this).replaceWith(copy_to);
    });
};

// Usage: $(selector1).swapWith(selector2);

/******************************************************** 
PARSE VIDEO TYPE
********************************************************/
function parseVideo(url) {
    // - Supported YouTube URL formats:
    //   - http://www.youtube.com/watch?v=My2FRPA3Gf8
    //   - http://youtu.be/My2FRPA3Gf8
    //   - https://youtube.googleapis.com/v/My2FRPA3Gf8
    // - Supported Vimeo URL formats:
    //   - http://vimeo.com/25451551
    //   - http://player.vimeo.com/video/25451551
    // - Also supports relative URLs:
    //   - //player.vimeo.com/video/25451551

    url.match(/(http:|https:|)\/\/(player.|www.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/);

    if (RegExp.$3.indexOf('youtu') > -1) {
        var type = 'youtube';
    } else if (RegExp.$3.indexOf('vimeo') > -1) {
        var type = 'vimeo';
    }

    return {
        type: type,
        id: RegExp.$6
    };
}

/************************************************************
BROWSER DETECT
************************************************************/
	var BrowserDetect = {
        init: function () {
            this.browser = this.searchString(this.dataBrowser) || "Other";
            this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
        },
        searchString: function (data) {
            for (var i = 0; i < data.length; i++) {
                var dataString = data[i].string;
                this.versionSearchString = data[i].subString;

                if (dataString.indexOf(data[i].subString) !== -1) {
                    return data[i].identity;
                }
            }
        },
        searchVersion: function (dataString) {
            var index = dataString.indexOf(this.versionSearchString);
            if (index === -1) {
                return;
            }

            var rv = dataString.indexOf("rv:");
            if (this.versionSearchString === "Trident" && rv !== -1) {
                return parseFloat(dataString.substring(rv + 3));
            } else {
                return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
            }
        },

        dataBrowser: [
            {string: navigator.userAgent, subString: "Chrome", identity: "Chrome"},
            {string: navigator.userAgent, subString: "MSIE", identity: "Explorer"},
            {string: navigator.userAgent, subString: "Trident", identity: "Explorer"},
            {string: navigator.userAgent, subString: "Firefox", identity: "Firefox"},
            {string: navigator.userAgent, subString: "Safari", identity: "Safari"},
            {string: navigator.userAgent, subString: "Opera", identity: "Opera"}
        ]

    };