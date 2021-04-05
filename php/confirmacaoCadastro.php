<?php

    include("conexao.php");
    include('situacaoLogin.php');

    $token = basename($_SERVER['REQUEST_URI']);

    $query = "SELECT name, email, password FROM usuariosprovisorios WHERE confirmation_token = '$token'";

    $resultado = mysqli_query($conexao, $query);
   
    if(mysqli_num_rows($resultado) > 0){

        $row = mysqli_fetch_row($resultado);
        $name = $row[0];
        $email = $row[1];
        $password = $row[2];
        
        $query = "INSERT INTO usuarios (name, email, password) VALUES ('$name', '$email', '$password')";
        mysqli_query($conexao, $query);

        $query = "DELETE from usuariosprovisorios WHERE confirmation_token = '$token'";
        mysqli_query($conexao, $query);

        
        mysqli_close($conexao);

    }

    header('Location: /experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/pages/finalizacaoCadastro.html');
    exit();

?>