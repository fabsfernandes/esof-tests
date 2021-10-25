<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include("Pessoa.php");

final class PessoaTest extends TestCase
{
    
    public function testFelizAniversario(): void
    {
        $pessoa1 = new Pessoa("Marina", "Engenheira Civil", 34);
        $pessoa1->felizAniversario();
        $resultado = $pessoa1->getIdade();
        $esperado = 35;
        $this->assertEquals($esperado,$resultado);
    }
}