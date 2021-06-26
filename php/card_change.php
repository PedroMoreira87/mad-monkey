<?php
session_start();

$userId = $_SESSION["user-id"];

include("mysql_connection.php");

$cardHolder = $_POST["card-holder"];
$cardNumber = $_POST["card-number"];
$expirationDate = $_POST["expiration-date"];
$securityCode = $_POST["security-code"];

$query = "UPDATE users 
    SET card_holder = '$cardHolder',
        card_number = '$cardNumber',
        card_expiration_date = '$expirationDate',
        card_security_code = '$securityCode'
    WHERE id = '$userId'";

mysqli_query($connection, $query);
