<?php
session_start();

$userId = $_SESSION["user-id"];

include("mysql_connection.php");

$movieId = $_POST["movieId"];


$query = "SELECT * FROM users_has_movies WHERE users_idusers = $userId and movies_idmovies = $movieId";
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) > 0){
    $query =  "DELETE FROM users_has_movies WHERE users_idusers = $userId and movies_idmovies = $movieId";
}else{
    $query = "INSERT INTO users_has_movies VALUES ('$userId', '$movieId')";
}mysqli_query($connection, $query);
