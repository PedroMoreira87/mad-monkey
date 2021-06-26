<?php

    include("mysql_connection.php");
    include("mysql_select.php");

    session_start();
    $userID = $_SESSION["user-id"];

    $query = "SELECT active FROM users WHERE id = $userID";
    $row = selectUser($connection, $query);
    $active = $row[0];

    if($active == 1){
        echo json_encode("active");
    }
    else{
        echo json_encode("unactive");
    }