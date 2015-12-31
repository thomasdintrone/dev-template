<?php 
/* ****************************
CORE PATHS AND DEFINITIONS:

Define them as absolute paths to make sure that require_once works as expected
*******************************/

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// GET THE SITE ROOT
if(isset($_SERVER['HTTPS'])){
	$protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
} else {
	$protocol = 'http';
 }
$site_root = $protocol."://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';

// DEFINE SITE ROOT PATH
defined('SITE_ROOT') ? null : define('SITE_ROOT', $site_root);

// LIBRARY PATH
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// BASE PATH
defined('MAIN_BODY_CLASS') ? null : define('MAIN_BODY_CLASS', dirname($_SERVER["REQUEST_URI"].'?')); // this is the name of the folder

/*******************************
HTML SPECIFIC PATHS
********************************/

// TEMPLATE / LAYOUT PATH
defined('TEMPLATE_PATH') ? null : define('TEMPLATE_PATH', 'layouts');

// META DATA PAH
defined('META_PATH') ? null : define('META_PATH','includes'.DS.'meta');

// CSS FILE PATH
defined('CSS_PATH') ? null : define('CSS_PATH', SITE_ROOT.'/css');

// JAVASCRIPT FILE PATH
defined('JS_PATH') ? null : define('JS_PATH', SITE_ROOT.'/js');

// JAVASCRIPT FILE PATH
defined('FAVICON_PATH') ? null : define('FAVICON_PATH', SITE_ROOT.'/img/favicons');

/*********************************************************************
COMPANY INFORMATION
Mainly for use with the social sharing in header_assets.php file 
*********************************************************************/
// WEBSITE COMPANY NAME
defined('COMPANY_NAME') ? null : define('COMPANY_NAME', 'COMPANY NAME GOES HERE');

// WEBSITE COMPANY URL
defined('COMPANY_URL') ? null : define('COMPANY_URL', SITE_ROOT);

// WEBSITE COMPANY DESCRIPTION
defined('COMPANY_DESCRIPTION') ? null : define('COMPANY_DESCRIPTION', '');

// WEBSITE COMPANY IMAGE
defined('COMPANY_IMAGE') ? null : define('COMPANY_IMAGE', '');

?>