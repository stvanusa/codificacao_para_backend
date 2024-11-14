<?php
// Inclui o arquivo que contém a classe ContaBancaria
include 'ContaBancaria.php'; // Ou use require 'ContaBancaria.php';

// Cria uma instância de ContaBancaria
$conta = new ContaBancaria('João');

$conta->depositar(1000);
echo 'Saldo após depósito: ' . $conta->extrato() . ' reais<br>';

$conta->sacar(200);
echo 'Saldo após saque: ' . $conta->extrato() . ' reais<br>';

$conta->sacar(1000); // Tentando sacar mais do que o saldo
?>
