/************************************************************************************************
* Lightbox Plugin JS
* Description: Convenient and nice time saver for creating a slider. 
* Author: Thomas Dintrone
* Designer: John Lantz
* Version 1.0
************************************************************************************************/
function lightbox(trigger, settings){
	// settings
    var config = {
        //'dollarPosition': [0, 0, 0, 0, 0],
        'width': '984px',
		'height': '694px',
		'share': false,
		//'title' : 'Gallery'
		//'row': [],
    };
    if ( settings ){$.extend(config, settings);}
	
	/************************ 
	* SET THE BASICS
	*************************/
	$('body').append('<!-- LIGHTBOX --><div id="overlay"><div id="lightboxWrap"><div class="lightboxNav"><a href="#" id="prev" class="nav"><img src="plugins/lightbox/img/prev.png"></a><a href="#" id="next" class="nav"><img src="plugins/lightbox/img/next.png"></a><p><a href="#" id="close">Close</a></p></div><!-- END .lightboxNav --><div class="lightboxContent"><div id="lightboxInner"></div></div><!-- END .lightboxContent --></div><!-- END #lightboxWrap --></div><!-- END #overlay --><!-- END OF LIGHTBOX -->')
	$('#overlay').css({ opacity: 0 });
	
	// Define width & height of window
	windowWidth 	= $(window).width();
	windowHeight	= $(window).height();
	
	$(window).resize(function() {
	  	windowWidth 	= $(window).width();
		windowHeight	= $(window).height();
	});
	
	// Define Lightbox height and Width
	lightboxWidth	= windowWidth - 250;
	lightboxHeight	= windowHeight - 150;
	
	//$('#lightboxWrap').css({ 'max-width': config.width, 'max-height': config.height }).width(lightboxWidth).height(lightboxHeight);
	$('#lightboxWrap').width(lightboxWidth).height(lightboxHeight);
	
	var slideCounter = 1;
	
	// Count # of lightbox elements
	var elements = $(trigger).length;
	
	// Define width of content wrapper
	var wrapperWidth = lightboxWidth;
	wrapperWidth = elements * wrapperWidth;
	$('div.lightboxContent').width(wrapperWidth);
	
	
	// Build the Lightbox wrapper
	var counter = 1;
	var container = $('#lightboxInner');
	$(trigger).each(function(i, e){
				
		var title 	= $(e).attr('title');
		var content = $(e).attr('href');
		var video	= '';
		var src 	= '';
		
		// Get the Image for sharing:
		if(counter == 1) { // the first video
			var img	= $(e).find('img.responsive').attr('src');
		} else {
			var img	= $(e).parent('div').parent('div').find('img.responsive').attr('src');
		}
		
		$(e).attr('rel', counter);
		
		video = parseVideo(content);
		
		// Check if video is vimeo or youtube
		if(video['type'] == 'vimeo') { 			
			src = '//player.vimeo.com/video/' + video['id'];
		}
		if(video['type'] == 'youtube') { 
			src = '//www.youtube.com/embed/' + video['id'];
		}
		
		
		$(container).append('<div class="lightboxSlide" id="'+counter+'"><div class="slideContent"><iframe src="'+src+'" width="500" height="282" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><div class="lightboxCaption"><h3>'+title+'</h3></div><!-- END .lightboxCaption --></div><!-- END .lightboxSlide -->');
		
		if(config.share == true) {
			
				var linkurl 	= 'http://stage2.curran-connors.com/oshkosh-csr-2013/';
				var linkname	= title;
				//var shareimg	= linkurl+'img/slide-innovation.jpg';
				var shareimg	= linkurl+img;
				
				
				$('#'+counter+' .lightboxCaption').append('<div id="share" href="#"><div class="shareButton"><img src="plugins/storybox/img/share.png"> Share</div><div class="shareHover"><a class="sbg-button sbg-button-facebook"  data-sbg-network="facebook"  data-sbg-url="'+linkurl+'"  data-sbg-title="'+linkname+'"  data-sbg-summary="'+linkname+'"  data-sbg-image="'+shareimg+'"  data-sbg-width="600"  data-sbg-height="368" ><i class="sbg-button-icon fa fa-facebook"></i></a><a class="sbg-button sbg-button-twitter"  data-sbg-network="twitter"  data-sbg-text="'+linkname+' '+linkurl+'"  data-sbg-via="oshkosh"  data-sbg-hashtags="oshkosh,innovation"  data-sbg-width="600"  data-sbg-height="258" ><i class="sbg-button-icon fa fa-twitter"></i></a><a class="sbg-button sbg-button-linkedin"  data-sbg-network="linkedin"  data-sbg-url="'+linkurl+'"  data-sbg-title="'+linkname+'"  data-sbg-source="Osh Kosh"  data-sbg-summary="'+linkname+'"  data-sbg-width="585"  data-sbg-height="471" ><i class="sbg-button-icon fa fa-linkedin"></i></a><a class="sbg-button sbg-button-google-plus"  data-sbg-network="google-plus"  data-sbg-url="'+linkurl+'"  data-sbg-width="500"  data-sbg-height="505" ><i class="sbg-button-icon fa fa-google-plus"></i></a><a class="sbg-button sbg-button-pinterest"  data-sbg-network="pinterest"  data-sbg-url="'+linkurl+'/"  data-sbg-media="'+shareimg+'"  data-sbg-description="'+linkname+'"  data-sbg-width="750"  data-sbg-height="322" ><i class="sbg-button-icon fa fa-pinterest"></i></a><a class="sbg-button sbg-button-email"  data-sbg-network="email"  data-sbg-subject="'+linkname+'"  data-sbg-body="Visit '+linkurl+'" ><i class="sbg-button-icon fa fa-envelope"></i></a></div></div>');
				
				// This plugin doesn't work in ie8 so we need a workaround:
				if($('html').hasClass('lt-ie9')) {
					
					//Facebook Icon
					share_for_ie8('a.sbg-button-facebook', 'http://facebook.com', 'window');
					
					//Twitter Icon
					share_for_ie8('a.sbg-button-twitter', 'http://twitter.com', 'window');
					
					//Linkedin Icon
					share_for_ie8('a.sbg-button-linkedin', 'http://linkedin.com', 'window');
					
					//Pinterest Icon
					share_for_ie8('a.sbg-button-pinterest', 'http://pinterest.com', 'window');
					
					//Google Icon
					share_for_ie8('a.sbg-button-google-plus', 'http://google.com/+', 'window');
					
					//Email Icon
					share_for_ie8('a.sbg-button-email', 'mailto:', 'email');
					
					$('div.shareHover a').on({
						click: function(){
							return true;
						}	
					});
					
					
				} else {
					$('body').append('<script type="text/javascript">sbg();</script>');
				}
				
		}
					
		counter++;
	});
	$('div.lightboxContent').html(container);
	
	// Define width of each slide
	$('div.lightboxSlide').width(lightboxWidth);
	
	// Define height of each iframe & caption
	var navHeight		= $('div.lightboxNav').height(); // height of the nav
	var slideHeight		= lightboxHeight - navHeight; // height of space to work width
	var iframeHeight	= slideHeight - 92;
	var captionHeight	= lightboxHeight - iframeHeight;
	captionHeight 	= captionHeight - 54; // padding top & bottom are 27px so: 27 * 2 = 54
	
	$('div.lightboxSlide iframe').height(iframeHeight);
	$('div.lightboxCaption').height(captionHeight);
		
	
	/************************ 
	* OPEN LIGHTBOX ON CLICK
	*************************/
	$(trigger).on({
		click: function(){
			width 	= $(window).width();
			height	= $(window).height();
			
			slideCounter = $(this).attr('rel')
			slideCounter = slideCounter - 1;
			
			var location = lightboxWidth;
			var location = slideCounter * location;
			
			$('div.lightboxContent').css({ left:'-'+location+'px' });
			
			// Reset for the left / right nav
			slideCounter = slideCounter + 1; 
			$('div.lightboxNav a').animate({ opacity:1 }).css({ visibility:'visible' });
			if(slideCounter == elements) { 
				$('div.lightboxNav a#next').animate({ opacity:0 }).css({ visibility:'hidden' }); 
			}
			if(slideCounter == 1) { 
				$('div.lightboxNav a#prev').animate({ opacity:0 }).css({ visibility:'hidden' }); 
			}
			
					
			$('body').addClass('hidden');
			$('#overlay').show().animate({ opacity:1 }, 'fast');
			$('#lightboxWrap').css({ "top": ((($('#overlay').height() - $('#lightboxWrap').outerHeight()) / 2) + $('#overlay').scrollTop() + "px") });
			
			return false;
		}
	});
	
	/************************ 
	* CLOSE LIGHTBOX 
	*************************/
	$('div.lightboxNav #close').on({
		click: function(){
			$('#overlay').animate({ opacity:0 }, 'fast', function(){
				$('#overlay').hide();
				$('body').removeClass('hidden');
			});
			
			return false;
		}
	});
	
	/************************ 
	* LIGHTBOX NAVIGATION
	*************************/
	$('div.lightboxNav a#next').on({
		click: function(){
			
			slideCounter = slideCounter + 1;
			
			$('div.lightboxNav a').animate({ opacity:1 }).css({ visibility:'visible' });
			if(slideCounter == elements) { 
				$('div.lightboxNav a#next').animate({ opacity:0 }).css({ visibility:'hidden' }); 
			}
			
			$('div.lightboxContent').animate({ left:'-='+lightboxWidth });
			
			return false;
		}
	});
	
	$('div.lightboxNav a#prev').on({
		click: function(){
			
			slideCounter = slideCounter - 1;
			
			$('div.lightboxNav a').animate({ opacity:1 }).css({ visibility:'visible' });
			if(slideCounter == 1) { 
				$('div.lightboxNav a#prev').animate({ opacity:0 }).css({ visibility:'hidden' }); 
			}
			
			$('div.lightboxContent').animate({ left:'+='+lightboxWidth });
			
			return false;
		}
	});
}