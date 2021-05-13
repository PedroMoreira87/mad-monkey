<?php 

    include("mysql_connection.php");

    $query = "SELECT 'movies', id, name FROM movies";
    $result = mysqli_query($connection, $query);
    $movies = mysqli_fetch_all($result);
 

    $query = "SELECT 'series', id, name, season FROM series";
    $result = mysqli_query($connection, $query);
    $series = mysqli_fetch_all($result);

    $array = array_merge($movies, $series);

    echo json_encode($array);
