<?php 

    include('conexao.php');

    $nome = 'mamaco2';
    $numeroCartao = 'asd';
    $dataCartao = 'asd';
    $codigoCartao = 'asd';
    $tipoCartao = 'credito';

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $query = "UPDATE usuarios SET
    nome_titular = '$nome',
    card_number = '$numeroCartao',
    expiration_date = '$dataCartao',
    security_code = '$codigoCartao',
    tipo_cartao = '$tipoCartao' 
    WHERE email = '$email' AND password = '$password'";

    mysqli_query($conexao, $query);
    mysqli_close($conexao);

    //header('Location: experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/pages/menu.html');
    //exit();

?>