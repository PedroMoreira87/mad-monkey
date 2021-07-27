<div> <h1>POO</h1> </div>

<?php

class Data02 {
    public $dia;
    public $mes;
    public $ano;

    function __construct($dia, $mes, $ano)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function print() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }  
}

$aniversario = new Data02(1, 1, 1970);


echo $aniversario->print(), '<br>';

$casamento = new Data02(22, 12, 1987);


echo $casamento->print();
