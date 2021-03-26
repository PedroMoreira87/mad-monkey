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

<html lang="pt-br">
<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="../css/login-cadastro.css">
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/sjcl.js"></script>
    <script src="../js/login-cadastro.js"></script>

    <title>Login - MadMonkey</title>
</head>
<body>

    <div class="pagina pagina-login">

        <div class="cadastrologin-link absolute-centralizer">

            <div class="cadastrologin-form">

                <div class="cadastrologin-form-title-div">

                    <p class="cadastrologin-form-title-p absolute-centralizer">SIGN IN</p>

                </div>

                <div class="cadastrologin-form-content">

                    <div class="cadastrologin-form-content-centralizer absolute-centralizer">
                        <input type="text" class="cadastrologin-form-input" placeholder="Login">
                        <input type="password" class="cadastrologin-form-input" placeholder="Senha">
                        <a href="#" class="login-form-esqueceusenha">Esqueci minha senha</a>
                        <button class="cadastrologin-form-button">LOGIN</button>
                    </div>

                </div>

            </div>

            <div class="cadastrologin-link-image">

                <img src="../img/logo.png" alt="madmonkeylogo">
                <p class="cadastrologin-link-image-p">Ainda não tem uma conta?</p>
                <button class="cadastrologin-link-image-button">SIGN UP</button>

            </div>

        </div>

    </div>

    <div class="pagina pagina-cadastro">

        <div class="cadastrologin-link absolute-centralizer">

            <div class="cadastrologin-form">

                <div class="cadastrologin-form-title-div">

                    <p class="cadastrologin-form-title-p absolute-centralizer">SIGN UP</p>

                </div>

                <div class="cadastrologin-form-content">

                    <form method="POST" class="cadastrologin-form-content-centralizer absolute-centralizer">
                        <input type="text" class="cadastrologin-form-input" placeholder="Digite um e-mail" name="email">
                        <input id="password" type="password" class="cadastrologin-form-input" placeholder="Digite uma senha" name="senha">
                        <input type="password" class="cadastrologin-form-input" placeholder="Confirme sua senha">
                        <button id="submit-button" class="cadastrologin-form-button" type="submit">SIGN UP</button>
                    </form>

                </div>

            </div>

            <div class="cadastrologin-link-image">

                <img src="../img/logo.png" alt="madmonkeylogo">
                <p class="cadastrologin-link-image-p">Já possui uma conta?</p>
                <button class="cadastrologin-link-image-button">SIGN IN</button>

            </div>

        </div>

    </div>

</body>
</html>