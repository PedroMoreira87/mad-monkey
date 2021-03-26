<?php

    date_default_timezone_set('Etc/UTC');
    require '../php/PHPMailer/PHPMailerAutoload.php';

    $tituloEmail = "título";

    $message = 'www.facebook.com';

    $mail= new PHPMailer;
    $mail->IsSMTP(); 
    $mail->CharSet = 'UTF-8';   
    $mail->SMTPDebug = 0;       // 0 = nao mostra o debug, 2 = mostra o debug
    $mail->SMTPAuth = true;     
    $mail->SMTPSecure = 'ssl';  
    $mail->Host = 'smtp.gmail.com'; 
    $mail->Port = 465; 
    $mail->Username = 'brunobergamini12345@gmail.com'; 
    $mail->Password = 'gmail192168251367';
    $mail->SetFrom('brunobergamini12345@gmail.com', 'Nome Empresa');
    $mail->addAddress($_POST["email"]);
    $mail->Subject = $tituloEmail;
    $mail->msgHTML($message);

    $mail->send();

    //divisao legal ----




?>

