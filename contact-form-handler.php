<?php
$name  = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'aliaakash1@gmail.com';
$email_subject ="New Form Submission";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n";

$to = "syedaakash.be17@iba-suk.edu.pk";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: index.html");


?>