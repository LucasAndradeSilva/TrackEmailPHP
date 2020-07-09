<?php

require_once('mailer/PHPMailer.php');
require_once('mailer/Exception.php');
require_once('mailer/SMTP.php');
// require 'OAuth.php';
// require 'POP3.php';
// require_once('mailer/PHPMailerAutoload.php');
use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\Exception;
use  PHPMailer\PHPMailer\SMTP;

    $mail = new PHPMailer(true);
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'lucas9.la2@gmail.com';
    $mail->Password = '161312lucas';
    $mail->Port = 587;
     
    $mail->setFrom($_POST['emailEnvia']);
    $mail->addAddress($_POST['emailEnvia']);
     
    $mail->isHTML(true);
     
    $mail->Subject = "Teste 4";
    $mail->Body    = "<h1>Teste Pixel Tracker</h1> <img src='http://trackermysql/record.php?log=true&name=Lucas Andrade&email=lucas.andrade@visaogrupo.com.br&date=2020-07-09 02:47:41pm' width='1' height='1' />";
    $mail->AltBody = "aaaaaaa";
     
    if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
         header('Location: index.php?enviado');
   }

?>