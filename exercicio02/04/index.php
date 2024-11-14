<?php
include 'Pessoa.php';

// Criando uma instância da classe Pessoa
$pessoa = new Pessoa();
$pessoa->nome = "João"; // Definindo o nome da pessoa
$pessoa->setIdade(30);  // Definindo a idade usando o método setIdade

// Exibindo o nome e a idade da pessoa
echo "Nome: " . $pessoa->nome . "\n";
echo "Idade: " . $pessoa->getIdade() . "\n";
?>
