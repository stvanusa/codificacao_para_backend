<?php
// Incluir o arquivo da classe ContaBancaria
include 'ContaBancaria.php';

// Criando um objeto da classe ContaBancaria
$conta = new ContaBancaria();

// Definindo o titular da conta
$conta->titular = "João da Silva";

// Exibindo o saldo inicial
echo "Titular: " . $conta->titular . "<br>";
echo "Saldo inicial: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "<br>";

// Depositando valores na conta
$conta->depositar(1000);  // Depósito válido
$conta->depositar(-200);  // Depósito inválido

// Exibindo o saldo após o depósito
echo "Saldo após depósito: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "<br>";

// Sacando valores da conta
$conta->sacar(500);   // Saque válido
$conta->sacar(700);   // Saque inválido (saldo insuficiente)
$conta->sacar(-100);  // Saque inválido (valor negativo)

// Exibindo o saldo após o saque
echo "Saldo final: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "<br>";
?>
