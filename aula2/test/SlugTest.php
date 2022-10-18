<?php

use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase{
    public function test_converter(){
        require_once("app/Slug.php");
        $slug = new Slug("Noticia do estado maior");
        $resultado = "noticia-do-estado-maior";
        $this->assertEquals($slug->converter(), $resultado); // O METODO ASSERTEQUALS SIGNIFICA LITERALMENTE AFIRMAR QUE SEJA IGUAL COM ISSO ESTAMOS COMPARANDO O VALOR DO METODO COM O VALOR PASSADO
      
    }
}