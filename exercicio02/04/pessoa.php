<?php

class Pessoa {
    // Atributos
    public $nome;  // Atributo público para o nome
    private $idade; // Atributo privado para a idade

    // Método para definir a idade
    public function setIdade($idade) {
        if ($idade > 0) {
            $this->idade = $idade; // Definindo a idade se for maior que zero
        } else {
            echo "A idade deve ser maior que zero.\n";
        }
    }

    // Método para obter a idade
    public function getIdade() {
        return $this->idade; // Retorna a idade
    }
}
?>
