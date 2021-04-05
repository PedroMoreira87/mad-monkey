<?php

    include('conexao.php');

    session_start();
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $query = "SELECT active FROM usuarios WHERE email = '$email' AND password = '$password'";
    $resultado = mysqli_query($conexao, $query);

    $row = mysqli_fetch_row($resultado);
    $active = $row[0];

    if($active == 0){
        header("Location: /experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/pages/finalizacaoCadastro.html");
        exit();
    }
    else{
        header("Location: /experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/pages/menu.html");
        exit();
    }