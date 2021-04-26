<?php 

    include("mysql_connection.php");

    $query = "SELECT id, name FROM movies";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_all($result);

    echo json_encode($row);
