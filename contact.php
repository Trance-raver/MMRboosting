<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'csgodark2020@gmail.com';

$email_subject = " new contact ";

$email_body = "username: $name.\n"."user email:$visitor_email.\n"."user message: $message.\n";
$to = "guptaakshay908@gmail.com";

$headers = "From : $email_from \r \n";

$header .= "Reply to: $visitor_email \r \n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");







?>

