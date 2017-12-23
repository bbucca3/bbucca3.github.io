<?php
header("Location: http://www.benbucca.me");

$name = $_POST['name'];
$surname = $POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];

$to      = 'ben@benbucca.me';
$subject = 'New Message';
$messageFinal = $message;
$headers = 'From:' . $email . "\r\n" .
    'Reply-To:' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $messageFinal, $headers);

?>