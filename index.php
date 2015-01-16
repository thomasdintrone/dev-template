<?php require_once('includes/initialize.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<?php require_once('layouts/derp.php'); ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>WEB DEVELOPMENT TEMPLATE</title>
<meta name="description" content="">

<?php require_once('layouts/header_assets.php'); ?>
</head>

<body class="home <?php echo $body_class; ?>">

<div class="container template group">
	<div class="row">
    	<div class="col-sm-12">
            <h1><a href="index.php">Web Development Template</a></h1>
                    
            <h2>Basic Set Up Before Use:</h2>
            <p>1. Set up export.php with correct info<br>
            2. Define core_paths.php<br>
            3. Define MAIN_BODY_CLASS in core_paths.php<br>
            4. Choose plugins in initialize.php</p>
                    
            <h2>Template Description:</h2>
            <p>A handy development template built for web developers by myself. Includes many useful plugins and standard options. I've been developing websites for some time and began building a base template to use. Over the years this template has grown and improved to the point where I think it'd be useful to share with the public. I wanted to incorporate any and all possible options right out of the box.</p>
            
            <h2>This template includes:</h2>
            
            <div class="col-sm-3 noPadL">
                <h3>CSS Files:</h3>
                <p>-- Main Style <br>
                -- Responsive (mobile / tablet) <br>
                -- IE7, IE8, IE9 <br>
                -- Devices (iphone, ipad, etc) <br>
                -- Browser Specific (Chrome, Firefox, Safari) <br>
                -- 4 Optional extra Developer Stylesheets <br>
                -- Pie.css <br>
                -- Fonts Folder</p>
            </div>
            
            <div class="col-sm-3 noPadL">
            	<h3>JS Files</h3> 
                <p>-- jQuery <br>
                -- jQuery UI <br>
                -- jQuery Validate (for form) <br>
                -- Modernizr.js<br>
                -- Selectivizr.js (http://selectivizr.com)<br>
                -- Actual.js (this helps get height/width of elements that are invisible)<br>
                -- Custom Functions <br>
                -- Custom Animations</p>
			</div>
            
            <div class="col-sm-3 noPadL">            
                <h3>PHP Code</h3>
                <p>-- Mobile Device detector (for detecting if a user is using mobile phone and/or tablet) <br>
                -- Contact Form file (include the file: "layouts/contact_form.php")<br>
				-- timthumb.php for automatic thumbnails</p>
			</div>
            
            <div class="col-sm-3 noPadL">  
                <h3>Other</h3> 
                <p>-- HTML5 Shiv for IE8 compatibility <br>
                -- IE Specific conditional tags in the for version specific targeting <br>
                -- Meta viewport <br>
                -- Favicon Urls ready in layouts/header_assets.php<br>
                -- Nav Constant variables to add "current-menu-item" classes to a main nav tag <br>
                -- Export file functionality that zips and flattens the site into straight html in a separate folder (sequentially - export1, export2, export3) for cross server functionality</p>
			</div>
            
                <h3>Available Plugins (Open Source and Custom):</h3>
                
                <p><em>Below is a current list of available plugins  for use with this template. Some are custom created by myself so feel free to use any and all at will. I've been using these plugins for so long that I automatically included them in my template.<br><br>
                
                -- Bootstrap <br>
                -- PrettyPhoto <br>
                -- Chart.js <br>
                -- Flowplayer <br>
                -- Scroll to Fixed <br>
                -- Scrollbar <br>
                -- TableHover <br>
                -- TouchSwipe <br>
                -- Mousewheel <br>
                -- Financial Highlights Table (CUSTOM)<br><br>
                
                Click the </em><strong>download</strong> <em>link for a quick zip file as well as the </em><strong>details</strong> <em>which will bring you to the plugin details page for an explanation on it's use.</em>
                
                Plugins can be selectively activated in the "includes/initialize.php" file. You will see them commented out in an array at the bottom. Simply uncomment them for use.<br><br>
                
                For the list of plugins and and reference urls/coding go to "includes/plugins.php"<br><br>
                
                I use the plugins class in the plugins.php file with a function the automatically puts the css files in the head and the js files in the footer.</p>
                        
            <p><em><strong>More Instructions & Information in future versions...</strong></em></p>        
        
        <div class="col-sm-3 plugin">
            <h3>Chart:</h3>
            <p><a href="details.php#chart">Details</a> &nbsp; | &nbsp; <a href="plugins/chart/samples/pie.html">Example</a> &nbsp; | &nbsp; <a href="#" id="download" class="chart">Download Zip</a></p>
        </div>
        
        <div class="col-sm-3 plugin">        
            <h3>Financial Table:</h3>
            <p><a href="details.php#financialtable">Details</a> &nbsp; | &nbsp; <a href="plugins/financial-table">Example</a> &nbsp; | &nbsp; <a href="#" id="download" class="financial-table">Download Zip</a></p>       
        </div>
        <div class="col-sm-3 plugin">    
            <h3>Flowplayer:</h3>
            <p><a href="details.php#flowplayer">Details</a> &nbsp; | &nbsp; <a href="plugins/flowplayer">Example</a> &nbsp; | &nbsp; <a href="#" id="download" class="flowplayer">Download Zip</a></p>        
        </div>
        
        <div class="col-sm-3 plugin">       
            <h3>Lightbox (Custom):</h3>
            <p><a href="details.php#lightbox">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="lightbox">Download Zip</a></p>    
        </div>
        
        <div class="col-sm-3 plugin">       
            <h3>Mousewheel:</h3>
            <p><a href="details.php#mousewheel">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="mousewheel">Download Zip</a></p>     
        </div>
        
        <div class="col-sm-3 plugin">      
            <h3>Pretty Photo:</h3>
            <p><a href="details.php#prettyphoto">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="prettyphoto">Download Zip</a></p>      
        </div>
        
        <div class="col-sm-3 plugin">      
            <h3>Scroll To Fixed:</h3>
            <p><a href="details.php#scrolltofixed">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="scroll-to-fixed">Download Zip</a></p>       
        </div>
        
        <div class="col-sm-3 plugin">     
            <h3>Scrollbar:</h3>
            <p><a href="details.php#scrollbar">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="scrollbar">Download Zip</a></p>       
        </div>
        
        <div class="col-sm-3 plugin">     
            <h3>Slider:</h3>
            <p><a href="details.php#slider">Details</a> &nbsp; | &nbsp; <a href="plugins/slider">Example</a> &nbsp; | &nbsp; <a href="#" id="download" class="slider" style="background:none;">Download Zip</a></p>     
        </div>
        
        <div class="col-sm-3 plugin">       
        <h3>Storybox:</h3>
        <p><a href="details.php#storybox">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="storybox">Download Zip</a></p>   
        </div>
        
        <div class="col-sm-3 plugin">      
            <h3>Table Hover:</h3>
            <p><a href="details.php#tablehover">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="tablehover">Download Zip</a></p>       
            
        </div>
        
        <div class="col-sm-3 plugin">      
            <h3>Touchswipe:</h3>
            <p><a href="details.php#touchswipe">Details</a> &nbsp; | &nbsp; <a href="#" id="download" class="touchswipe">Download Zip</a></p>
        </div>
          
    	</div><!-- END .col-sm-12 -->
    </div><!-- END .row -->
</div><!-- END .container -->

    <br><br>
    
    <p align="center"><a href="#" id="test">CLICK ME</a></p>
    
    <br><br>

</body>
<?php require_once('layouts/footer_assets.php'); ?>

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