<?php



    function validacaoNome($nome){

        return $nome;

    }

    function validacaoNumero($numero, $comprimento){

        //Valida tanto o código de segurança, quanto o número do cartão

        if(!is_numeric($numero)){
            exit();
        }

        if(strlen($numero) != $comprimento){
            exit();
        }

        return $numero;

    }

    function validacaoDataCartao($data){

        if(strpos($data, '/') == false){
            exit();
        }
        else{
            $split = explode("/", $data);
        }

        if(sizeof($split) > 2){
            exit();
        }
        else{
            $mes = $split[0];
            $ano = $split[1];
        }

        if(!is_numeric($mes) || !is_numeric($ano)){
            exit();
        }

        if((int)$mes < 1 || (int)$mes > 12){
            exit();
        }

        if((int)$ano < 21 || (int)$ano > 46){
            exit();
        }

        return $data;

    }

    function validacaoTipoCartao($tipoCartao){

        if($tipoCartao != "credito" && $tipoCartao != "debito"){
            exit();
        }

        return $tipoCartao;

    }

