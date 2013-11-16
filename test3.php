<?php
$page=$_POST['page']; 

//This is for the Contact Don page

if ($page=="sendemail") {
	$to = $_POST['email'];
	$comment = $_POST['comment'];

	$subject = "Donhughescountry.com Contact Form";
	$headers = "Reply-To:".$to."\r\nX-Mailer: PHP/".phpversion();
	$headers2 = "Reply-To:dhughescountry@yahoo.com\r\nX-Mailer: PHP/".phpversion();
	$body = "From: Dons Contact Form\r\n\r\n".$to."\r\n\r\n".$comment;

	if (mail($to,$subject,$body,$headers2)) {
		if (mail("dhughescountry@yahoo.com",$subject,$body,$headers)) {
		     echo "Your email was successfull!";
		}
	}
	else {
	    echo "Sorry! Your mail could not be sent.";
	}
}

if ($page=="sendemail2") {
	$to = $_POST['email2'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$postal = $_POST['postal'];
	$country = $_POST['country'];
	
	$subject = "Autographed Photo Request";
	$headers = "Reply-To:".$to."\r\nX-Mailer: PHP/".phpversion();
	$headers2 = "Reply-To:dhughescountry@yahoo.com\r\nX-Mailer: PHP/".phpversion();
	$body = "There is a request for a poster from :\r\n\r\n".$name."\r\n\r\n".$to."\r\n\r\n".$address."\r\n\r\n".$city.", ".$state." ".$postal."\r\n\r\n".$country;
	$body2 = "Thank you for your free autographed photo request.  We will send it to you shortly!";

	if (mail($to,$subject,$body2,$headers2)) {
		if (mail("code@slwdesign.com",$subject,$body,$headers)) {
		     echo "Your email was successfull!";
		}
	}
	else{
	    echo "Sorry! Your mail could not be sent.";
	}
}

?>