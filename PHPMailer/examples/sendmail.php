<?php
/**
 * This example shows sending a message using a local sendmail binary.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSMTP();
$mail->Host = "smtp.sendgrid.net";             // Specify main/backup SMTP servers 
$mail->SMTPAuth = true;                  	   // Enable SMTP authentication 
$mail->Username = "azure_a7276dddcd62bd70eebe37b6e1a5f619@azure.com";    // SMTP username 
$mail->Password = "Devilsecret99"; 
//Set who the message is to be sent from
$mail->setFrom('topz.classic@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('topz.classic@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer sendmail test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

