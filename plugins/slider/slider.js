/************************************************************************************************
* Slider Plugin JS
* Description: Convenient and nice time saver for creating a slider. 
* Author: Thomas Dintrone
* Designer: John Lantz
* Version 1.0
************************************************************************************************/
function slider(sliderName, settings){
	// settings
    var config = {
        //'dollarPosition': [0, 0, 0, 0, 0],
        'width': '100%',
		'height': '530px',
		'title' : 'Gallery'
		//'row': [],
		//'border': [],
    };
    if ( settings ){$.extend(config, settings);}
	
	// Set Width & Height for the slider:
	$(sliderName).css({ width:config.width, 'min-height':config.height });
	
	// Set Width & Height for each slide:
	var slideWidth = $(sliderName).width();
	var slideHeight = $(sliderName).height() - 30; // 30px is the height of the nav
	
	$(sliderName + ' div.slide').height(slideHeight).width(slideWidth);
	
	// Set Width & Height for slider wrapper
	var slides = $('div.slide').length // count how many slides there are
	var wrapwidth = slides * slideWidth; // Multiply # of slides by slide width
	
	$('.slideWrap').width(wrapwidth);
	
	// Add Nav Buttons
	$(sliderName).append('<div class="sliderNav"><a href="#" id="prev"><img src="img/prev.png"></a><p class="sliderTitle">'+config.title+'</p><a href="#" id="next"><img src="img/next.png"></a></div><!-- END .sliderNav -->');
	
	// Navigation Animation
	var counter = 1;
	
	$('.sliderNav #next').on({
		click: function(){
			counter = counter + 1;
			
			$('div.sliderNav a').css({ 'visibility':'visible' }); 
			if(counter == slides) { $(this).css({ 'visibility':'hidden' }); }
			
			$('.slideWrap').animate({ left:'-='+slideWidth, opacity:.5 }).animate({ opacity: 1 });	
			
			return false;
		}
	});
	
	$('.sliderNav #prev').on({
		click: function(){
			counter = counter - 1;
			
			$('div.sliderNav a').css({ 'visibility':'visible' }); 
			if(counter == 1) { $(this).css({ 'visibility':'hidden' }); }
			
			$('.slideWrap').animate({ left:'+='+slideWidth, opacity:.5 }).animate({ opacity: 1 });	
			
			return false;
		}
	});
}