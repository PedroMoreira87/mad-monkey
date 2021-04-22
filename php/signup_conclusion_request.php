<?php 

    include('mysql_connection.php');
    include('signup_conclusion_validations.php');

    $plan = planValidation($_POST['plan']);
    $cpf = cpfValidation($_POST['cpf']);
    $cnpj =  cnpjValidation($_POST['cnpj']);
    $birthDate = birthDateValidation($_POST['birth-date']);
    $cardHolder = cardHolderValidation($_POST['card-holder']);
    $cardNumber = numberValidation($_POST['card-number'], 19);
    $cardExpirationDate = cardExpirationDateValidation($_POST['card-expiration-date']);
    $cardSecurityCode = numberValidation($_POST['card-security-code'], 4);
    $cardType = cardTypeValidation($_POST['card-type']);

    session_start();
    $userID = $_SESSION["user-id"];

    $query = "UPDATE users SET
    plan = '$plan',
    cpf = '$cpf',
    cnpj = '$cnpj',
    birth_date = '$birthDate',
    card_holder = '$cardHolder',
    card_number = '$cardNumber',
    card_expiration_date = '$cardExpirationDate',
    card_security_code = '$cardSecurityCode',
    card_type = '$cardType',
    active = 1
    WHERE id = $userID";

    mysqli_query($connection, $query);
    mysqli_close($connection);

    echo("true");