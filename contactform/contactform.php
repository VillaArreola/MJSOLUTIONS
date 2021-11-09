<?php 

$name = $_POST['name'];
$mail = $_POST['email'];
$tel = $_POST['tel'];
$service = $_POST['service'];
$empresa = $_POST['message'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "correo enviado por: ".$name."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .= "Telefono: ".$tel."\r\n";
$message .= "servicio solicitado: ".$service."\r\n";

$message .= "message: ".$_POST['message']."\r\n\r\n\r\n";
$message .= "enviado el: ".date('d/m/Y',time());

$para = 'martinvillaarreola@gmail.com';
$asunto = 'message de mi web';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu correo ha sido enviado exitosamente, pronto nos comunicamos contigo');</script>";
echo "<script type='text/javascript'>window.location.href='#services';</script>";

 ?>