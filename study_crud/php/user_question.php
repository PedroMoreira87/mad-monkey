<?php

require_once "connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$question = $_POST["question"];

$sql = "INSERT INTO info
        VALUES (NULL, '$name', '$email', '$question')";

$connection = newConnection();
$result = $connection->query($sql);

if($result)
    echo "Success =)";
else 
    echo "Error: " . $connection->error;
   
$connection->close();
