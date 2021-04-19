<?php 

    include('conexao.php');

    $name = $_POST['name-cadastro'];
    $email = $_POST['email-cadastro'];
    $password = $_POST['senha_hash'];
    $token = gerarToken();

    colocarNoBanco($conexao, $name, $email, $password, $token);
    enviarEmailConfirmacao($email, $token);

    function gerarToken(){

        $alpha = "0123456789abcdefghijklmnopqrstuvwxyz";
        $tamanhoToken = 64;
        $token = "";
        for($i = 0; $i < $tamanhoToken; $i++){

            $index = rand(0, 35);
            $token .= $alpha[$index];

        }

        return $token;
    }

    function colocarNoBanco($conexao, $name, $email, $password, $token){
        $query = "INSERT INTO usuariosprovisorios VALUES (NULL, '$name', '$email', '$password', '$token')";
        mysqli_query($conexao, $query);
        mysqli_close($conexao);
    
    }

    function enviarEmailConfirmacao($email, $token){

        include("PHPMailer/PHPMailerAutoload.php");

        $linkConfirmacao = "localhost/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/php/confirmacaoCadastro.php/"
        .$token;
    
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
        $mailer->Subject = "Confirmação de cadastro";
        $mailer->Body    = "<a href='$linkConfirmacao'>Clique aqui para confirmar seu cadastro</a>";
        $mailer->isHTML();
    
        $mailer->send();

    }


?>
