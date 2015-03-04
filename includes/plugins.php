<?php 
// PLUGIN SPECIFIC CLASS

class Plugin {
	
	public $p_dir = 'plugins'; // Griffin ...meheheheh
	
	//public $pretty_photo = 'pretty_photo';
	
	public $plugins_css 	= array(); // The Array to handle calling all the plugins css
	public $plugins_js		= array(); // The Array to handle calling all the plugins js
	
	
	
	public function css($path_to_file) {
		return '<link rel="stylesheet" href="'.SITE_ROOT.$this->p_dir.'/'.$path_to_file.'" type="text/css" media="screen" charset="utf-8" />
';
	}
	public function css_ext($path_to_file) {
		return '<link rel="stylesheet" href="'.$path_to_file.'" type="text/css" media="screen" charset="utf-8" />
';
	}
	
	public function js($path_to_file) {
		return '<script src="'.SITE_ROOT.$this->p_dir.'/'.$path_to_file.'" type="text/javascript" charset="utf-8"></script>
';
	}
	public function js_ext($path_to_file) {
		return '<script src="'.$path_to_file.'" type="text/javascript" charset="utf-8"></script>
';
	}
	
	public function load_plugin_css() {
		foreach($this->plugins_css as $plugin) {
			echo $plugin;
		}
	}
	
