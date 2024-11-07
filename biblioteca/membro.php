<?php

class Emprestimo{
    private $cpf;
    private $nome;
    private $email;
    private $telefone;
    

    public function __construct($cpf,$nome,$email,$telefone){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        
    }

    public function getcpf(){
        return $this->cpf;
    }

    public function setcpf($cpf){
        $this->cpf = $cpf;
    }
}