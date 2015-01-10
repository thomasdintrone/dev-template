<?php require_once('includes/initialize.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Curran &amp; Connors TEMPLATE</title>
<meta name="description" content="">
<meta name="robots" content="noindex,nofollow">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link href="style.css" type="text/css" rel="stylesheet">
<link href="css/responsive.css" type="text/css" rel="stylesheet">
<link href="css/browsers.css" type="text/css" rel="stylesheet">
<link href="css/devices.css" type="text/css" rel="stylesheet">

<!-- DEVELOPER STYLESHEETS -->
<!-- ** PLEASE USE any of the 4 stylesheets below to avoid overriding eachother. Developer1.css is uncommented as first default. Uncomment whichever one you'd like to use as well if needed -->
<link href="css/developer1.css" type="text/css" rel="stylesheet">
<!--<link href="css/developer2.css" type="text/css" rel="stylesheet">
<link href="css/developer3.css" type="text/css" rel="stylesheet">
<link href="css/developer4.css" type="text/css" rel="stylesheet">-->

<!-- PLUGINS CSS -->
<?php $plugins->load_plugin_css(); ?>


<!--[if IE 9]>
	<link href="css/ie9.css" type="text/css" rel="stylesheet">
<![endif]-->

<!--[if IE 7]>
	<link href="css/ie7.css" type="text/css" rel="stylesheet">
<![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<link href="css/ie.css" type="text/css" rel="stylesheet">
<![endif]-->

<!-- MODERNIZR -->
<script type="text/javascript" src="js/modernizr.js"></script>

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
<link rel="shortcut icon" href="#">

<!-- GOOGLE ANALYTICS -->
</head>

<body class="<?php echo $body_class; ?>">

<div class="content template group">
    <h1><a href="index.php">C & C Web Development Template</a></h1>
    
    <br><br>
    
    <h2>Plugin Details</h2>
    <p>Coming Soon...</p>
    
    <br><br>
    
    
    <h3 id="chart">Chart:</h3>
    <p><a href="#" id="download" class="chart">Download Zip</a></p>
    
    <hr />
    
    
    <h3 id="financialtable">Financial Table:</h3>
    <p><a href="#" id="download" class="financial-table">Download Zip</a></p>
    
    <hr />
    
    <h3 id="flowplayer">Flowplayer:</h3>
    <p><a href="#" id="download" class="flowplayer">Download Zip</a></p>
    
    <hr />
    
    <h3 id="lightbox">Lightbox (Custom):</h3>
    <p><a href="#" id="download" class="lightbox">Download Zip</a></p>
    
    <hr />
    
    <h3 id="mousewheel">Mousewheel:</h3>
    <p><a href="#" id="download" class="mousewheel">Download Zip</a></p>
    
    <hr />
    
    <h3 id="prettyphoto">Pretty Photo:</h3>
    <p><a href="#" id="download" class="prettyphoto">Download Zip</a></p>
    
    <hr />
    
    <h3 id="scrolltofixed">Scroll To Fixed:</h3>
    <p><a href="#" id="download" class="scroll-to-fixed">Download Zip</a></p>
    
    <hr />
    
    <h3 id="scrollbar">Scrollbar:</h3>
    <p><a href="#" id="download" class="scrollbar">Download Zip</a></p>
    
    <hr />
    
    <h3 id="slider">Slider:</h3>
    <p><a href="#" id="download" class="slider">Download Zip</a></p>
    
    <hr />
    
    <h3 id="storybox">Storybox:</h3>
    <p><a href="#" id="download" class="storybox">Download Zip</a></p>
    
    <hr />
    
    <h3 id="tablehover">Table Hover:</h3>
    <p><a href="#" id="download" class="tablehover">Download Zip</a></p>
    
    <hr />
    
    <h3 id="touchswipe">Touchswipe:</h3>
    <p><a href="#" id="download" class="touchswipe">Download Zip</a></p>
    </div>
      
</div><!-- END .content -->


</body>
<!-- JAVASCRIPT -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/animations.js"></script>

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
	
});
</script>

</html>