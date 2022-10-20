<?php
use App\Cliente;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase{
    public function testVerificarCamposVazio(){
        $cliente = new Cliente("Zilda", "zilda@email.com", 123456);
        $this->assertTrue($cliente->validaCampo());
    }

    public function testContarItensPreferencias(){
        $cliente = new Cliente("Mateus", "matue@email.com", 123456);
        $cliente->setPreferencias(["Promoção", "Barato"]);
        $this->assertCount(2,$cliente->getPreferencias()); // ESSE TESTE IRA CONTAR QUANTOS ITENS EXISTEM DENTRO DO VETOR
    }
    
    public function testVerificarTotalCompras(){
        $cliente = new Cliente("Mateus", "junior@email.com", 12345);
        $cliente->setTotalCompras(300);
        $this->assertGreaterThan(400, $cliente->getTotalCompras());
    }
}