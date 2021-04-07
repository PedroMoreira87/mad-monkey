<?php

    function validacaoPlano($plano){

        return $plano;

    }

    function validacaoCPF($cpf){

        return $cpf;

    }

    function validacaoCNPJ($cnpj){

        return $cnpj;

    }

    function validacaoDataNascimento($dataNascimento){

        return $dataNascimento;

    }

    function validacaoNome($nome){

        return $nome;

    }

    function validacaoNumero($numero, $comprimento){

        //Valida tanto o código de segurança, quanto o número do cartão

        if(!is_numeric($numero)){
            
        
        }

        if(strlen($numero) != $comprimento){
            erro();
        }

        return $numero;

    }

    function validacaoDataCartao($data){

        if(strpos($data, '/') == false){
            erro();
        }
        else{
            $split = explode("/", $data);
        }

        if(sizeof($split) > 2){
            erro();
        }
        else{
            $mes = $split[0];
            $ano = $split[1];
        }

        if(!is_numeric($mes) || !is_numeric($ano)){
            erro();
        }

        if((int)$mes < 1 || (int)$mes > 12){
            erro();
        }

        if((int)$ano < 21 || (int)$ano > 46){
            erro();
        }

        return $data;

    }

    function validacaoTipoCartao($tipoCartao){

        if($tipoCartao != "credito" && $tipoCartao != "debito"){
            erro();
        }

        return $tipoCartao;

    }

    function erro(){

        header('Location: /experiencia-criativa-implementacao-de-sistemas-de-informacao-tde/php/paginaFinalizacaoCadastro.php');
        exit();

    }