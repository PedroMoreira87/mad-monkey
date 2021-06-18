<?php

    include("mysql_connection.php");

    session_start();
    $userID = $_SESSION["user-id"];
    $password = $_POST["hashed-password"];

    $query = "UPDATE users SET password = '$password' WHERE id = '$userID' ";
    mysqli_query($connection, $query);