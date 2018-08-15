<?php
$name = $_POST['name'];
$email = $_POST['email'];
$sendfrom = "contact@michadenheijer.com";
$dropdown = $POST['reason'];
$message = $_POST['message'];
$url = "https://michadenheijer.com/send.html";
$urlfailed="failed.html";
$formcontent="From: $name \n $dropdown \n Message: $message";
$recipient = "micha@michadenheijer.com";
$subject = "Contact Form";
$headers .= 'From: '.$sendfrom."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($recipient, $subject, $formcontent, $headers) or header('Location: '.$urlfailed);
sleep(1);
echo "Message is send";
header('Location: '.$url);
?>