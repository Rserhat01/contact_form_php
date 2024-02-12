<?php  

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'mail.investtimesoft.com.tr';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->SMTPDebug  =  2; 

// Hosting sağlayıcınızdan aldığınız mail adresi -- E-mail address you received from your hosting provider
$mail->Username = '....'; 

// Hosting sağlayıcınızdan aldığınız mail adresi şifresi -- Email address password you received from your hosting provider
$mail->Password = 'Rsbaglam1.';

$mail->setFrom($email, $name);

// Gönderilecek mail adresi ve isim -- E-mail address and name to be sent
$mail->addAddress('gönderilecek adres', 'Halit'); 
$mail->CharSet = 'UTF-8';

$mail->Subject = $subject;
$mail->Body = $message;

if($mail->Send()){
	echo "E-mail sent.";
}else{
	echo "E-mail NOT sent.";
}













?>