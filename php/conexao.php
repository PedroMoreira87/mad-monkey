<?php

    define('HOST', '127.0.0.1:3307');
    define('USER', 'root');
    define('PASSWORD', 'root');
    define('DB', 'usuarios');

    $conexao = mysqli_connect(HOST, USER, PASSWORD, DB);
    
    
?>