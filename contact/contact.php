<?php 
	
	$name = $_REQUEST[ 'contact-name' ];
	$email = $_REQUEST['contact-email'];
	$message = $_REQUEST[ 'contact-description' ];
	$mail_subject = "Inquiry" . "( by ".$name." )";
	$message = "Name: ".$name." \n\nEmail: ".$email." \n\nMessage: ".$message;
	

	if($name == "" || $number == "" || $email == "" || $message == ""){
		echo "Error in sending message !!! Please try again";
	} else {
		if(!preg_match('/^[0-9]{10}+$/', $number) || preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email)) {
			echo "Error in sending message !!! Please try again";
		} else {
			if ( mail( 'aakashk2910@gmail.com', $mail_subject, $message, "From: noreply@aakash.kamble.de" ) ) {
				echo "Thank you <strong>$name</strong> for contacting me !!!";
			} else {
				echo "Error in sending message !!! Please try again";
			}
		}
	}
	
 ?>