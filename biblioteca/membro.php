<?php

class Membro {
    private $cpf;
    private $nome;
    private $email;
    private $telefone;

    // Construtor
    public function __construct($cpf, $nome, $email, $telefone) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    // Getters e Setters

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
}
