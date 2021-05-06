<?php

session_start();

$userId = $_SESSION["user-id"];

include("mysql_connection.php");

$query = "SELECT movies.*
                FROM users_has_movies 
                INNER JOIN users on users_idusers = users.id
                INNER JOIN movies on movies_idmovies = movies.id";

$result = mysqli_fetch_all(mysqli_query($connection, $query));

echo json_encode($result);