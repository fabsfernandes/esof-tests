## Teste unitário PHP

Estas instruções são para execução no seguinte ambiente:
- VS Code
- PHP 7.3
- PHPUnit 9

## Passo-a-passo
1) Baixar a biblioteca PHPUnit (https://phar.phpunit.de/phpunit-9.phar). Note que existem duas opções de download. A que estamos utilizando é via arquivo PHAR.
2) Abrir o terminal via VS Code
![Acessar terminal VS Code](https://github.com/fabsfernandes/esof-tests/blob/main/php/acessar-terminal-vscode.png)
3) Acessar o diretório onde salvou o seu arquivo 'phpunit-9.phar' (no Windows, utilizar o comando **dir** caminho\para\o\diretorio)
![Acessar diretório](https://github.com/fabsfernandes/esof-tests/blob/main/php/acessar-diretorio-onde-bibliotecaphpunit-foisalva.png)
4) Executar o teste utilizando o seguinte comando: phpunit-9.5.10.phar caminho\onde\estah\seu\codigo\php\php-unittest\PessoaTest.php tests
![Acessar diretório](https://github.com/fabsfernandes/esof-tests/blob/main/php/execucao-phpunitest.png)
5) Verificar resultado do teste unitário
![Acessar diretório](https://github.com/fabsfernandes/esof-tests/blob/main/php/resultado-da-execucao.png)
 
 
 ## Referências
 https://marketplace.visualstudio.com/items?itemName=emallin.phpunit
