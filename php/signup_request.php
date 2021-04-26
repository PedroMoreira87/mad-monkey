<?php 

    include('mysql_connection.php');
    include('email_sender.php');

    $name = $_POST['signup-name'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-hashed-password'];

    $subject = "Confirmação de cadastro - Mad Monkey";
    $token = generateConfirmationLink();
    $confirmationLink = "localhost/experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/php/signup_confirmation.php/"
    .$token;
    $content = "<a href='$confirmationLink'>Clique aqui para confirmar seu cadastro</a>";

    databaseInsert($connection, $name, $email, $password, $token);
    sendEmail($email, $subject, $content);

    function generateConfirmationLink(){

        $chars = "0123456789abcdefghijklmnopqrstuvwxyz";
        $tokenLength = 64;
        $token = "";
        for($i = 0; $i < $tokenLength; $i++){

            $index = rand(0, 35);
            $token .= $chars[$index];

        }

        return $token;
    }

    function databaseInsert($connection, $name, $email, $password, $token){
        $query = "INSERT INTO temporary_users VALUES ('', '$name', '$email', '$password', '$token')";
        mysqli_query($connection, $query);
        mysqli_close($connection);
    
    }
