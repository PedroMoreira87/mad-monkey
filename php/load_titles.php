<?php 

    include("mysql_connection.php");

    if($_POST["titleType"] == "movies"){
        $query = "SELECT 'movies', id, genre FROM movies ORDER BY genre";
    }
    else if($_POST["titleType"] == "series"){
        $query = "SELECT 'series', id, genre FROM series ORDER BY genre";
    }
    else{
        $movies = mysqli_fetch_all(mysqli_query($connection, "SELECT 'movies', id, genre FROM movies ORDER BY genre"));
        $series = mysqli_fetch_all(mysqli_query($connection, "SELECT 'series', id, genre FROM series ORDER BY genre"));
        $array = array_merge($movies, $series);
        array_multisort(array_column($array, 2), SORT_DESC, $array);
        echo json_encode($array);
        exit;
    }
 
    $result = mysqli_query($connection, $query);
    $array = mysqli_fetch_all($result);

    echo json_encode($array);
