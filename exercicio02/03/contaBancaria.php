<?php

class ContaBancaria {
    public $titular;
    private $saldo;

    public function __construct($titular) {
        $this->titular = $titular;
        $this->saldo = 0;
    }

    private function getSaldo() {
        return $this->saldo;
    }

    public function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
    }

    public function sacar($valor) {
        if ($this->saldo >= $valor) {
            $this->saldo = $this->saldo - $valor;
        } else {
            echo 'Saldo insuficiente';
        }
    }

    public function extrato() {
        return $this->getSaldo();
    }
}
?>
