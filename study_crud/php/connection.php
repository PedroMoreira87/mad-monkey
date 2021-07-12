<?php

function newConnection($database = 'question') {
    $server = '127.0.0.1:3308';
    $user = 'root';
    $password = '';

    $connection = new mysqli($server, $user, $password, $database);

    if($connection->connect_error) {
        die('Error: ' . $connection->connect_error);
    }

    return $connection;
}