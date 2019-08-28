<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "c.awulor@yahoo.com";
$subject = "Inquiry";
$body = "Thank you for contacting Sixteen07 web solutions. \n
\n From : $email \n\n Name : $name \n\n  $message";
mail ($to,$subject,$body);

echo "Message sent . <a href='index.html'>click here</a> to continue";



?>
