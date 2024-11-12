<?php
class Membro {
    private $nome;
    private $email;
    private $data_admissao;

    // Construtor da classe
    public function __construct($nome, $email, $data_admissao) {
        $this->nome = $nome;
        $this->email = $email;
        $this->data_admissao = $data_admissao;
    }

    // Métodos acessores (getters)
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDataAdmissao() {
        return $this->data_admissao;
    }

    // Métodos modificadores (setters)
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setDataAdmissao($data_admissao) {
        $this->data_admissao = $data_admissao;
    }
}
?>
