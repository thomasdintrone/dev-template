<meta name="robots" content="noindex,nofollow">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- FONTS -->
<link href="<?php echo SITE_ROOT; ?>css/fonts/font-awesome-4.2.0 2/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<!-- CSS -->
<link href="<?php echo SITE_ROOT; ?>style.css" type="text/css" rel="stylesheet">
<link href="<?php echo SITE_ROOT; ?>css/responsive.css" type="text/css" rel="stylesheet">
<link href="<?php echo SITE_ROOT; ?>css/browsers.css" type="text/css" rel="stylesheet">
<link href="<?php echo SITE_ROOT; ?>css/devices.css" type="text/css" rel="stylesheet">
<link href="<?php echo SITE_ROOT; ?>css/animate.css" type="text/css" rel="stylesheet">

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

<!--[if IE 8]>
	<link href="<?php echo SITE_ROOT; ?>css/ie8.css" type="text/css" rel="stylesheet">
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

<!-- FACEBOOK OPEN GRAPH AND GOOGLE SCHEMA (FOR +1s) -->
<!-- <meta property="fb:app_id" content="1234567890"> -->
<meta property="og:site_name" content="<?php echo COMPANY_NAME; ?>">
<meta property="og:url" content="<?php echo COMPANY_URL; ?>">
<meta property="og:title" content="">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo COMPANY_DESCRIPTION; ?>">
<meta property="og:image" content="<?php echo COMPANY_IMAGE; ?>" />
	
<!-- Favicons -->
<!-- GENERATE HERE: http://www.favicon-generator.org/ -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo FAVICON_PATH; ?>/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo FAVICON_PATH; ?>/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo FAVICON_PATH; ?>/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo FAVICON_PATH; ?>/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo FAVICON_PATH; ?>/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo FAVICON_PATH; ?>/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo FAVICON_PATH; ?>/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo FAVICON_PATH; ?>/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo FAVICON_PATH; ?>/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo FAVICON_PATH; ?>/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo FAVICON_PATH; ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo FAVICON_PATH; ?>/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo FAVICON_PATH; ?>/favicon-16x16.png">
<link rel="manifest" href="<?php echo FAVICON_PATH; ?>/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo FAVICON_PATH; ?>/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- GOOGLE ANALYTICS -->