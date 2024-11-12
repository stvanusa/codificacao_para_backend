<?php
class Carro {
    // Atributos públicos
    public $marca;
    public $modelo;
    
    // Atributo privado
    private $ano;

    // Método para definir o ano, com validação
    public function setAno($ano) {
        if ($ano > 1885) {
            $this->ano = $ano;
        } else {
            echo "Ano inválido. O ano deve ser maior que 1885.<br>";
        }
    }

    // Método para obter o ano
    public function getAno() {
        return $this->ano;
    }
}
?>
