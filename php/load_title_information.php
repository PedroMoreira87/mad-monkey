<?php

    include("mysql_connection.php");

    $titleID = $_POST["titleID"];
    $titleType = $_POST["titleType"];
    
    if ($titleType != "movies" && $titleType != "series") {
        exit;
    }

    $query =  "SELECT * FROM $titleType WHERE id = $titleID";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);
