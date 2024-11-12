<?php
class Produto {
    // Atributos da classe
    public $nome;  // Atributo público
    private $preco;  // Atributo privado

    // Método para definir o preço
    public function setPreco($preco) {
        $this->preco = $preco;
    }

    // Método para obter o preço
    public function getPreco() {
        return $this->preco;
    }
}
?>
