<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$mobile  = $_POST['mobile'];
$message = $_POST['message'];

$email_from = 'info@https://mohd-mustaqeem.github.io/TMU';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Mobile: $mobile.\n".
              "User Message: $message.\n".
$to = 'mohammadmustaqeem820@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>