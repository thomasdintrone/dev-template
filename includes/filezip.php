<?php 
	//http://www.ens.ro/2012/04/07/php-send-zip-file-to-browser-for-download/
	class Utils
{
  public static function listDirectory($dir)
  {
    $result = array();
    $root = scandir($dir);
    foreach($root as $value) {
      if($value === '.' || $value === '..') {
        continue;
      }
      if(is_file("$dir$value")) {
        $result[] = "$dir$value";
        continue;
      }
      if(is_dir("$dir$value")) {
        $result[] = "$dir$value/";
      }
      foreach(self::listDirectory("$dir$value/") as $value)
      {
        $result[] = $value;
      }
    }
    return $result;
  }
}

// if($_POST['id'] == 1) {
	
	$plugin_path	= '../plugins';
	$plugin_name 	= $_POST['id']; // name of the plugin to download, MUST match plugin dir name
	
	$source_dir = $plugin_path.'/'.$plugin_name.'/';
	$zip_file 	= $plugin_path.'/'.$plugin_name.'/'.$plugin_name.'.zip';
	$file_list 	= Utils::listDirectory($source_dir);
	 
	$zip = new ZipArchive();
	if ($zip->open($zip_file, ZIPARCHIVE::CREATE) === true) {
	  foreach ($file_list as $file) {
		if ($file !== $zip_file) {
		  $zip->addFile($file, substr($file, strlen($source_dir)));
		}
	  }
	  $zip->close();
	}
	
	/*$file = $zip_file;
	$file_name = basename($file);
	header("Content-Type: application/zip");
	header("Content-Disposition: attachment; filename=" . $file_name);
	header("Content-Length: " . filesize($file));
	readfile($file);
	exit;
	*/
// }
 
    //$id = $_POST['id'];
    echo 'http://stage2.curran-connors.com/template/plugins/'.$plugin_name.'/'.$plugin_name.'.zip';
	
?>