<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Sender: \n\n $name \n\n\n Message: \n\n $message";
$recipient = "";       // recipient of the mail
$subject = "Contact Form Mail";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "E-Mail was send succesfully." . " -" . "<a href='/' style='text-decoration:none;color:#420b0b;'> Contact Form</a>";
?>