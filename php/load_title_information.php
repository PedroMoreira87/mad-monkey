<?php

    include("mysql_connection.php");

    $titleID = $_POST["titleID"];
    $titleType = $_POST["titleType"];

    session_start();
    $userID = $_SESSION["user-id"];

    $columnName = $titleType."_id";
    $tableNameCast = $titleType."_has_artists";
    $tableNameFavorites = "users_has_".$titleType;

    
    if ($titleType != "movies" && $titleType != "series") {
        exit;
    }

    
    $query =  "SELECT * from $titleType WHERE id = $titleID ";
    $result = mysqli_query($connection, $query);
    $general = mysqli_fetch_assoc($result);

    $query =  "SELECT * FROM $tableNameFavorites WHERE $columnName = $titleID AND user_id = $userID";
    $result = mysqli_query($connection, $query);
  
    if(mysqli_num_rows($result) > 0){
        $informations = array($general, "favored");
    }
    else{
        $informations = array($general, "unfavored");
    }
    
    echo json_encode($informations);
