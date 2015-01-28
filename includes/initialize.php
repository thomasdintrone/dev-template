<?php 
/*************************************************************************
DEBUGGING - Uncomment if needed
*************************************************************************/
//ini_set('display_errors', 1);

/*************************************************************************
REQUIREMENTS
*************************************************************************/
require_once('core_paths.php');
require_once('functions.php');
require_once('plugins.php');
require_once('nav_constants.php');

/*************************************************************************
DEVELOPMENT
*************************************************************************/
/*  MOBILE DETECT CLASS
/*  Reference: http://mobiledetect.net/  */
require_once('mobile_detect/Mobile_Detect.php');
// set class for use
$detect = new Mobile_Detect;
/*  Usage: 
	Any mobile device, excluding tablets.
	if( $detect->isMobile() && !$detect->isTablet() ) { } */

/*************************************************************************
PAGE RELATED
*************************************************************************/
// Get Current Body Class by url
//$base = 'http://'.$_SERVER["SERVER_NAME"].'/template';
$base = MAIN_BODY_CLASS;
$body_class = set_body_class($base);

if($body_class == '' || $body_class == 'index') { $body_class = 'homepage'; }

// Select Plugins to include
$the_plugins = 
	array(
		//'adaptive-backgrounds',
		'bootstrap',
		//'data_chart',
		//'chart',
		//'financial_tables',
		//'fittext',
		//'flowplayer',
		//'hotkeys',
		//'jszip',
		//'lazyload',
		//'lightbox',
		//'mousewheel',
		//'non-responsive',
		//'parallax',
		//'pretty_photo',
		//'scroll_to_fixed',
		//'scrollbar',
		//'slider',
		//'storybox',
		//'table_hover',
		//'touchswipe',
		//'waypoints',
	);

$plugins->add_plugin($the_plugins);
?>