<?php

session_start();

$userId = $_SESSION["user-id"];

include("mysql_connection.php");

$query = "SELECT 'movies', movies.*
                FROM users_has_movies 
                INNER JOIN users on user_id = users.id
                INNER JOIN movies on movies_id = movies.id";

$movies = mysqli_fetch_all(mysqli_query($connection, $query));

$query = "SELECT 'series', series.*
            FROM users_has_series 
            INNER JOIN users on user_id = users.id
            INNER JOIN series on series_id = series.id;";

$series = mysqli_fetch_all(mysqli_query($connection, $query));

$array = array_merge($movies, $series);

echo json_encode($array);