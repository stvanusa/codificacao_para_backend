<?php
class ContaBancaria {
    // Atributos públicos e privados
    public $titular;  // Nome do titular
    private $saldo = 0;  // Saldo da conta, inicialmente 0

    // Método para depositar dinheiro na conta
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;  // Adiciona o valor ao saldo
            echo "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.<br>";
        } else {
            echo "Valor de depósito inválido. O valor deve ser maior que 0.<br>";
        }
    }

    // Método para sacar dinheiro da conta
    public function sacar($valor) {
        if ($valor > 0) {
            if ($this->saldo >= $valor) {
                $this->saldo -= $valor;  // Subtrai o valor do saldo
                echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.<br>";
            } else {
                echo "Saldo insuficiente para realizar o saque.<br>";
            }
        } else {
            echo "Valor de saque inválido. O valor deve ser maior que 0.<br>";
        }
    }

    // Método para exibir o saldo atual
    public function getSaldo() {
        return $this->saldo;
    }
}
?>
