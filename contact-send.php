<?php
// Error console - remove
ini_set("display_error", "1");
error_reporting(E_ALL);

// Ensure no one loads the page and does a simple spam check.
if(isset($_POST['name']) && empty($_POST['spam_check']))
{
	// Include the email validator for later use.
	require 'email-validator.php';
	$validator = new EmailAddressValidator();
	
	// Declare the $errors variable we will use later to store error messages
	$errors = array();
	
	// Set up the basic variables
	$input_name = strip_tags($_POST['name']);
	$input_email = strip_tags($_POST['email']);
	$input_subject = strip_tags("Donhughescountry.com Contact Form");
	$input_message = strip_tags($_POST['message']);
	
	// Check to see if any of the required fields are empty.
	$required = array('Name field' => 'name', 'Email field' => 'email', 'Message field' => 'message');
	
	// Check to ensure required $_POST values are not empty.
	foreach($required as $key=>$value)
	{
		if(isset($_POST['value']) && $_POST[$value] !== '')
		{
			continue;
		} else {
			$errors[] = $key . ' cannot be left blank';
		}
	}
	
	// Make sure email is valid.
	if (!$validator->check_email_address($input_email))
	{
		$errors[] = 'Email address is invalid.';
	}
	
	// Check for errors
	if(empty($errors)) 
	{
		// No errors, send mail using conditional to ensure it was sent.
		if(mail('dhughescountry@yahoo.com', "$input_subject - Message from: $input_name", $input_message, "From: $input_email"))
		{
			echo 'Your email has been sent.';
		} else {
			echo 'There was a problem sending your email.';
		}
	} else {
		// Errors were found. Output all errors to the user.
		echo implode('<br />', $errors);
	}
} else {
	die('Direct access to this page is not allowed.');
}
?>