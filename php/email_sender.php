<?php

    function sendEmail($email, $subject, $content){

        include("libraries/PHPMailer/PHPMailerAutoload.php");

        $mailer = new PHPMailer;

        $mailer->isSMTP();
        $mailer->CharSet = "UTF-8";
        $mailer->SMTPAuth = true;
        $mailer->SMTPSecure = "ssl";
        $mailer->Host = "smtp.gmail.com";
        $mailer->Port = 465;
        $mailer->Username = "madmonkey1236@gmail.com";
        $mailer->Password = "mad!!123456";
        $mailer->setFrom("madmonkey1236@gmail.com");
        $mailer->addAddress($email);
        $mailer->Subject = $subject;
        $mailer->Body    = $content;
        $mailer->isHTML();

        $mailer->send();

    }
