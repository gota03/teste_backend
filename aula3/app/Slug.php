<?php
namespace App;
class Slug{
    private $texto;
    public function __construct($texto){
        $this->texto = $texto;
    }
    public function converter(){
        $resultado = str_replace(" ", "-", $this->getTexto()); //O STR_REPLACE IRA SUBSTITUIR UM DETERMINADO VALOR QUE ESTA SENDO PROCURADO (1 PARÂMETRO), POR OUTRO(2 PARÂMETRO) EM UMA DETERMINADA STRING(3 PARÂMETRO)
        return strtolower($resultado);
    }
    public function getTexto(){
        return trim($this->texto); // A FUNÇÃO TRIM REMOVE TODOS OS ESPAÇOS DO LADO DIREITO E ESQUERDO DO TEXTO
    }
}


