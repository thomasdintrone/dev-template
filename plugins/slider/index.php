<?php require_once('../../includes/initialize.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Slider Example</title>
<meta name="robots" content="noindex,nofollow">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link href="<?php echo SITE_ROOT; ?>style.css" type="text/css" rel="stylesheet">

<!-- PLUGINS CSS -->
<?php $plugins->load_plugin_css(); ?>
</head>

<body>

<div id="slider" class="slider">                        
                        <div class="slideWrap">
                        	<div class="slide slide1">
                            	<img src="http://stage2.curran-connors.com/oshkosh-csr-2013/images/slides/1.jpg">
                                <div class="slideText">
                                    <h3>Employee Story</h3>
                                    <p>The criteria for quality typography have not changed with the application of computers and state of the art technology. Legibility, image clarity, consistent letter and word spacing, character design and layout remain the basic qualities by which we judge typography. This copy is not intended to be read. It is merely a representation of what the text of this piece may look like set in this type size and style.</p>
                            	</div><!-- END .slideText -->
                            </div><!-- END .slide -->
                            <div class="slide slide2">
                            	<img src="http://stage2.curran-connors.com/oshkosh-csr-2013/images/slides/2.jpg">
                                <div class="slideText">
                                    <h3>Employee Story 2</h3>
                                    <p>The criteria for quality typography have not changed with the application of computers and state of the art technology. Legibility, image clarity, consistent letter and word spacing, character design and layout remain the basic qualities by which we judge typography. This copy is not intended to be read. It is merely a representation of what the text of this piece may look like set in this type size and style.</p>
                            	</div><!-- END .slideText -->
                            </div><!-- END .slide -->
                            <div class="slide slide3">
                            	<img src="http://stage2.curran-connors.com/oshkosh-csr-2013/images/slides/3.jpg">
                                <div class="slideText">  
                                    <h3>Employee Story 3</h3>
                                    <p>The criteria for quality typography have not changed with the application of computers and state of the art technology. Legibility, image clarity, consistent letter and word spacing, character design and layout remain the basic qualities by which we judge typography. This copy is not intended to be read. It is merely a representation of what the text of this piece may look like set in this type size and style.</p>
                                </div><!-- END .slideText -->
                            </div><!-- END .slide -->
                        </div><!-- END .sldierWrap -->
                    </div><!-- ED #slider -->
                    
                </div><!-- END .slider -->

</body>
<!-- JAVASCRIPT -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

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
	slider('#slider', { title : 'Slider Example', width : '500px' });
})
</script>
</html>