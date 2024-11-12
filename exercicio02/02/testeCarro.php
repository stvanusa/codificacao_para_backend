<?php
// Incluir o arquivo da classe Carro
include 'Carro.php';

// Criando um objeto da classe Carro
$carro = new Carro();

// Definindo a marca e o modelo do carro
$carro->marca = "Toyota";
$carro->modelo = "Corolla";

// Tentando definir o ano (com validação)
$carro->setAno(2020);  // Ano válido
$carro->setAno(1880);  // Ano inválido (deve exibir mensagem de erro)

// Exibindo as informações do carro
echo "Marca: " . $carro->marca . "<br>";
echo "Modelo: " . $carro->modelo . "<br>";
echo "Ano: " . $carro->getAno() . "<br>";
?>
