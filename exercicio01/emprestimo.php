<?php
class Emprestimo {
    private $livro;
    private $membro;
    private $data_emprestimo;
    private $data_devolucao;

    // Construtor da classe
    public function __construct($livro, $membro, $data_emprestimo, $data_devolucao) {
        $this->livro = $livro;
        $this->membro = $membro;
        $this->data_emprestimo = $data_emprestimo;
        $this->data_devolucao = $data_devolucao;
    }

    // Métodos acessores (getters)
    public function getLivro() {
        return $this->livro;
    }

    public function getMembro() {
        return $this->membro;
    }

    public function getDataEmprestimo() {
        return $this->data_emprestimo;
    }

    public function getDataDevolucao() {
        return $this->data_devolucao;
    }

    // Métodos modificadores (setters)
    public function setLivro($livro) {
        $this->livro = $livro;
    }

    public function setMembro($membro) {
        $this->membro = $membro;
    }

    public function setDataEmprestimo($data_emprestimo) {
        $this->data_emprestimo = $data_emprestimo;
    }

    public function setDataDevolucao($data_devolucao) {
        $this->data_devolucao = $data_devolucao;
    }
}
?>
