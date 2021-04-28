<?php

    define('HOST', '127.0.0.1:3306');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB', 'mad_monkey');

    try {
        $connection = mysqli_connect(HOST, USER, PASSWORD, DB);
    } catch (Exception $error) {
        echo($error);
    }