	public function load_plugin_js() {
		foreach($this->plugins_js as $plugin) {
			echo $plugin;
		}
	}
	
	
	/****************************************************************
	THE PLUGINS
	
	Here is where you can custom enter a plugin with it's file path
	****************************************************************/
	public function add_plugin($plugin_array) {
		foreach($plugin_array as $plugin) {
			
			// ADAPTIVE BACKGROUNDS
			if($plugin == 'adaptive-backgrounds') {
				$dir = 'adaptive-backgrounds'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js_ext(SITE_ROOT.$dir.'/src/jquery.adaptive-backgrounds.js'); // The path to the JS file
				
				// REFERENCE: 	A jQuery plugin for extracting the dominant color from images and 
				//				applying the color to their parent.
				//				http://briangonzalez.github.io/jquery.adaptive-backgrounds.js/
				// HELPERS:		$(document).ready(function(){
				//				  $.adaptiveBackground.run()
				//				});
				//				<img src="/image.jpg" data-adaptive-background='1'>
				//				<div style='background-image: url(/some-image.jpg)' data-adaptive-background='1' data-ab-css-background='1'></div>
			}
			
			// BOOTSTRAP
			if($plugin == 'bootstrap') {
				$dir = 'bootstrap'; // This is the name of the specific plugin directory
				$this->plugins_css[] 	= self::css_ext(SITE_ROOT.$dir.'/css/bootstrap.min.css'); // The path to the CSS file
				$this->plugins_js[]		= self::js_ext(SITE_ROOT.$dir.'/js/bootstrap.min.js'); // The path to the JS file
				
				// REFERENCE: 	http://getbootstrap.com/javascript/
			}
			
			// CHARTS
			if($plugin == 'chart') {
				$dir = 'chart'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/Chart.min.js'); // The path to the JS file
				
				// REFERENCE: 	http://chartjs.org/
				// HELPERS: 	
			}
			
			// DATA CHART 
			if($plugin == 'data_chart') {
				$dir = 'data-chart'; // This is the name of the specific plugin directory
				$this->plugins_css[] 	= self::css($dir.'/css/data-chart.css'); // The path to the CSS file
				$this->plugins_js[]		= self::js($dir.'/js/data-chart.js'); // The path to the JS file
				
				// REFERENCE: 	Made by yours truly to streamline creating the animated line graphs
				/* HELPERS: 	Simply add this function: dataChart(CHARTELEMENT);
								
								more options to come...
				*/			   	
			}
			
			// FINANCIAL TABLES
			if($plugin == 'financial_tables') {
				$dir = 'financial-tables'; // This is the name of the specific plugin directory
				$this->plugins_css[] 	= self::css($dir.'/css/financialTable.css'); // The path to the CSS file
				$this->plugins_js[]		= self::js($dir.'/js/jquery.financialTable.js'); // The path to the JS file
				
				// REFERENCE: 	Made by yours truly to streamline creating the tables to business standards
				/* HELPERS: 	Simply add this function: setTable('#exampleTableID', [2, 1, 2, 1, 0]);
								
								First Value: Table ID
								Second Value: Array for dollar sign position based o nthe number of columns i nthe table
								
								The array sets the left position in px of the "$" for each column. I have 5 columns in there right now 
								but simply add more to the array as needed. 
								** The function automatically ignores the VERY FIRST column of the table because the first column is for the text. 
								(I.E. The above array with 5 values is for a table with 6 TOTAL COLUMNS)
								Don't get it? Shame on you! http://bit.ly/Rrnm17
				*/			   	
			}
			
			// FITTEXT
			if($plugin == 'fittext') {
				$dir = 'fittext'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/jquery.fittext.js'); // The path to the JS file
				
				// REFERENCE: 	http://fittextjs.com/
				//				FitText makes font-sizes flexible. Use this plugin on your fluid or responsive 
				//				layout to achieve scalable headlines that fill the width of a parent element.
				/* HELPERS: 	jQuery("#responsive_headline").fitText();
				//				jQuery("#responsive_headline").fitText(1.2, { minFontSize: '20px', maxFontSize: '40px' });
				*/			   	
			}
			
			// FLOWPLAYER
			if($plugin == 'flowplayer') {
				$dir = 'flowplayer'; // This is the name of the specific plugin directory
				$this->plugins_css[] 	= self::css($dir.'/skin/minimalist.css'); // The path to the CSS file
				$this->plugins_js[]		= self::js($dir.'/flowplayer.min.js'); // The path to the JS file
				
				// REFERENCE: 	https://flowplayer.org
				/* HELPERS: 	<div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
									<video>
										<source type="video/webm" src="http://stream.flowplayer.org/bauhaus/624x260.webm">
									 	<source type="video/mp4" src="http://stream.flowplayer.org/bauhaus/624x260.mp4">
									 	<source type="video/ogv" src="http://stream.flowplayer.org/bauhaus/624x260.ogv">
									</video>
								</div>
				*/			   	
			}
			
			// HOTKEYS
			if($plugin == 'hotkeys') {
				$dir = 'hotkeys'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/jquery.hotkeys.js'); // The path to the JS file
				
				// REFERENCE: 	https://github.com/jeresig/jquery.hotkeys
				// 				jQuery Hotkeys is a plug-in that lets you easily add and remove handlers for keyboard events 
				//				anywhere in your code supporting almost any key combination.
				/* HELPERS: 	// e.g. replace '$' sign with 'EUR'
								$('input.foo').on('keyup', null, '$', function(){
								  this.value = this.value.replace('$', 'EUR');
								}); 
				*/			   	
			}
			
			// JSZIP
			if($plugin == 'jszip') {
				$dir = 'jszip'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/jszip.js'); // The path to the JS file
				
				// REFERENCE: 	http://viralpatel.net/blogs/create-zip-file-javascript/
				
				/* HELPERS: 	<script>
									(function($){
										$(window).load(function(){
											$(".content").mCustomScrollbar();
										});
									})(jQuery);
								</script>
  		
				*/			   	
			}
			
			// LAZYLOAD
			if($plugin == 'lazyload') {
				$dir = 'lazyload'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/jquery.lazyload.min.js'); // The path to the JS file
				
				// REFERENCE: 	jQuery plugin for lazy loading images 
				// 				http://www.appelsiini.net/projects/lazyload
				/* HELPERS: 	<img class="lazy" data-original="img/example.jpg" width="640" height="480">
								$("img.lazy").lazyload();
				*/			   	
			}
			
			// Lightbox
			if($plugin == 'lightbox') {
				$dir = 'lightbox'; // This is the name of the specific plugin directory
				$this->plugins_css[] 	= self::css($dir.'/lightbox.css'); // The path to the CSS file
				//$this->plugins_css[] 	= self::css($dir.'/lightbox.css'); // The path to the CSS file
				$this->plugins_js[]		= self::js($dir.'/lightbox.js'); // The path to the JS file
				
				// REFERENCE: 	Made by yours truly. Cray Cray
				/* HELPERS: 	
				*/			   	
			}
			
			// MOUSEWHEEL
			if($plugin == 'mousewheel') {
				$dir = 'mousewheel'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/jquery.mousewheel.min.js'); // The path to the JS file
				
				// REFERENCE: 	https://github.com/brandonaaron/jquery-mousewheel/
				/* HELPERS: 	<div id='foo' style='height:300px; width:300px; background-color:red'></div>
				
								$('#foo').bind('mousewheel', function(e) {
									if(e.originalEvent.wheelDelta / 120 > 0) {
										alert('up');
									} else {
										alert('down');
									}
								});				
				*/			   	
			}
			
			// FORCE NON-RESPONSIVE
			if($plugin == 'non-responsive') {
				$this->plugins_css[] 	= self::css_ext(SITE_ROOT.'/css/force-non-responsive.css'); // The path to the CSS file				
				
				// REFERENCE: 	This will add the stylesheet above that will allow the use of bootstrap framework while not
				// 				actually being responsive
			}
			
			// PARALLAX
			if($plugin == 'parallax') {
				$dir = 'parallax'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/parallax.min.js'); // The path to the JS file
				
				// REFERENCE: 	https://github.com/pixelcog/parallax.js/
				// REFERENCE: 	http://pixelcog.com/parallax.js/
				
				/* HELPERS: 	
					$('.slide1').parallax({
						imageSrc: 'images/home-slide1.jpg',
						speed: 0,
						position: 'center top',
					});
				*/			   	
			}
			
			// PRETTY PHOTO
			if($plugin == 'pretty_photo') {
				$dir = 'prettyphoto'; // This is the name of the specific plugin directory
				$this->plugins_css[] 	= self::css($dir.'/css/prettyPhoto.css'); // The path to the CSS file
				$this->plugins_js[]		= self::js($dir.'/js/jquery.prettyPhoto.js'); // The path to the JS file
				
				// REFERENCE: 	http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/
				// HELPERS: 	$("a[rel^='prettyPhoto']").prettyPhoto();
			}
			
			// SCROLL TO FIXED
			if($plugin == 'scroll_to_fixed') {
				$dir = 'scroll-to-fixed'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/jquery-scrolltofixed-min.js'); // The path to the JS file
				
				// REFERENCE: 	http://bigspotteddog.github.com/ScrollToFixed/
				// HELPERS: 	$('.rcol').scrollToFixed({ marginTop: 100 });
			}
			
			// SCROLLBAR
			if($plugin == 'scrollbar') {
				$dir = 'scrollbar'; // This is the name of the specific plugin directory
				$this->plugins_css[] 	= self::css($dir.'/jquery.mCustomScrollbar.css'); // The path to the CSS file
				$this->plugins_js[]		= self::js($dir.'/jquery.mCustomScrollbar.concat.min.js'); // The path to the JS file
				
				// REFERENCE: 	http://manos.malihu.gr/jquery-custom-content-scroller/
				
				/* HELPERS: 	<script>
									(function($){
										$(window).load(function(){
											$(".content").mCustomScrollbar();
										});
									})(jQuery);
								</script>
  		
				*/			   	
			}
			
			// SIMPLE WEATHER
			if($plugin == 'simple-weather') {
				$dir = 'simpleweather'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/jquery.simpleWeather.min.js'); // The path to the JS file
				
				// REFERENCE: 	A plugin to display current weather data for any location and doesn't get in your way.
				//				http://simpleweatherjs.com/
				/* HELPERS: 	$.simpleWeather({
									zipcode: '76309',
									unit: 'f',
									success: function(weather) {
										html = '<h2>'+weather.city+', '+weather.region+'</h2>';
										html += '<img style="float:left;" width="125px" src="images/weather/'+weather.code+'.png">';
										html += '<p>'+weather.temp+'&deg; '+weather.units.temp+'<br /><span>'+weather.currently+'</span></p>';
										html += '<a href="'+weather.link+'">View Forecast &raquo;</a>';
								 
										$("#weather").html(html);
									},
									error: function(error) {
										$("#weather").html("<p>"+error+"</p>");
									}
								});
				*/			   	
			}
			
			// SLIDER
			if($plugin == 'slider') {
				$dir = 'slider'; // This is the name of the specific plugin directory
				$this->plugins_css[] 	= self::css($dir.'/slider.css'); // The path to the CSS file
				$this->plugins_js[]		= self::js($dir.'/slider.js'); // The path to the JS file
				
				// REFERENCE: 	Made by yours truly, very simple slider 
				/* HELPERS: 	
				*/			   	
			}
			
			// Stories
			if($plugin == 'storybox') {
				$dir = 'storybox'; // This is the name of the specific plugin directory
				$this->plugins_css[] 	= self::css($dir.'/storybox.css'); // The path to the CSS file
				$this->plugins_css[] 	= self::css_ext('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'); // For share buttons
				$this->plugins_css[] 	= self::css($dir.'/share.css'); // The path to the CSS file
				$this->plugins_js[]		= self::js($dir.'/share.js'); // The path to the JS file
				$this->plugins_js[]		= self::js($dir.'/storybox.js'); // The path to the JS file
				
				// REFERENCE: 	Made by yours truly. Directions to come.
				/* HELPERS: 	
				*/			   	
			}
			
			// TABLE HOVER
			if($plugin == 'table_hover') {
				$dir = 'tablehover'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/jquery.tablehover.min.js'); // The path to the JS file
				
				// REFERENCE: 	http://p.sohei.org/stuff/jquery/tablehover/demo/demo.html
				// HELPERS: 	$('#tableone').tableHover();
			}
			
			// TOUCHSWIPE
			if($plugin == 'touchswipe') {
				$dir = 'touchswipe'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/jquery.touchSwipe.min.js'); // The path to the JS file
				
				// REFERENCE: 	http://labs.rampinteractive.co.uk/touchSwipe
				
				/* HELPERS: 	$(function() {      
								  //Enable swiping...
								  $("#test").swipe( {
									//Generic swipe handler for all directions
									swipe:function(event, direction, distance, duration, fingerCount) {
									  $(this).text("You swiped " + direction );  
									},
									//Default is 75px, set to 0 for demo so any distance triggers swipe
									 threshold:0
								  });
								});
  		
				*/			   	
			}
			
			// WAYPOINTS
			if($plugin == 'waypoints') {
				$dir = 'waypoints'; // This is the name of the specific plugin directory
				$this->plugins_js[]		= self::js($dir.'/lib/jquery.waypoints.min.js'); // The path to the JS file
				$this->plugins_js[]		= self::js($dir.'/lib/shortcuts/infinite.min.js'); // The path to the JS file
				$this->plugins_js[]		= self::js($dir.'/lib/shortcuts/inview.min.js'); // The path to the JS file
				$this->plugins_js[]		= self::js($dir.'/lib/shortcuts/sticky.min.js'); // The path to the JS file				
				
				// REFERENCE: 	Waypoints is a library that makes it easy to execute a function whenever you scroll to an element.
				//				http://imakewebthings.com/waypoints/
				//				http://imakewebthings.com/waypoints/guides/getting-started/
				// HELPERS: 	$('#tableone').tableHover();
			}
			
			
			
			/***************************************************************** 
			KEEP THIS LAST SO IT LOADS AFTER ALL CSS (NEEDS TO BE IN THE HEADER) */
			// SHARE THIS -- 
			if($plugin == 'share_this') {
				$this->plugins_css[]		= '<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-caa5e7b2-bec0-a6fc-5ca9-4067c210cd58", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
';
				
			}
			
		}
	}
	
	public function share_this() {
			return "<span class='st_sharethis' displayText='ShareThis'></span>
            <span class='st_facebook' displayText='Facebook'></span>
            <span class='st_twitter' displayText='Tweet'></span>
            <span class='st_linkedin' displayText='LinkedIn'></span>
            <span class='st_pinterest' displayText='Pinterest'></span>
            <span class='st_email' displayText='Email'></span>";
	}

} // End of class

$plugins = new Plugin();
?>