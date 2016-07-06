<!-- JAVASCRIPT -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo SITE_ROOT; ?>js/jquery.min.js"><\/script>')</script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/actual/jquery.actual.min.js<?php echo UNCACHE; ?>"></script>
<script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/placeholder/jquery.placeholder.min.js<?php echo UNCACHE; ?>"></script>
<!--<script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/background-size-deprecated/jquery.backgroundSize.js<?php echo UNCACHE; ?>"></script>-->

<!-- SELECTIVZR -->
<!-- Allows for CSS3 pseudo selectors || Reference: http://selectivizr.com -->
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/selectivizr/selectivizr-min.js<?php echo UNCACHE; ?>"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]--> 

<!-- PLUGINS JS -->
<?php $plugins->load_plugin_js(); ?>

<!-- CUSTOM JS -->
<script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/functions.js<?php echo UNCACHE; ?>"></script>
<script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/animations.js<?php echo UNCACHE; ?>"></script>
<script type="text/javascript" src="<?php echo SITE_ROOT; ?>js/form-submit.js<?php echo UNCACHE; ?>"></script>