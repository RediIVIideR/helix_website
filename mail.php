<?php
$doctor = $_POST['doc'];
$center = $_POST['center'];
$time = $_POST['time'];
$name = $_POST['name'];
$phone = $_POST['phone'];


$to = 'helix.orenburg@gmail.com';
$subject = 'Новый заказ!';
$content = "
 Доктор:  " . $doctor . '
 Центр:  ' . $center .  '  
 Время:  ' . $time . '  
 Имя:  '. $name . '  
 Телефон:  ' . $phone;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $content, $headers);
header('Location: thanks.html');
?>