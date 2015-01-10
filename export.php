<?php
if(!empty($_GET['start']) && $_GET['start'] == '1'):

// only works with safe mode 'OFF'
//ini_set('max_execution_time', -1);


// this is placed into preg_replace, so make sure to escape characters.
// It is used to replace any internal links to the old site, such a,s /DeVry/index.html could be changed to just .index.html
// or /site/themes/devryar/index.html if need be.
$base_path = '([\/]|[\\\\])(Crawford-ar-2013)([\/]|[\\\\])';

// what to change the path to.
$path_replace = '';

// the old path to the site, for instance http://apache.curran-connors.com/DeVry/
// used when cURLing for the file HTML
$url_prefix = 'http://stage2.curran-connors.com/Crawford-ar-2013/';

// directory to send the flattened files to
$export_dir = 'export';

// directories not to copy
$blacklist_dir = array($export_dir, 'ver2', 'ver3', 'ver4', 'ver5', 'ver6', 'export1', 'export2', 'export3', 'export4');

// file types to ignore
$blacklist_file_types = array('zip');

// files to ignore
$blacklist_files = array();







// create export dir if not there
function create_export_dir($dir = 'export',$version=1){
	if(is_dir($dir.$version)){
		$version++;
		return create_export_dir($dir,$version);
	}else{
		mkdir($dir.$version);
		return $dir.$version;
	}

}
$export_dir = create_export_dir($export_dir);



// Create zip object
$zip = new ZipArchive();
$zip->open($export_dir.'/'.$export_dir.'.zip', ZIPARCHIVE::CREATE);





// Function that recursively copies files/child directories
function smartCopy($source, $dest, $options=array('folderPermission'=>0755,'filePermission'=>0755),&$zip=null)
    {
        $result=false;

        if (is_file($source)) {
            if ($dest[strlen($dest)-1]=='/') {
                if (!file_exists($dest)) {
                    cmfcDirectory::makeAll($dest,$options['folderPermission'],true);
                }
                $__dest=$dest."/".basename($source);
				$zip->addFile($dest."/".basename($source));
            } else {
                $__dest=$dest;
				$zip->addFile($dest);
            }
            $result=copy($source, $__dest);
            chmod($__dest,$options['filePermission']);

        } elseif(is_dir($source)) {
            if ($dest[strlen($dest)-1]=='/') {
                if ($source[strlen($source)-1]=='/') {
                    //Copy only contents
                } else {
                    //Change parent itself and its contents
                    $dest=$dest.basename($source);
                    @mkdir($dest);
                    chmod($dest,$options['filePermission']);
					$zip->addEmptyDir($dest);
                }
            } else {
                if ($source[strlen($source)-1]=='/') {
                    //Copy parent directory with new name and all its content
                    @mkdir($dest,$options['folderPermission']);
                    chmod($dest,$options['filePermission']);
					$zip->addEmptyDir($dest);
                } else {
                    //Copy parent directory with new name and all its content
                    @mkdir($dest,$options['folderPermission']);
                    chmod($dest,$options['filePermission']);
					$zip->addEmptyDir($dest);
                }
            }

            $dirHandle=opendir($source);
            while($file=readdir($dirHandle))
            {
                if($file!="." && $file!="..")
                {
                     if(!is_dir($source."/".$file)) {
                        $__dest=$dest."/".$file;
                    } else {
                        $__dest=$dest."/".$file;
                    }
                    $result=smartCopy($source."/".$file, $__dest, $options, $zip);
                }
            }
            closedir($dirHandle);

        } else {
            $result=false;
        }
        return $result;
    } // end function








// Get list of all the dirs (and non-php files) to copy
$dirs = array();
if ($handle = opendir('.')) :
    while (false !== ($dir = readdir($handle))) {
		$path_parts = pathinfo($dir);
		if (!preg_match('/.php/i',$dir) // no php
			&& !preg_match('/export/i',$dir) // not export
			&& $dir != '.'
			&& $dir != '..'
			&& substr($dir,0,1) != '.' // no hidden files
			&& !in_array($dir, $blacklist_dir) // not in the blacklist array
			&& !in_array($dir, $blacklist_files)
			&& !in_array($path_parts['extension'], $blacklist_file_types)):
        	$dirs[] = $dir;
		endif;
    }
    closedir($handle);
endif;

// copy all of the dirs
foreach($dirs as $dir){
	$dest = $export_dir.'/'.$dir;
	smartCopy($dir, $dest , $options=array('folderPermission'=>0777,'filePermission'=>0777),$zip);
}







// Get list of all the files to copy
$files = array();
if ($handle = opendir('.')) :
    while (false !== ($file = readdir($handle))) {
        if (preg_match('/.php/i',$file)
			&& !preg_match('/export/i',$file)
			&& !in_array($file, $blacklist_files)):
            $files[] = $file;
        endif;
    }
    closedir($handle);
endif;


foreach($files as $file){

	// Replaced cURL for file_get_contents()

	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url_prefix.$file);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec( $ch );

	curl_close( $ch );


	//$output = file_get_contents($url_prefix.$file);

	$output_clean = preg_replace('/href="'.$base_path.'/i','href="'.$path_replace,$output);// remove old dir from urls
	$output_clean = preg_replace('/.php/i','.html',$output_clean); // remove .php fom nav


	// save file to export dir
	$html_file_name = str_replace('.php','.html',$file);
	if( $fhandle = fopen($export_dir.'/'.$html_file_name, 'w')):
		fwrite($fhandle,$output_clean);
		fclose($fhandle);
		$zip->addFromString($export_dir.'/'.$html_file_name, $output_clean);
	endif;


}


// close the zip file and save
$zip->close();




endif; // end if start=1
?>



<h1 style="font-family:Arial, sans-serif;font-size:24px;margin-left:20px;">When done:</h1>
<ol style="width:400px;font-size:12px;">
	<li>Make sure to check through all js and css files to make sure the paths are relative to the document and not the server. If a path starts with a forward slash it will reference the root of the server. In some cases an AR may be hosted pretty deep into a site structure.</li>
</ol>

<a href="?start=1" style="display:block;background:#F60;border-radius:5px;border:1px solid #333;width:100px;color:#fff;text-decoration:none;padding:5px 2px;text-align:center;font-family:Arial,sans-serif;font-size:11px;margin-left:20px;">Start Export</a>

<?php
if(!empty($_GET['start']) && $_GET['start'] == '1'):
?>
<a href="<?php echo $export_dir.'/'.$export_dir.'.zip'; ?>" style="position:relative;top:20px;left:18px;font-size:14px;color:#000;">Download the zip file</a>
<?php
endif;
?>