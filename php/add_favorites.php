<?php
session_start();

$userId = $_SESSION["user-id"];

include("mysql_connection.php");

$movieId = $_POST["movieId"];

$query = "INSERT INTO users_has_movies VALUES ('$userId', '$movieId')";

mysqli_query($connection, $query);