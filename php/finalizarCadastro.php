<?php

    include('conexao.php');

    
    $nome = validacaoNome($_POST["nome"]);
    $numeroCartao = validacaoNumero($_POST["numerocartao"], 19);
    $codigoCartao = validacaoNumero($_POST["codigocartao"], 4;
    $tipoCartao = validacaoTipoCartao($_POST["tipocartao"]);

    function validacaoDataCartao($data){

        if(!str_contains($data, '/')){
            die("data inválida");
        }
        else{
            $split = explode("/", $data);
        }

        if(sizeof($split) > 2){
            die("data inválida");
        }
        else{
            $mes = (int)$split[0];
            $ano = (int)$split[1];
        }

        if(!is_numeric($mes) || !is_numeric($ano)){
            die("data inválida");
        }

        if((int)$mes < 1 || (int)$mes > 12){
            die("data inválida");
        }

        if((int)$ano < 2020 || (int)$ano > 2046){
            die("data inválida");
        }

        return $data;

    }

    function validacaoNumero($numero, $comprimento){

        //Valida tanto o código de segurança, quanto o número do cartão

        if(!is_numeric($numero)){
            die("numero invalido");
        }

        if(strlen($numero) != $comprimento){
            die("numero invalido");
        }

        return $numero;

    }

    function validacaoNome($nome){

        $charsValidos = 'abcdefghijklmnopqrstuvwxyz ';

        for($i = 0; $i < strlen($nome); $i++){
            if(!str_contains($charsValidos, strtolower($nome[$i])){
                die("nome invalido");
            }
        }

        return $nome;

    }

    function validacaoTipoCartao($tipoCartao){

        if($tipoCartao != "credito" || $tipoCartao != "debito"){
            die("nome invalido");
        }

        return $tipoCartao;

    }
?>