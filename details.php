<?php require_once('includes/initialize.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>DETAILS - WEB DEVELOPMENT TEMPLATE</title>
<meta name="description" content="">

<?php require_once('layouts/header_assets.php'); ?>
</head>

<body class="<?php echo $body_class; ?>">

<div class="container template group">
	<div class="row">
    	<div class="col-sm-12">
          <h1><a href="index.php">Web Development Template - Details</a></h1>
                    
          <h2>Plugin Details</h2>
          <p>Coming Soon...</p>
            
            <br><br>
            
          <h3 id="chart">Chart:</h3>
            <p><a href="#" id="download" class="chart">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> Simple HTML5 Charts using the canvas element<br><br>
            
			<strong>REFERENCE:</strong> <a href="http://chartjs.org/" target="_blank">http://chartjs.org/</a><br><br>
			
            <strong>HELPERS:</strong> <pre>
<code>&lt;canvas id="canvas" height="450" width="450"&gt;&lt;/canvas&gt;
var doughnutData = [
	{ value: 30, color:"#F7464A" },
	{ value : 50, color : "#46BFBD" },
	{ value : 100, color : "#FDB45C" },
	{ value : 40, color : "#949FB1" },
	{ value : 120, color : "#4D5360" }
];

var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);</code></pre></p>
            
            <hr />
            
          <h3 id="financialtable">Financial Table:</h3>
          <p><a href="#" id="download" class="financial-table">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> Made by yours truly to streamline creating the tables to business standards<br><br>
            
            First Value: Table ID<br>
			Second Value: Array for dollar sign position based o nthe number of columns in the table<br><br>
            
			The array sets the left position in px of the "$" for each column. I have 5 columns in there right now but simply add more to the array as needed. <br><br>
            
			** The function automatically ignores the VERY FIRST column of the table because the first column is for the text. <br><br>
			(I.E. The above array with 5 values is for a table with 6 TOTAL COLUMNS)<br><br>
            
			Don't get it? Shame on you! <a href="http://bit.ly/Rrnm17" target="_blank">http://bit.ly/Rrnm17</a><br><br>
            
			<strong>REFERENCE:</strong> <a href="#" target="_blank"></a><br><br>
			
            <strong>HELPERS:</strong> <pre>
<code>setTable('#exampleTableID', { 
	[2, 1, 2, 1, 0], // the "$" position in pixels
});
</code></pre></p>
            
            <hr />
            
          <h3 id="flowplayer">Flowplayer:</h3>
          <p><a href="#" id="download" class="flowplayer">Download Zip</a><br>
<br>
		   <strong>DESCRIPTION:</strong> <br><br>
           
           <strong>REFERENCE:</strong> <a href="https://flowplayer.org" target="_blank">https://flowplayer.org</a><br><br>
            
		   <strong>HELPERS:</strong></p>
           <pre>
<code>&lt;div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167"&gt;
	&lt;video&gt;
		&lt;source type="video/webm" src="http://stream.flowplayer.org/bauhaus/624x260.webm"&gt;
		&lt;source type="video/mp4" src="http://stream.flowplayer.org/bauhaus/624x260.mp4"&gt;
		&lt;source type="video/ogv" src="http://stream.flowplayer.org/bauhaus/624x260.ogv"&gt;
	&lt;/video&gt;
&lt;/div&gt;</code></pre>
            <hr />
            
          <h3 id="lightbox">Lightbox (Custom):</h3>
            <p><a href="#" id="download" class="lightbox">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> <br><br>
            
			<strong>REFERENCE:</strong> <a href="#" target="_blank"></a><br><br>
			
            <strong>HELPERS:</strong> <code></code></p>
            
            <hr />
            
          <h3 id="mousewheel">Mousewheel:</h3>
            <p><a href="#" id="download" class="mousewheel">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> <br><br>
            
			<strong>REFERENCE:</strong> <a href="https://github.com/brandonaaron/jquery-mousewheel/" target="_blank">https://github.com/brandonaaron/jquery-mousewheel/</a><br><br>
			
            <strong>HELPERS:</strong> <pre><code>&lt;div id='foo' style='height:300px; width:300px; background-color:red'&gt;&lt;/div&gt;
				
$('#foo').bind('mousewheel', function(e) {
	if(e.originalEvent.wheelDelta / 120 > 0) {
		alert('up');
	} else {
		alert('down');
	}
});	</code></pre></p>
            
            <hr />
            
          <h3 id="prettyphoto">Pretty Photo:</h3>
            <p><a href="#" id="download" class="prettyphoto">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> ...if you don't know what prettyPhoto is by now, I can't help you. &nbsp; -_-<br><br>
            
			<strong>REFERENCE:</strong> <a href="http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/" target="_blank">http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/</a><br><br>
			
            <strong>HELPERS:</strong> <pre>
