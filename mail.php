<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent = "From: $firstname $lastname\n $subject \n $message;
$recipient = "johnrusselladamsjr@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent,$mailheader) or die("Error!");
echo "Thank You!";
?>