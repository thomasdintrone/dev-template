 <?php 
 
 if(isset($_GET['pusher']) && $_GET['pusher'] == 'testValue') {
 
	 $data = array(
	
			'test' => 'you\'re a FOOL',
	 
	 );
 
 } else {
	
	$data = array(
	
			'test' => 'just kiddin...',
	 
	 );
}
 
 echo json_encode($data);
 
 ?>