<?php
class Livro {
    private $titulo;
    private $autor;
    private $ano_publicacao;

    // Construtor da classe
    public function __construct($titulo, $autor, $ano_publicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_publicacao = $ano_publicacao;
    }

    // Métodos acessores (getters)
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAnoPublicacao() {
        return $this->ano_publicacao;
    }

    // Métodos modificadores (setters)
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setAnoPublicacao($ano_publicacao) {
        $this->ano_publicacao = $ano_publicacao;
    }
}
?>
