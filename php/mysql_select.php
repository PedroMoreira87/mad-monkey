<?php

    function selectUser($connection, $query){

        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1){

            $row = mysqli_fetch_row($result);
            mysqli_close($connection);
            return $row;

        }
        else{
            mysqli_close($connection);
            return false;
        }

    }