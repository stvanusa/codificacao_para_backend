<?php


// Definição da classe Carro
class Carro {
    // Propriedades (atributos) da classe
    private $marca;
    private $modelo;
    private $ano;

    // Método construtor para inicializar os valores
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Métodos para acessar os atributos (getters)
    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    // Métodos para modificar os atributos (setters)
    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    // Método para exibir as informações do carro
    public function exibirInformacoes() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
    }
}

?>
