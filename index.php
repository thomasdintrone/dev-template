<?php require_once('includes/initialize.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>WEB TEMPLATE</title>
<meta name="description" content="">
<meta name="robots" content="noindex,nofollow">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link href="<?php echo SITE_ROOT; ?>style.css" type="text/css" rel="stylesheet">
<link href="<?php echo SITE_ROOT; ?>css/responsive.css" type="text/css" rel="stylesheet">
<link href="<?php echo SITE_ROOT; ?>css/browsers.css" type="text/css" rel="stylesheet">
<link href="<?php echo SITE_ROOT; ?>css/devices.css" type="text/css" rel="stylesheet">

<!-- DEVELOPER STYLESHEETS -->
<!-- ** PLEASE USE any of the 4 stylesheets below to avoid overriding eachother. Developer1.css is uncommented as first default. Uncomment whichever one you'd like to use as well if needed -->
<link href="<?php echo SITE_ROOT; ?>css/developer1.css" type="text/css" rel="stylesheet">
<!--<link href="css/developer2.css" type="text/css" rel="stylesheet">
<link href="css/developer3.css" type="text/css" rel="stylesheet">
<link href="css/developer4.css" type="text/css" rel="stylesheet">-->

<!-- PLUGINS CSS -->
<?php $plugins->load_plugin_css(); ?>

<!--[if IE 9]>
	<link href="<?php echo SITE_ROOT; ?>css/ie9.css" type="text/css" rel="stylesheet">
<![endif]-->

<!--[if IE 7]>
	<link href="<?php echo SITE_ROOT; ?>css/ie7.css" type="text/css" rel="stylesheet">
<![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<link href="<?php echo SITE_ROOT; ?>css/ie.css" type="text/css" rel="stylesheet">
<![endif]-->

<!-- MODERNIZR -->
<script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/modernizr.js"></script>

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
<link rel="shortcut icon" href="#">

<!-- GOOGLE ANALYTICS -->
</head>

<body class="home <?php echo $body_class; ?>">

<div class="content template group">
    <h1><a href="index.php">Web Development Template</a></h1>
    
    <br><br>
    
    <h2>Basic Set Up Before Use:</h2>
    <p>1. Set up export.php with correct info<br>
    2. Define core_paths.php<br>
    3. Define MAIN_BODY_CLASS in core_paths.php<br>
    4. Choose plugins in initialize.php</p>
    
    <br><br>
    
    <h2>Template Description:</h2>
    <p>Coming soon...</p>
    
    <br><br>
    
    <h2>Available Plugins:</h2>
    <p><em>Below is a current list of available plugins  for use with this template. Some are custom created by myself so feel free to use any and all at will. <br>
<br>
	Click the </em><strong>download</strong> <em>link for a quick zip file as well as the </em><strong>details</strong> <em>which will bring you to the plugin details page for an explanation on it's use.</em></p>
    
    <br><br>
    
    
    <div class="plugin">
    <h3>Chart:</h3>
    <p><a href="details.php#chart">Details</a> &nbsp; | &nbsp; <a href="plugins/chart/samples/pie.html">Example</a> &nbsp; | &nbsp; <a href="#" id="download" class="chart">Download Zip</a></p>
    
    </div>
    <div class="plugin">
    
    
    <h3>Financial Table:</h3>
    <p><a href="details.php#financialtable">Details</a> &nbsp; | &nbsp; <a href="plugins/financial-table">Example</a> &nbsp; | &nbsp; <a href="#" id="download" class="financial-table">Download Zip</a></p>
    
    </div>
    <div class="plugin">
    
    <h3>Flowplayer:</h3>
    <p><a href="details.php#flowplayer">Details</a> &nbsp; | &nbsp; <a href="plugins/flowplayer">Example</a> &nbsp; | &nbsp; <a href="#" id="download" class="flowplayer">Download Zip</a></p>
    
    </div>
    <div class="plugin">
    
    <h3>Lightbox (Custom):</h3>
    <p><a href="details.php#lightbox">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="lightbox">Download Zip</a></p>
    
    </div>
    <div class="plugin">
    
    <h3>Mousewheel:</h3>
    <p><a href="details.php#mousewheel">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="mousewheel">Download Zip</a></p>
    
    </div>
    <div class="plugin">
    
    <h3>Pretty Photo:</h3>
    <p><a href="details.php#prettyphoto">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="prettyphoto">Download Zip</a></p>
    
    </div>
    <div class="plugin">
    
    <h3>Scroll To Fixed:</h3>
    <p><a href="details.php#scrolltofixed">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="scroll-to-fixed">Download Zip</a></p>
    
    </div>
    <div class="plugin">
    
    <h3>Scrollbar:</h3>
    <p><a href="details.php#scrollbar">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="scrollbar">Download Zip</a></p>
    
    </div>
    <div class="plugin">
    
    <h3>Slider:</h3>
    <p><a href="details.php#slider">Details</a> &nbsp; | &nbsp; <a href="plugins/slider">Example</a> &nbsp; | &nbsp; <a href="#" id="download" class="slider" style="background:none;">Download Zip</a></p>
    
    </div>
    <div class="plugin">
    
    <h3>Storybox:</h3>
    <p><a href="details.php#storybox">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="storybox">Download Zip</a></p>
    
    
    
    
    
    
    </div>
    <div class="plugin">
    
    <h3>Table Hover:</h3>
    <p><a href="details.php#tablehover">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="tablehover">Download Zip</a></p>
    
    </div>
    <div class="plugin">
    
    <h3>Touchswipe:</h3>
    <p><a href="details.php#touchswipe">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="touchswipe">Download Zip</a></p>
    </div>
      
</div><!-- END .content -->

<br><br>

<p align="center"><a href="#" id="test">CLICK ME</a></p>

<br><br>


</body>
<!-- JAVASCRIPT -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/actual/jquery.actual.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/functions.js"></script>
<script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/animations.js"></script>

<!-- SELECTIVZR -->
<!-- Allows for CSS3 pseudo selectors || Reference: http://selectivizr.com -->
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="js/selectivizr/selectivizr-min.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]--> 

<!-- PLUGINS JS -->
<?php $plugins->load_plugin_js(); ?>

<script type="text/javascript">
$(function(){
	// Download plugins
	$("a#download").on({
		click: function(){
			
			var plugin = $(this).attr('class');
			
			$.ajax({
			  url: "includes/filezip.php",
			  type: "POST",
			  data: "id="+plugin,
			  success: function(msg){
				 //alert(msg); //this returns whatever is echoed in php file
    			 window.location.href = msg;
				 e.preventDefault();  //stop the browser from following
			  }
		   });
			return false;
		}
	});
	
	/* AJAX FUN STUFF */
	$('#test').on({
		click: function(){
		
			var pusher = '';
			
			$(this).toggleClass('hasIt');
			
			if($(this).hasClass('hasIt')) {
				
				pusherValue = 'testValue';
				$(this).text('CLICK ME AGAIN');
				
			} else {
				
				pusherValue = '';
				$(this).text('CLICK ME');
				
			}			
			
			$.ajax({
	
			  url: "ajax.php",
			  type: "GET",
			  data: {
	
				pusher: pusherValue,
	
			  },
	
			  dataType: "json",
			  success: function(data){
	
				 var statecodeid = data.test;             
				 alert(statecodeid);
		
			  }
			  
			  
			  
	
		  });
			
		return false;
		}
	});
	
});
</script>

</html>