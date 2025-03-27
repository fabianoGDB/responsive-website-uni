<?php
$name = $_POST[''];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'uni.web.example.com';
$email_subject = 'New Form';
$email_body =
    "User name: $name.\n" .
    "User email: $visitor_email.\n" .
    "Subject: $subject.\n" .
    "User Message: $message.\n";

$to = 'fabiano.bortolussi.dev@gmail.com';
$headers = "From: $email_from\r\n";
$headers = "Reply-To: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);


header("location: contact.html");
