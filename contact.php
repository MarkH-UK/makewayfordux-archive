<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'):

	// If the post global variable is set, sanitize it and assign it to a variable	
	if (isset($_POST['name'])) { $first_name = filter_var($_POST['first-name'],  FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS ); } else { $first_name = ''; }
	if (isset($_POST['email'])) { $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL ); } else { $email = ''; }
	if (isset($_POST['message'])) { $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS ); } else { $message = ''; }

	// set form errors to false until we find an error to check before mailing
	$form_errors = false;

	/*	Server side form validation for older browsers	*/

	// if ($name === '') :
	// 	$err_name = '<div class="error">Please enter your name.</div>';
	// 	$form_errors = true;
	// endif; // input field empty

	// if ($email === '') :
	// 	$err_email = '<div class="error">Please provide an email.</div>';
	// 	$form_errors = true;
	// endif; // input field empty

	// if ($message === '') :
	// 	$err_message = '<div class="error">Please enter a message.</div>';
	// 	$form_errors = true;
	// endif; // input field empty

	if (!($form_errors)) :
		
		/*	Prepare email */

		// Send email to luke for dev
		$to 			=	"lukejayhatfield@gmail.com";
		$subject 	=	"Sidewalk Committee Website Inquiry ($name)";
		$message 	= "Sidewalk Committee Inquiry\r\n\r\n\r\n\r\nName:     $name\r\n\r\n" .
								"Message: $message\r\n\r\n";

		$headers 	= "From: inquiry@makewayfordux.org" . "\r\n" .
								"Reply-To: info@makewayfordux.org" . "\r\n" .
								"X-Mailer: PHP/" . phpversion();

		$replyto 	=	"From: $email \r\n".
								"Reply-To: info@makewayfordux.org \r\n";

		if (mail($to, $subject, $message, $headers, '-finfo@makewayfordux.org')):
			header("Location: http://lukehatfield.us/pages/survey-success.php");	// send client to success page
			exit;	// prevent more code from running;
		else:
			$msg = "There was a problem sending the survey. Please email lukejayhatfield at gmail.com directly. We apologize for the inconvenience.";
		endif; // mail form data

	endif; // check for form errors before mailing

endif; // form submitted
?>