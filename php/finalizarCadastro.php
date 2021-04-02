<?php 

    include('conexao.php');
    include('tratarErrosFinalizacao.php');
    echo("oi");

    session_start();
 
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $query = "UPDATE usuarios SET 
    born_date = '$dataNascimento',
    cpf = '$cpf',
    cnpj = '$cnpj',
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