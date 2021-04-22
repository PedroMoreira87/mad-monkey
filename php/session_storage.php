<?php

    include("mysql_select.php");

    function storeSession($connection, $email, $password){

        $query = "SELECT id FROM users WHERE email = '$email' AND password= '$password'";
        $row = selectUser($connection, $query);
        
        if($row != false){

            session_start();
            $userID = $row[0];
            $_SESSION["user-id"] = $userID;
            return true;
        }
        else{
           return false;
        }
        
    }
