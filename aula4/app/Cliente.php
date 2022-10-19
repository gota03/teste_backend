<?php
namespace App;

class Cliente{
    private $nome;
    private $email;
    private $cod_cliente;
    private $total_compras;
    private $preferencias = [];

    public function __construct($nome = "", $email = "", $cod_cliente = ""){
        $this->nome - $nome;
        $this->email = $email;
        $this->cod_cliente = $cod_cliente;
    }

    public function validaCampo(){
        if(empty($this->nome)|| empty($this->email)|| empty($this->cod_cliente)){
            return false;
        }
        else{
            return true;
        }
    }
    public function setTotalCompras($valor){
        if($valor<0){
            return false;
        }
        else{
            $this->total_compras = $valor;
        }
    }
    
    public function getTotalCompras(){
        return $this->total_compras;
    }

    public function setPreferencias($valor){
        $this->preferencias = $valor;
    }

    public function getPreferencias(){
        return $this->preferencias;
    }
}
