<?php
    include("mysql_connection.php");
    include("session_storage.php");

    $token = basename($_SERVER['REQUEST_URI']);

    $query = "SELECT id, name, email, password FROM temporary_users WHERE confirmation_token = '$token'";
    $result = mysqli_query($connection, $query);
   
    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_row($result);
        $userID = $row[0];
        $name = $row[1];
        $email = $row[2];
        $password = $row[3];
        
        $queries = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password');
        DELETE from temporary_users WHERE confirmation_token = '$token'";
        mysqli_multi_query($connection, $queries);

    }
    else{
        echo("Token inválido!");
        exit();
    }
    
    mysqli_free_result($result);
    mysqli_next_result($connection);
    storeSession($connection, $email, $password);
    header("Location: /mad-monkey/pages/signup_conclusion/");
    exit();