<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'josephinenya@yahoo.fr';

$email_subject = 'Nouveau message';

$email_body = "User Name: $name.\n".
                "User Name: $visitor_email.\n".
                "Subject: $visitor_email.\n".
                "User Message: $message.\n";

$to = 'nyajosephine@yahoo.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");






?>