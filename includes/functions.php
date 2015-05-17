<?php 
// FUNCTIONS GO HERE

/*************************************************************************
GET PAGE URL (for the body class)
*************************************************************************/
function getUrl() {
  	//$url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  	//$url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  	$url = $_SERVER["REQUEST_URI"];
	$url = str_replace('/','',$url);
  	return $url;
}

/*************************************************************************
SET BODY CLASS
*************************************************************************/
function set_body_class($remove = '') {
  	$body_class  = getUrl();
  	$body_class = str_replace($remove, '', $body_class); // to get rid of the root (prob a better way to do this, but I currently dont care)
  	$body_class = str_replace('http://', '', $body_class);
	$body_class = str_replace('.php', '', $body_class);
	$body_class = str_replace('-', ' ', $body_class);
	$body_class = ucwords($body_class);
	$body_class = str_replace(' ', '', $body_class);
	$body_class = lcfirst($body_class);
	return $body_class;
}

/*************************************************************************
SET CURRENT PAGE CLASS
*************************************************************************/
function nav($v) {
	if($v == TRUE) {
		echo ' current-menu-item ';
	}
}

/*************************************************************************
MENU BUILDING FUNCTION
*************************************************************************/
function build_menu($array, $nav_class='', $ul_class='', $current_page='') {
	
	$i = 1;
	
	$menu = '';
	$menu .= '<nav class="'.$nav_class.'">';
	$menu .= '	<ul class="'.$ul_class.'">';
		foreach($array as $link=>$page) {
			
			$current_page_class = 'menu-item-'.$i;
			
			if($current_page == $link) { $current_page_class .= ' current-menu-item '; }
			
			$menu .= '<li class="'.$current_page_class.'"><a href="'.$page.'">'.$link.'</a></li>';
			$i++;
		}
	$menu .= '	</ul>';
	$menu .= '</nav><!-- END nav.'.$nav_class.' -->';
	
	return $menu;
	
}

/*************************************************************************
PRELOAD
*************************************************************************/
function preload($array) {
	foreach($array as $img_path) {
		echo '<a class="preload" style="background-image:url('.$img_path.')"></a>';
	}
}
?>