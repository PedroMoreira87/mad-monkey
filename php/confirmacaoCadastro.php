<?php

    include("conexao.php");

    $token = basename($_SERVER['REQUEST_URI']);

    $query = "SELECT FROM usuariosprovisorios WHERE confirmation_code = '$token'";

    

    
    
?>