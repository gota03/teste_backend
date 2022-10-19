<?php
use PHPUnit\Framework\TestCase;
use App\Slug;

class SlugTest extends TestCase{
    public function test_converter(){
        $slug = new Slug("  Progamacao PHP  ");
        $this->assertEquals($slug->converter(), "progamacao-php");
    }

}