<code>$("a[rel^='prettyPhoto']").prettyPhoto();</code></pre></p>
            
            <hr />
            
          <h3 id="scrolltofixed">Scroll To Fixed:</h3>
            <p><a href="#" id="download" class="scroll-to-fixed">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> This jQuery plugin is used to fix elements on the page (top, bottom, anywhere); however, it still allows the element to continue to move left or right with the horizontal scroll.<br><br>

			Given an option marginTop, the element will stop moving vertically upward once the vertical scroll has reached the target position; but, the element will still move horizontally as the page is scrolled left or right. Once the page has been scrolled back down past the target position, the element will be restored to its original position on the page.<br><br>

			This plugin has been tested in Firefox 3+, Google Chrome 10+, Safari 5+, Internet Explorer 8/9, and Opera 11.60+.<br><br>
            
			<strong>REFERENCE:</strong> <a href="http://bigspotteddog.github.com/ScrollToFixed/" target="_blank">http://bigspotteddog.github.com/ScrollToFixed/</a><br><br>
			
            <strong>HELPERS:</strong> <pre>
<code>$('.rcol').scrollToFixed({ marginTop: 100 });</code></pre></p>
            <hr />
            
          <h3 id="scrollbar">Scrollbar:</h3>
            <p><a href="#" id="download" class="scrollbar">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> Highly customizable custom scrollbar jQuery plugin. Features include: <br><br>

* Vertical and/or horizontal scrollbar(s)  <br>
* Adjustable scrolling momentum <br>
* Mouse-wheel, keyboard and touch support<br> 
* Ready-to-use themes and customization via CSS<br> 
* RTL direction support <br>
* Option parameters for full control of scrollbar functionality <br>
* Methods for triggering actions like scroll-to, update, destroy etc. <br>
* User-defined callbacks <br><br>
            
			<strong>REFERENCE:</strong> <a href="http://manos.malihu.gr/jquery-custom-content-scroller/" target="_blank">http://manos.malihu.gr/jquery-custom-content-scroller/</a><br><br>
			
            <strong>HELPERS:</strong> <pre>
<code>$(window).load(function(){
	$(".content").mCustomScrollbar();
});</code></pre></p>
            
            <hr />
            
          <h3 id="slider">Slider:</h3>
            <p><a href="#" id="download" class="slider">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> Made by yours truly, very simple slider. Directions coming soon...<br><br>
            
			<strong>REFERENCE:</strong> <a href="#" target="_blank"></a><br><br>
			
            <strong>HELPERS:</strong> <code></code></p>
            
            <hr />
            
            <h3 id="storybox">Storybox:</h3>
            <p><a href="#" id="download" class="storybox">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> Made by yours truly. Directions to come.<br><br>
            
			<strong>REFERENCE:</strong> <a href="http://stage2.curran-connors.com/oshkosh-csr-2013/" target="_blank">http://stage2.curran-connors.com/oshkosh-csr-2013/</a><br><br>
			
            <strong>HELPERS:</strong> <code></code></p>
            
            <hr />
            
          <h3 id="tablehover">Table Hover:</h3>
            <p><a href="#" id="download" class="tablehover">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> <br><br>
            
			<strong>REFERENCE:</strong> <a href="http://p.sohei.org/stuff/jquery/tablehover/demo/demo.html" target="_blank">http://p.sohei.org/stuff/jquery/tablehover/demo/demo.html</a><br><br>
			
            <strong>HELPERS:</strong> <pre>
<code>$('#tableone').tableHover();</code></pre></p>
            
            <hr />
            
          <h3 id="touchswipe">Touchswipe:</h3>
          <p><a href="#" id="download" class="touchswipe">Download Zip</a><br><br>
            
            <strong>DESCRIPTION:</strong> <br><br>
            
			<strong>REFERENCE:</strong> <a href="http://labs.rampinteractive.co.uk/touchSwipe" target="_blank">http://labs.rampinteractive.co.uk/touchSwipe</a><br><br>
			
            <strong>HELPERS:</strong> <pre><code>
$(function() {      
	// Enable swiping...
	$("#test").swipe( {
		// Generic swipe handler for all directions
		swipe:function(event, direction, distance, duration, fingerCount) {
			$(this).text("You swiped " + direction );  
		},
		// Default is 75px, set to 0 for demo so any distance triggers swipe
		threshold:0
	});
});</code></pre></p>
	  </div><!-- END .col-sm-12 -->      
	</div><!-- END .row -->      
</div><!-- END .container -->

<br><br><br><br>

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
	
});
</script>

</html>