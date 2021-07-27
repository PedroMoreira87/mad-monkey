<div> <h1>POO</h1> </div>

<?php

class Data01 {
    public $dia;
    public $mes;
    public $ano;

    public function print() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }  
}

$aniversario = new Data01();
$aniversario->dia = 1;
$aniversario->mes = 1;
$aniversario->ano = 1970;

echo $aniversario->print(), '<br>';

$casamento = new Data01();
$casamento->dia = 22;
$casamento->mes = 12;
$casamento->ano = 1987;

echo $casamento->print();
