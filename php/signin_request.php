<?php
    include("mysql_connection.php");
    include("session_storage.php");

    $email = $_POST['signin-email'];
    $password = $_POST['signin-hashed-password'];

    //Store the userID in the session and check its status
    $status = storeSession($connection, $email, $password);
    echo json_encode($status);