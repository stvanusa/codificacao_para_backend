<?php

class Carro {
    // Atributos (ou propriedades)
    public $marca;
    public $modelo;
    public $ano;

    // Método (ação)
    public function ligar() {
        echo "O carro está ligado!";
    }

    // Método construtor
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
}


$meuCarro = new Carro("Toyota", "Corolla", 2020);
$meuCarro->ligar();  // Chamando o método
echo $meuCarro->marca;  // Acessando um atributo