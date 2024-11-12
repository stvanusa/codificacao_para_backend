<?php

class Livro {
    private $codigo;
    private $titulo;
    private $autor;

    // Construtor
    public function __construct($codigo, $titulo, $autor) {
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    // Getters e Setters

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }
}
