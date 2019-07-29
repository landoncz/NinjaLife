<?php

if ( strlen(trim($_POST["email"])) > 0 ) $email = stripslashes(trim($_POST["email"]));
if ( strlen(trim($_POST["message"])) > 0 ) $message = stripslashes(trim($_POST["message"]));
if ( strlen(trim($_POST["name"])) > 0 ) $name = stripslashes(trim($_POST["name"]));
if ( strlen(trim($_POST["childName"])) > 0 ) $childName = stripslashes(trim($_POST["childName"]));
if ( strlen(trim($_POST["childAge"])) > 0 ) $childAge = stripslashes(trim($_POST["childAge"]));
if ( strlen(trim($_POST["school"])) > 0 ) $school = stripslashes(trim($_POST["school"]));

//if ( isset( $email ) && isset( $name ) && isset( $childName ) && isset( $childAge) && isset( $school )) {
    $message = strip_tags( trim( $message ));
    $name = strip_tags( trim( $name ));
    $childName = strip_tags( trim( $childName ));
    $childAge = strip_tags( trim( $childAge ));
	$message = str_replace( "\\r\\n", "<br>", $message );
	$message = str_replace( "\\n", "<br>", $message );
	$message = str_replace( "\\r", "<br>", $message );
	$to = "scott@ninja-life.com";
	$from_name = "Ninja Life Website - After School Signup - " . $name;
	$from_email = "donotreply@ninja-life.com";
	$subject = "Ninja Life After-School Signup Form";
	$body  = "<p>The following is a user-submitted email from Ninja-Life.com after school sign-up form, ";
    $body .= "please do not reply.</p><p>Message submitted from " . $email;
    $body .= ".</p><p>Parent Name: " . $name . "</p>";
    $body .= "</p><p>Parent Email: " . $email . "</p>";
    $body .= "</p><p>Child Name(s): " . $childName . "</p>";
    $body .= "</p><p>Child Age(s): " . $childAge . "</p>";
    $body .= "</p><p>School: " . $school . "</p>";
	$body .= "</p><p>Note: " . $message . "</p>";
	$body .= "<p>IP: " . $_SERVER["REMOTE_ADDR"] . "</p>";
	hg_mail( $to, $from_name, $from_email, $subject, $body, 0 );
//}

//header( "Location: http://ninja-life.com/contact.php?success=1");

function hg_mail( $to, $from_name, $from_address, $subject, $body, $check_errors=0 )
	{
		// First check to make sure it is not a bogus to address
		if ( !((stristr( $to, '@test.com' ) === FALSE ) &&
					(stristr( $to, '@testing.com' ) === FALSE ) &&
					(stristr( $to, '@none.com' ) === FALSE ) &&
					(stristr( $to, 'nobody@' ) === FALSE ) &&
					(stristr( $to, 'noone@' ) === FALSE ) &&
					(stristr( $to, 'donotreply@' ) === FALSE ) &&
					(stristr( $to, 'test@' ) === FALSE ))) {
						return 0;
		}
		
		// Make sure input variables are nice and pretty
		$to           = trim( $to );
		$from_name    = trim( $from_name );
		$from_address = trim( $from_address );
		$subject      = trim( $subject );
		$body         = trim( $body );

		// Is the OS Windows or Mac or Linux???
		if ( strtoupper(substr(PHP_OS,0,3)=='WIN') ) {
			$eol="\r\n";
		} else if ( strtoupper(substr(PHP_OS,0,3)=='MAC') ) {
			$eol="\r";
		} else {
			$eol="\n";
		}
		
		// Common Headers
		$headers .= 'From: ' . $from_name . ' <' . $from_address . '>' . $eol;
		$headers .= 'Reply-To: ' . $from_name . ' <' . $from_address . '>' . $eol;
		$headers .= 'Return-Path: ' . $from_name . ' <' . $from_address . '>' . $eol;
		$headers .= "Message-ID: <" . $now . " TheSystem@" . $_SERVER['SERVER_NAME'] . ">" . $eol;
		// These two to help avoid spam-filters
		$headers .= "X-Mailer: PHP v" . phpversion() . $eol;
		// Boundry for marking the split & Multitype Headers
		$headers .= 'MIME-Version: 1.0' . $eol;
		$headers .= "Content-Type: text/html; charset=ISO-8859-1;" . $eol;
		$headers .= "Content-Transfer-Encoding: 7bit" . $eol . $eol;
		
		// BEGIN Message
		$msg  = "";
		$msg .= '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional">
	<html>
	<head>
	  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
	  <title></title>
	</head>
	<body bgcolor="#ffffff" text="#000000">
	';
		$msg .= $body . $eol;
		$msg .= "</body></html>";
		
		// SEND THE EMAIL
		// INI lines are to force the From Address to be used !
		ini_set( sendmail_from, $from_address );
		$response = mail( $to, $subject, $msg, $headers );
		ini_restore( sendmail_from );
		
		// Play nice and unset variables
		unset( $to );
		unset( $from_name );
		unset( $from_address );
		unset( $subject );
		unset( $body );
		unset( $msg );
		unset( $headers );
		return $response;
	}


// Check for empty fields
    if(empty($_POST['name'])      ||
    empty($_POST['email'])     ||
    empty($_POST['message'])   ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        echo "No arguments Provided!";
        return false;
    }
   
    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email_address = strip_tags(htmlspecialchars($_POST['email']));
    //$phone = strip_tags(htmlspecialchars($_POST['phone']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    
    // Create the email and send the message
    $to = 'landonz@gmail.com;scott@ninja-life.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Website Contact Form:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
    $headers = "From: noreply@ninja-life.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";   
    mail($to,$email_subject,$email_body,$headers);
    return true;         
?>
