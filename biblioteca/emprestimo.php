<?php

class Emprestimo{
    private $id;
    private $data_retirada;
    private $data_devolucao;
    private $multa;
    private $membro_cpf;

    public function __construct($id,$data_retirada,$data_devolucao,$multa,$membro_cpf){
        $this->id = $id;
        $this->data_retirada = $data_retirada;
        $this->data_devolucao = $data_devolucao;
        $this->multa = $multa;
        $this->membro_cpf = $membro_cpf;

    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
}