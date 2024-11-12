<?php
// Incluir o arquivo que contém a classe Produto
include 'Produto.php';

// Criando um objeto da classe Produto
$produto = new Produto();

// Definindo o nome do produto
$produto->nome = "Camiseta";

// Usando o método setPreco para definir o preço
$produto->setPreco(50.00);

// Exibindo o nome e o preço do produto
echo "Produto: " . $produto->nome . "<br>";
echo "Preço: R$ " . $produto->getPreco();
?>