/************************************************************************************************
* Storybox Plugin JS
* Description: Convenient and nice time saver for creating a slider. 
* Author: Thomas Dintrone
* Designer: John Lantz
* Version 1.0
************************************************************************************************/
function storybox(trigger, settings){
	// settings
    var config = {
        //'dollarPosition': [0, 0, 0, 0, 0],
        'width': '984px',
		'height': '694px',
		'share' : false,
		//'title' : 'Gallery'
		//'row': [],
    };
    if ( settings ){$.extend(config, settings);}
	
	// Set the basics
	$('body').append('<!-- STORYBOX --><div class="storyboxWrap"><div class="fullStoryNav"><a href="#" id="prev"><img src="plugins/storybox/img/prev.png"></a><a href="#" id="next"><img src="plugins/storybox/img/next.png"></a><p><a href="#" id="close">Close</a></p></div><!-- END .fullStoryNav --><div class="fullStoryWrap"><div class="left"><div class="storyContent"><h2></h2><p></p></div></div><!-- END .left --><div class="right"><img src="images/stories/1-large.jpg"></div><!-- END .right --></div><!-- END .fullStoryWrap --></div><!-- END .storyboxWrap --><!-- END STORYBOX -->');
	
	$('div.storiesWrap').css({ opacity:0 });
	
	// Show sharing icons:
	if(config.share == true) {
		$('body').append('<!-- AddToAny BEGIN --><script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script><!-- AddToAny END -->')
	}
	
	//$('.storybox').css({ opacity: 0 });
	//$('#lightboxWrap').width(config.width).height(config.height);
	
	//$('div.storybox .left, div.storybox .right, div.fullStoryNav').width($(window).width()/2);
	//$('div.storybox .right img').height($(window).height());
	
	
	// Stories Page
	$('div.story').each(function(i, e){
		// Check if landscape
		var storyImg 	= $(e).find('img.responsive');
		var imgWidth 	= storyImg.width();
		var imgHeight	= storyImg.height();
		
		if(imgWidth < imgHeight ) {
			storyImg.addClass('left');
			storyImg.height($(e).height());
		} else {
			storyImg.css({ width: '100%' });
		}  
		
		// Put Cover content in the center
		var coverWrap 		= $(e).find('.coverWrap');
		var storyHeight		= $(e).height();
		var coverWrapHeight	= coverWrap.height();
		
		coverWrapHeight 	= (storyHeight - coverWrapHeight) / 2;
		coverWrapHeight		= coverWrapHeight - 20;
		
		coverWrap.css({ top:coverWrapHeight });
		
		if(config.share == true) {
			
			var linkurl 	= 'http://stage2.curran-connors.com/oshkosh-csr-2013/';
			//var linkname	= $(e).find('h3').text().replace(' ', '%20').replace("'", '%27');
			var linkname	= $(e).find('h3').text();
			var shareimg	= linkurl+'img/slide-innovation.jpg';
			
			
			coverWrap.append('<div id="share" href="#"><div class="shareIcon"><img src="img/icon-share.png" class="share"></div><div class="shareHover"><a class="sbg-button sbg-button-facebook"  data-sbg-network="facebook"  data-sbg-url="'+linkurl+'"  data-sbg-title="'+linkname+'"  data-sbg-summary="'+linkname+'"  data-sbg-image="'+shareimg+'"  data-sbg-width="600"  data-sbg-height="368" ><i class="sbg-button-icon fa fa-facebook"></i></a><a class="sbg-button sbg-button-twitter"  data-sbg-network="twitter"  data-sbg-text="'+linkname+' '+linkurl+'"  data-sbg-via="oshkosh"  data-sbg-hashtags="oshkosh,innovation"  data-sbg-width="600"  data-sbg-height="258" ><i class="sbg-button-icon fa fa-twitter"></i></a><a class="sbg-button sbg-button-linkedin"  data-sbg-network="linkedin"  data-sbg-url="'+linkurl+'"  data-sbg-title="'+linkname+'"  data-sbg-source="Osh Kosh"  data-sbg-summary="'+linkname+'"  data-sbg-width="585"  data-sbg-height="471" ><i class="sbg-button-icon fa fa-linkedin"></i></a><a class="sbg-button sbg-button-google-plus"  data-sbg-network="google-plus"  data-sbg-url="'+linkurl+'"  data-sbg-width="500"  data-sbg-height="505" ><i class="sbg-button-icon fa fa-google-plus"></i></a><a class="sbg-button sbg-button-pinterest"  data-sbg-network="pinterest"  data-sbg-url="'+linkurl+'/"  data-sbg-media="'+shareimg+'"  data-sbg-description="'+linkname+'"  data-sbg-width="750"  data-sbg-height="322" ><i class="sbg-button-icon fa fa-pinterest"></i></a><a class="sbg-button sbg-button-email"  data-sbg-network="email"  data-sbg-subject="'+linkname+'"  data-sbg-body="Visit '+linkurl+'" ><i class="sbg-button-icon fa fa-envelope"></i></a></div></div>');

		}
	
		
	});
	
	if(config.share == true) {
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
					
					
				} else {
					$('body').append('<script type="text/javascript">sbg();</script>');
				}
		
		$('div.shareHover a').on({
			click: function(){
				return true;
			}	
		});
	}
	
	var slideCounter = 1;
 	var elementCount = 1;
	
	// Count # of lightbox elements
	// var elements = $(trigger).length; This counts EVERY INSTANCE will need to be updated later	
	//trigger	 = $('section.selected').find(trigger);
	elements = $(trigger).length; // This counts ONLY instance of each selected category
		
		
	// Build the Lightbox wrapper
	var container = $('div.storyboxWrap .right');
	
	/*var counter = 1;
	$(trigger).each(function(i, e){
			
		$(e).attr('rel', counter);
		$(e).parent('div').parent('div').parent('div.story').attr('rel', counter);
						
		counter++;
	});*/
	
	
	// Open Storybox
	$(trigger).on({
		click: function(){
			
			// Update elements
			elements 		= $('section.selected').find(trigger).length;
			
			var counter = 1;
			$('section.selected').find(trigger).each(function(i, e){
					
				$(e).attr('rel', counter);
				$(e).parent('div').parent('div').parent('div.story').attr('rel', counter);
								
				counter++;
			});
			
			
			container.find('iframe').remove();
			
			width 	= $(window).width();
			height	= $(window).height();
			
		
			$('section.slide2').removeClass('scroll');
			
			$('div.storyboxWrap').animate({ height:'100%' });
			
			slideCounter = $(this).attr('rel');
			slideCounter = slideCounter - 1;
			
			var id		= $(this).attr('rel');
			var story 	= $('div.story[rel='+id+']');
			var title 	= story.find('h3').text();
			var content	= story.find('p.full').html();
			var img		= story.find('img.responsive').attr('src');
			var videoId	= story.find('a#watchVideo').attr('href');
			
			// If no image
			if(story.find('img.responsive').length == 0) {
				img = 'img/slide-innovation.jpg';
			} 
			// If a video
			if(videoId != '#') {
				img = 'plugins/storybox/img/blank.png';
				
				video = parseVideo(videoId);
				
				// Check if video is vimeo or youtube
				if(video['type'] == 'vimeo') { 			
					src = '//player.vimeo.com/video/' + video['id'];
				}
				if(video['type'] == 'youtube') { 
					src = '//www.youtube.com/embed/' + video['id'];
				}
				
				$(container).append('<iframe src="'+src+'" width="500" height="282" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
				
			} 
						
			$('div.storyboxWrap .left h2').text(title);
			$('div.storyboxWrap .left p').html(content);
			$('div.storyboxWrap .right img').attr('src', img);
			
			$('div.storyboxWrap .left a').on({
				click: function(){
					return true;
				}	
			});
			
			if(config.share == true) {
			
				var linkurl 	= 'http://stage2.curran-connors.com/oshkosh-csr-2013/';
				//var linkname	= $(e).find('h3').text().replace(' ', '%20').replace("'", '%27');
				var linkname	= title;
				var shareimg	= linkurl+'img/slide-innovation.jpg';
				
				
				$('div.storyboxWrap .left').append('<div id="share" href="#"><div class="shareButton"><img src="plugins/storybox/img/share.png"> Share</div><div class="shareHover"><a class="sbg-button sbg-button-facebook"  data-sbg-network="facebook"  data-sbg-url="'+linkurl+'"  data-sbg-title="'+linkname+'"  data-sbg-summary="'+linkname+'"  data-sbg-image="'+shareimg+'"  data-sbg-width="600"  data-sbg-height="368" ><i class="sbg-button-icon fa fa-facebook"></i></a><a class="sbg-button sbg-button-twitter"  data-sbg-network="twitter"  data-sbg-text="'+linkname+' '+linkurl+'"  data-sbg-via="oshkosh"  data-sbg-hashtags="oshkosh,innovation"  data-sbg-width="600"  data-sbg-height="258" ><i class="sbg-button-icon fa fa-twitter"></i></a><a class="sbg-button sbg-button-linkedin"  data-sbg-network="linkedin"  data-sbg-url="'+linkurl+'"  data-sbg-title="'+linkname+'"  data-sbg-source="Osh Kosh"  data-sbg-summary="'+linkname+'"  data-sbg-width="585"  data-sbg-height="471" ><i class="sbg-button-icon fa fa-linkedin"></i></a><a class="sbg-button sbg-button-google-plus"  data-sbg-network="google-plus"  data-sbg-url="'+linkurl+'"  data-sbg-width="500"  data-sbg-height="505" ><i class="sbg-button-icon fa fa-google-plus"></i></a><a class="sbg-button sbg-button-pinterest"  data-sbg-network="pinterest"  data-sbg-url="'+linkurl+'/"  data-sbg-media="'+shareimg+'"  data-sbg-description="'+linkname+'"  data-sbg-width="750"  data-sbg-height="322" ><i class="sbg-button-icon fa fa-pinterest"></i></a><a class="sbg-button sbg-button-email"  data-sbg-network="email"  data-sbg-subject="'+linkname+'"  data-sbg-body="Visit '+linkurl+'" ><i class="sbg-button-icon fa fa-envelope"></i></a></div></div>');
				
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
					
					
				} else {
					$('body').append('<script type="text/javascript">sbg();</script>');
				}
				
			}
			
			
			// Reset for the left / right nav
			slideCounter = slideCounter + 1; 
			elementCount = elementCount + 1; 
			$('div.fullStoryNav a').animate({ opacity:1 }).css({ visibility:'visible' });
			if(slideCounter == elements) { 
			//if(elementCount == elements) { 
				$('div.fullStoryNav a#next').animate({ opacity:0 }).css({ visibility:'hidden' }); 
			}
			if(slideCounter == 1) { 
			//if(elementCount == 1) { 
				$('div.fullStoryNav a#prev').animate({ opacity:0 }).css({ visibility:'hidden' }); 
			}

			
			// Add Scrollbar
			$.mCustomScrollbar.defaults.scrollButtons.enable=true;
			var storyContent = $('div.storyContent');
			storyContent.height($(window).height() - 163);
			storyContent.mCustomScrollbar({ theme:"dark-3" });
			
			return false;
		}
	});
	
	// Close Storybox
	$('div.fullStoryNav #close').on({
		click: function(){			
			
			var storyBoxWrap = $('div.storyboxWrap');
			
			$('div.storyboxWrap').animate({ height:0 }, function(){
				$('body').removeClass('hidden');
				
				if(storyBoxWrap.hasClass('blue')) { //innovation
					$('section.innovationSlide').addClass('scroll');
				}
				if(storyBoxWrap.hasClass('purple')) { //operations
					$('section.operationsSlide').addClass('scroll');
				}
				if(storyBoxWrap.hasClass('turquoise')) { //our people
					$('section.ourPeopleSlide').addClass('scroll');
				}
				if(storyBoxWrap.hasClass('gold')) { //community
					$('section.communitySlide').addClass('scroll');
				}
				
				$('div.fullStoryWrap .left').find('#share').remove();
			});
			
			// Reset the rel
			$(trigger).each(function(i, e){
					
				$(e).attr('rel', '');
				$(e).parent('div').parent('div').parent('div.story').attr('rel', '');
								
			});
			
			return false;
		}
	});
	
	// Storybox Navigation
	$('div.fullStoryNav a#next').on({
		click: function(){
			// Update elements
			elements 	 = $('section.selected').find(trigger).length;
			elementCount = elementCount + 1;
			
			container.find('iframe').remove();
			slideCounter = slideCounter + 1;
			
			$('div.fullStoryNav a').animate({ opacity:1 }).css({ visibility:'visible' });
			if(slideCounter == elements) {  //This was the original counter which goes through ALL elements ("elements" var was updated as well)
			//if(elementCount == elements) { 
				$('div.fullStoryNav a#next').animate({ opacity:0 }).css({ visibility:'hidden' }); 
			}
			
			var id		= slideCounter
			var story 	= $('section.selected').find('div.story[rel='+id+']');
			var title 	= story.find('h3').text();
			var content	= story.find('p.full').html();
			var img		= story.find('img.responsive').attr('src')
			var videoId	= story.find('a#watchVideo').attr('href');
			
			// If no image
			if(story.find('img.responsive').length == 0) {
				img = 'img/slide-innovation.jpg';
			} 
			// If a video
			if(videoId != '#') {
				img = 'plugins/storybox/img/blank.png';
				
				video = parseVideo(videoId);
				
				// Check if video is vimeo or youtube
				if(video['type'] == 'vimeo') { 			
					src = '//player.vimeo.com/video/' + video['id'];
				}
				if(video['type'] == 'youtube') { 
					src = '//www.youtube.com/embed/' + video['id'];
				}
				
				$(container).append('<iframe src="'+src+'" width="500" height="282" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
				
			} 
			
			$('div.storyboxWrap .left h2, div.storyboxWrap .left p, div.storyboxWrap .left a, div.storyboxWrap .right, div.fullStoryWrap .left #share, div.storyContent').animate({ opacity:0 }, function(){
				$('div.storyboxWrap .left h2').text(title);
				$('div.storyboxWrap .left p').html(content);
				$('div.storyboxWrap .right img').attr('src', img);
				
				$('div.fullStoryWrap .left').find('#share').remove();
				
				if(config.share == true) {
			
				var linkurl 	= 'http://stage2.curran-connors.com/oshkosh-csr-2013/';
				//var linkname	= $(e).find('h3').text().replace(' ', '%20').replace("'", '%27');
				var linkname	= title;
				var shareimg	= linkurl+'img/slide-innovation.jpg';
				
				
				$('div.storyboxWrap .left').append('<div id="share" href="#"><div class="shareButton"><img src="plugins/storybox/img/share.png"> Share</div><div class="shareHover"><a class="sbg-button sbg-button-facebook"  data-sbg-network="facebook"  data-sbg-url="'+linkurl+'"  data-sbg-title="'+linkname+'"  data-sbg-summary="'+linkname+'"  data-sbg-image="'+shareimg+'"  data-sbg-width="600"  data-sbg-height="368" ><i class="sbg-button-icon fa fa-facebook"></i></a><a class="sbg-button sbg-button-twitter"  data-sbg-network="twitter"  data-sbg-text="'+linkname+' '+linkurl+'"  data-sbg-via="oshkosh"  data-sbg-hashtags="oshkosh,innovation"  data-sbg-width="600"  data-sbg-height="258" ><i class="sbg-button-icon fa fa-twitter"></i></a><a class="sbg-button sbg-button-linkedin"  data-sbg-network="linkedin"  data-sbg-url="'+linkurl+'"  data-sbg-title="'+linkname+'"  data-sbg-source="Osh Kosh"  data-sbg-summary="'+linkname+'"  data-sbg-width="585"  data-sbg-height="471" ><i class="sbg-button-icon fa fa-linkedin"></i></a><a class="sbg-button sbg-button-google-plus"  data-sbg-network="google-plus"  data-sbg-url="'+linkurl+'"  data-sbg-width="500"  data-sbg-height="505" ><i class="sbg-button-icon fa fa-google-plus"></i></a><a class="sbg-button sbg-button-pinterest"  data-sbg-network="pinterest"  data-sbg-url="'+linkurl+'/"  data-sbg-media="'+shareimg+'"  data-sbg-description="'+linkname+'"  data-sbg-width="750"  data-sbg-height="322" ><i class="sbg-button-icon fa fa-pinterest"></i></a><a class="sbg-button sbg-button-email"  data-sbg-network="email"  data-sbg-subject="'+linkname+'"  data-sbg-body="Visit '+linkurl+'" ><i class="sbg-button-icon fa fa-envelope"></i></a></div></div>');
	
				$('div.storyboxWrap .left a').on({
					click: function(){
						return true;
					}	
				});
				
				// Add Scrollbar
				$.mCustomScrollbar.defaults.scrollButtons.enable=true;
				var storyContent = $('div.storyContent');
				storyContent.height($(window).height() - 163);
				storyContent.mCustomScrollbar({ theme:"dark-3" });
				}
				}).animate({ opacity:1 });
			
			return false;
		}
	});
	
	$('div.fullStoryNav a#prev').on({
		click: function(){
			elements 	 = $('section.selected').find(trigger).length;
			elementCount = elementCount - 1;
			
			container.find('iframe').remove();
			slideCounter = slideCounter - 1;
			
			$('div.fullStoryNav a').animate({ opacity:1 }).css({ visibility:'visible' });
			if(slideCounter == 1) { //This was the original counter which goes through ALL elements ("elements" var was updated as well)
			//if(elementCount == 1) { 
				$('div.fullStoryNav a#prev').animate({ opacity:0 }).css({ visibility:'hidden' }); 
			}
			
			var id		= slideCounter
			var story 	= $('div.story[rel='+id+']');
			var title 	= story.find('h3').text();
			var content	= story.find('p.full').html();
			var img		= story.find('img.responsive').attr('src')
			var videoId	= story.find('a#watchVideo').attr('href');
			
			// If no image
			if(story.find('img.responsive').length == 0) {
				img = 'img/slide-innovation.jpg';
			} 
			// If a video
			if(videoId != '#') {
				img = 'plugins/storybox/img/blank.png';
				
				video = parseVideo(videoId);
				
				// Check if video is vimeo or youtube
				if(video['type'] == 'vimeo') { 			
					src = '//player.vimeo.com/video/' + video['id'];
				}
				if(video['type'] == 'youtube') { 
					src = '//www.youtube.com/embed/' + video['id'];
				}
				
				$(container).append('<iframe src="'+src+'" width="500" height="282" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
			} 
			
			$('div.storyboxWrap .left h2, div.storyboxWrap .left p, div.storyboxWrap .left a, div.storyboxWrap .right, div.fullStoryWrap .left #share, div.storyContent').animate({ opacity:0 }, function(){
				$('div.storyboxWrap .left h2').text(title);
				$('div.storyboxWrap .left p').html(content);
				$('div.storyboxWrap .right img').attr('src', img);
				
				$('div.fullStoryWrap .left').find('#share').remove();
				
				if(config.share == true) {
			
				var linkurl 	= 'http://stage2.curran-connors.com/oshkosh-csr-2013/';
				//var linkname	= $(e).find('h3').text().replace(' ', '%20').replace("'", '%27');
				var linkname	= title;
				var shareimg	= linkurl+'img/slide-innovation.jpg';
				
				
				$('div.storyboxWrap .left').append('<div id="share" href="#"><div class="shareButton"><img src="plugins/storybox/img/share.png"> Share</div><div class="shareHover"><a class="sbg-button sbg-button-facebook"  data-sbg-network="facebook"  data-sbg-url="'+linkurl+'"  data-sbg-title="'+linkname+'"  data-sbg-summary="'+linkname+'"  data-sbg-image="'+shareimg+'"  data-sbg-width="600"  data-sbg-height="368" ><i class="sbg-button-icon fa fa-facebook"></i></a><a class="sbg-button sbg-button-twitter"  data-sbg-network="twitter"  data-sbg-text="'+linkname+' '+linkurl+'"  data-sbg-via="oshkosh"  data-sbg-hashtags="oshkosh,innovation"  data-sbg-width="600"  data-sbg-height="258" ><i class="sbg-button-icon fa fa-twitter"></i></a><a class="sbg-button sbg-button-linkedin"  data-sbg-network="linkedin"  data-sbg-url="'+linkurl+'"  data-sbg-title="'+linkname+'"  data-sbg-source="Osh Kosh"  data-sbg-summary="'+linkname+'"  data-sbg-width="585"  data-sbg-height="471" ><i class="sbg-button-icon fa fa-linkedin"></i></a><a class="sbg-button sbg-button-google-plus"  data-sbg-network="google-plus"  data-sbg-url="'+linkurl+'"  data-sbg-width="500"  data-sbg-height="505" ><i class="sbg-button-icon fa fa-google-plus"></i></a><a class="sbg-button sbg-button-pinterest"  data-sbg-network="pinterest"  data-sbg-url="'+linkurl+'/"  data-sbg-media="'+shareimg+'"  data-sbg-description="'+linkname+'"  data-sbg-width="750"  data-sbg-height="322" ><i class="sbg-button-icon fa fa-pinterest"></i></a><a class="sbg-button sbg-button-email"  data-sbg-network="email"  data-sbg-subject="'+linkname+'"  data-sbg-body="Visit '+linkurl+'" ><i class="sbg-button-icon fa fa-envelope"></i></a></div></div>');
	
				$('div.storyboxWrap .left a').on({
					click: function(){
						return true;
					}	
				});
				
				// Add Scrollbar
				$.mCustomScrollbar.defaults.scrollButtons.enable=true;
				var storyContent = $('div.storyContent');
				storyContent.height($(window).height() - 163);
				storyContent.mCustomScrollbar({ theme:"dark-3" });
			}
			}).animate({ opacity:1 });
			
			return false;
		}
	});
}