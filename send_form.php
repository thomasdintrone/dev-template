<?php
function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}
$email = $_POST['email'];
	// Check Email:
	if(isset($email) && !empty($email)) {
		
			if(preg_match("/(%0A|%0D|\n+|\r+|:)/i",$email)) {
				redirect_to('index.php?err=e');
			}
			$email = trim($email);
			if(substr_count($email,"@") != 1 || stristr($email," ")) {
				redirect_to('index.php?err=e');
				}
			else {
				$exploded_email = explode("@",$email);
				if(empty($exploded_email[0]) || strlen($exploded_email[0]) > 64 || empty($exploded_email[1])) {
					redirect_to('index.php?err=e');
				}
				else {
					if(substr_count($exploded_email[1],".") == 0) {
						redirect_to('index.php?err=e');
					}
					else {
						$exploded_domain = explode(".",$exploded_email[1]);
						if(in_array("",$exploded_domain)) {
							redirect_to('index.php?err=e');
						}
						else {
							foreach($exploded_domain as $value) {
								if(strlen($value) > 63 || !preg_match('/^[a-z0-9-]+$/i',$value)) {
									redirect_to('index.php?err=e'); break;
		}	}	}	}	}	}	}
if(empty($_POST['email']) || empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['captcha']) || $_POST['captcha'] != $_POST['captcha_sum'] ) {
	redirect_to('index.php?err=e');
	return false;
} else {
	
		$from_name 	= ucwords($_POST['name']);
		$from_email = $_POST['email'];
		
		$phone 			= $_POST['phone'];
		$comments 		= $_POST['comments'];
		$captcha 		= $_POST['captcha'];
		
		
		$to_name 	= '{CLIENT NAME GOES HERE}';
		$to_email 	= '{EMAIL WHERE FORM IS GOING TO UPON SUBMISSION}';
		
		$subject 	= $to_name . " Website Submission Form";
		$headers 	 = "MIME-Version: 1.0\r \n";
		$headers	.= "Content-type: text/html; charset=UTF-8\r \n";
		$headers	.= "From: \"".$from_name."\" <".$from_email.">\r \n";
		//$headers	.= "Reply-To: \"".$from_name."\" <".$from_email.">\r \n";
		$headers	.= "X-Priority: 3\r \n";
		$headers	.= "X-MSMail-Priority: High\r \n";
		$headers	.= "X-Mailer: Just My Server";
		$date 		= date('d.m.Y');
		
		
		$message = "<html><head><style type=text/css>body, table, td {font-family: verdana; font-size: 11px; color: #325169; padding: 5px;} </style></head>";
		$message .= "<body leftmargin=50px>";
		$message .= "<table><tr><td colspan=2 align=left><b><span style=\"font-size:14px\">".$to_name."</span> <br> Website Submission Form</b></td></tr>";
		$message .= "<tr><td align=left>Name:</td><td align=left>".ucwords($_POST['name'])."</td></tr>";
		$message .= "<tr><td align=left>Phone:</td><td align=left>".$phone."</td></tr>";
		$message .= "<tr><td align=left>Email:</td><td align=left>".$from_email."</td></tr>";
		$message .= "<tr><td align=left>Comments or Questions: </td><td align=left>".$comments."</td></tr>";
		$message .= "<tr><td>&nbsp;</td><td>&nbsp;</td></tr></table></body></html>";
		
		
		$spam_error_message = "No Websites URLs Permitted";
		if (preg_match("/http/i", "$from_name")) 	{ echo "$spam_error_message"; exit(); }
		if (preg_match("/http/i", "$from_email")) 	{ echo "$spam_error_message"; exit(); }
		if (preg_match("/http/i", "$phone")) 		{ echo "$spam_error_message"; exit(); }
		if (preg_match("/http/i", "$comments")) 	{ echo "$spam_error_message"; exit(); }
		if (preg_match("/http/i", "$captcha")) 		{ echo "$spam_error_message"; exit(); }
		
		mail("$to_name<$to_email>", $subject, $message, $headers);
		
}
		
?>