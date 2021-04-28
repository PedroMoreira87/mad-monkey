<?php

    include("mysql_connection.php");

    $titleID = $_POST["titleID"];
    
    $query =  "SELECT * FROM movies WHERE id = $titleID";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);
