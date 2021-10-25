<?php
 
class Pessoa
{
  private $_nome;
  private $_emprego;
  private $_idade;
 
  public function __construct($nome, $emprego, $idade)
  {
      $this->_nome = $nome;
      $this->_emprego = $emprego;
      $this->_idade = $idade;
  }
 
  public function trocarEmprego($novoEmprego)
  {
      $this->_emprego = $novoEmprego;
  }
 
  public function felizAniversario()
  {
      ++$this->_idade;
  }

  public function getIdade(): int
  {
      return $this->_idade;
  }

}
 
// Cria duas novas pessoas
$pessoa1 = new Pessoa("Bob", "Auxiliar de Enfermagem", 34);
$pessoa2 = new Pessoa("Alice", "Nutricionista", 41);
 
// Mostra seus valores iniciais
echo "<pre>Pessoa 1: ", print_r($pessoa1, TRUE), "</pre>";
echo "<pre>Pessoa 2: ", print_r($pessoa2, TRUE), "</pre>";
 
// Bob foi promovido e fez aniversário
$pessoa1->trocarEmprego("Enfermeiro");
$pessoa1->felizAniversario();
 
// Alice também fez aniversário
$pessoa2->felizAniversario();
 
// Mostra os valores finais
echo "<pre>Pessoa 1: ", print_r($pessoa1, TRUE), "</pre>";
echo "<pre>Pessoa 2: ", print_r($pessoa2, TRUE), "</pre>";
 
?>