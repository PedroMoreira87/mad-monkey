<?php
    session_start();

    $userId = $_SESSION["user-id"];

    include("mysql_connection.php");

    $titleID = $_POST["titleID"];
    $titleType = $_POST["titleType"];

    $tableName = "users_has_".$titleType;
    $columnName = $titleType."_id";

    if($titleType != "movies" && $titleType != "series"){
        exit;
    }

    $query = "SELECT * FROM $tableName WHERE user_id = $userId and $columnName = $titleID";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0){
        $query =  "DELETE FROM $tableName WHERE user_id = $userId and $columnName = $titleID";
    }else{
        $query = "INSERT INTO $tableName VALUES ('$userId', '$titleID')";
    }mysqli_query($connection, $query);

