<?php

class Slug{
    private $texto;
    public function __construct($texto){
        $this->texto = $texto;
    }
    public function converter(){
        $resultado = str_replace(" ", "-", $this->texto); //O STR_REPLACE IRA SUBSTITUIR UM DETERMINADO VALOR QUE ESTA SENDO PROCURADO (1 PARÂMETRO), POR OUTRO(2 PARÂMETRO) EM UMA DETERMINADA STRING(3 PARÂMETRO)
        return strtolower($resultado);
    }
}

$slug = new Slug("Teste de backend usando php");
echo $slug->converter();
