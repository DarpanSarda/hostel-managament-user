<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'hackvgec38@gmail.com';
$mail->Password = 'btbabxnquykeavob';
$mail->SMTPSource = 'ssl';
$mail->Port = '587';

$mail->setFrom('hackvgec38@gmail.com');

$mail->addAddress('darpansarda7@gmail.com');

$mail->isHTML(true);

$mail->Subject='Hello World';
$mail->Body='Hello World';
$mail->send();
?>