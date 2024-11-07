<?php

class Livro{
    private $codigo;
    private $titulo;
    private $autor;
    
    public function __construct($codigo,$titulo,$autor){
        $this->codigo = $codigo;
        $this->titulo= $titulo;
        $this->autor = $autor;  

    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

}

public function getTitulo(){
    return $this->titulo;
}

public function setTitulo($codigo){
    $this->titulo = $titulo;
}