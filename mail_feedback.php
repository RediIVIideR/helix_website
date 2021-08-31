<?php

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];


$to = 'helix.orenburg@gmail.com';
$subject = 'Новый отзыв!';
$content = ' 
 Имя:  '. $name . ' 
 Почта:  ' . $email .'
 Отзыв:  '. $feedback;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $content, $headers);
header('Location: thanks.html');
?>