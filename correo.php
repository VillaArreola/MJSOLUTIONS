<?php


    $nombre = $_POST['nombre'];
    $mail = $_POST['email'];
    $tel = $_POST['tel'];
    $service = $_POST['service'];
    $message = $_POST['mensaje'];
    
    

    
    
    $header = 'from: '.$mail."\r\n";
    $header .= "X-Mailer:PHP/".phpversion()."\r\n";
    $header .= "Mime-Version:1.0 \r\n";
    $header .= "content-Type:text/plain";
    
    $message = "Correo enviado por: ".$nombre."\r\n";
    $message .= "Su e-mail es: ".$mail."\r\n";
    $message .= "Telefono: ".$tel."\r\n";
    $message .= "Servicio solicitado: ".$service."\r\n";

    $message .= "Message: ".$_POST['mensaje']."\r\n\r\n\r\n";
     $message .= "Enviado el: ".date('d/m/Y',time());



     $para = 'admon@mjsolucionesenti.com';
     $asunto = 'Mensaje de mi Web';


     if(mail($para,$asunto,utf8_decode($message),$header))
     echo "<script type='text/javascript'>alert('Tu correo ha sido enviado exitosamente, pronto nos comunicamos contigo');</script>";
     echo "<script type='text/javascript'>window.location.href='index.php#about';</script>";

    

   

?>