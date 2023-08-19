<?php
$name=$_POST['name'];
$vistor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_form='ah649913@gmail.com';
$email_subject='New message';
$email_body="User Name: $name.\n".
"User Email: $vistor_email.\n".
"User Subject: $subject.\n".
"User Message: $message.\n";

$to="nor272001@gmail.com";
$from="From:$email_form\r\n";
$header .="Replay-To:$vistor_email\r\n";
mail($to,$email_subject,$email_body,$header);
header("Location:contact,html");
?>