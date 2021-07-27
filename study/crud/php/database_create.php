<?php

require_once "connection.php";

$connection = newConnection(null); // the database has not yet created
$sql = "CREATE DATABASE IF NOT EXISTS question";

$sql1 = "CREATE TABLE IF NOT EXISTS info (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    questions VARCHAR(100) NOT NULL)";

$result = $connection->query($sql);

if($result)
    echo "Success =)";
else 
    echo "Error: " . $connection->error;

$connection = newConnection();
$result = $connection->query($sql1);

if($result)
    echo "Success =)";
else 
    echo "Error: " . $connection->error;
   
$connection->close();