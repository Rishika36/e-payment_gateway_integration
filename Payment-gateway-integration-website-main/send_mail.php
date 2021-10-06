<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

	$email=$_SESSION['email'];
	// set the location of the template file to be loaded
	$template_file = "./template_email_activation.php";

	// set the email 'from' information
	$email_from = "The Sparks Foundation <anuradha7542075154@gmail.com>";

	// create a list of the variables to be swapped in the html template
	$swap_var = array(
		"{SITE_ADDR}" => "https://www.heytuts.com",
		"{EMAIL_LOGO}" => "https://www.heytuts.com/images/logo_emailer.png",
		"{EMAIL_TITLE}" => "Verification Mail for Successful Trasaction",
		"{CUSTOM_URL}" => "https://www.heytuts.com/web-dev/php/send-emails-with-php-from-localhost-with-sendmail",
		"{CUSTOM_IMG}" => "https://i1.wp.com/www.heytuts.com/wp-content/uploads/2019/05/thumbnail_Send-emails-with-php-from-localhost-with-SendMail.png",
		"{TO_NAME}" => "The Sparks Foundation",
		"{TO_EMAIL}" => "punam9835064041@gmail.com"
	);

	// create the email headers to being the email
	$email_headers = "From: ".$email_from."\r\nReply-To: ".$email_from."\r\n";
	$email_headers .= "MIME-Version: 1.0\r\n";
	$email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // load the email to and subject from the $swap_var
	$email_to = $swap_var['{TO_EMAIL}'];
	$email_subject = $swap_var['{EMAIL_TITLE}']; // you can add time() to get unique subjects for testing: time();

	// load in the template file for processing (after we make sure it exists)
	if (file_exists($template_file))
		$email_message = file_get_contents($template_file);
	else
		die ("Unable to locate your template file");

	// search and replace for predefined variables, like SITE_ADDR, {NAME}, {lOGO}, {CUSTOM_URL} etc
	foreach (array_keys($swap_var) as $key){
		if (strlen($key) > 2 && trim($swap_var[$key]) != '')
			$email_message = str_replace($key, $swap_var[$key], $email_message);
	}

	// display the email template back to the user for final approval
	echo $email_message;

	// send the email out to the user	
	if ( mail($email, $email_subject, $email_message, $email_headers) )
	{
		  $success="hello";
		  $_SESSION['success']=$success;
  			header('location:donate.php');
		echo '<hr /><center>Success! Your email has been sent to '. $email_to .'</center>';
	}
	else{
				  $error="hello";
		  $_SESSION['error']=$error;
  			header('location:donate.php');
		echo '<hr /><center> UNSUCCESSFUL... Your email was <b>NOT</b> sent. </center>';
}
?>