<?php

    include("mysql_connection.php");

    $search = $_POST["search"];

    $query = "SELECT id, 'movies' FROM movies WHERE
    name LIKE REPLACE('%$search%',' ','%') OR
    year LIKE REPLACE('%$search%',' ','%') OR 
    genre LIKE REPLACE('%$search%',' ','%') OR
    relevance LIKE REPLACE('%$search%',' ','%')

    UNION 
    SELECT id, 'series' FROM series WHERE
    name LIKE REPLACE('%$search%',' ','%') OR
    year LIKE REPLACE('%$search%',' ','%') OR
    genre LIKE REPLACE('%$search%',' ','%') OR
    relevance LIKE REPLACE('%$search%',' ','%')";

    $result = mysqli_query($connection, $query);

    $array =  mysqli_fetch_all($result);

    echo json_encode($array);