<?php

    function planValidation($plan){

        return $plan;

    }

    function cpfValidation($cpf){

        return $cpf;

    }

    function cnpjValidation($cnpj){

        return $cnpj;

    }

    function birthDateValidation($birthDate){

        return $birthDate;

    }

    function cardHolderValidation($cardHolder){

        return $cardHolder;

    }

    function numberValidation($number, $length){

        //It validates the card number and the card security code

        if(!is_numeric($number)){
            echo("false");
            exit();
        }

        if(strlen($number) != $length){
            echo("false");
            exit();
        }

        return $number;

    }

    function cardExpirationDateValidation($cardExpirationDate){

        if(strpos($cardExpirationDate, '/') == false){
            echo("false");
            exit();
        }
        else{
            $split = explode("/", $cardExpirationDate);
        }

        if(sizeof($split) > 2){
            echo("false");
            exit();
        }
        else{
            $month = $split[0];
            $year = $split[1];
        }

        if(!is_numeric($month) || !is_numeric($year)){
            echo("false");
            exit();
        }

        if((int)$month < 1 || (int)$month > 12){
            echo("false");
            exit();
        }

        if((int)$year < 21 || (int)$year > 46){
            echo("false");
            exit();
        }

        return $cardExpirationDate;

    }

    function cardTypeValidation($cardType){

        if($cardType != "credit" && $cardType != "debit"){
            echo("false");
            exit();
        }

        return $cardType;
    }

