<?php

class Emprestimo
{
    private $id;
    private $data_retirada;
    private $data_devolucao;
    private $multa;
    private $membro_cpf;

    // Construtor com tipos declarados
    public function __construct($id, $data_retirada, $data_devolucao, $multa, $membro_cpf)
    {
        $this->id = $id;
        $this->data_retirada = $data_retirada;  // Certifique-se de que $data_retirada e $data_devolucao são instâncias de DateTime
        $this->data_devolucao = $data_devolucao;
        $this->multa = $multa;
        $this->membro_cpf = $membro_cpf;
    }

    // Getters e Setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function getDataRetirada()
    {
        return $this->data_retirada;
    }

    public function setDataRetirada($data_retirada)
    {
        $this->data_retirada = $data_retirada;
    }

    public function getDataDevolucao()
    {
        return $this->data_devolucao;
    }

    public function setDataDevolucao($data_devolucao)
    {
        $this->data_devolucao = $data_devolucao;
    }

    public function getMulta()
    {
        return $this->multa;
    }

    public function setMulta($multa)
    {
        if (is_numeric($multa) && $multa >= 0) {
            $this->multa = $multa;
        } else {
            throw new Exception("Valor de multa inválido.");
        }
    }

    public function getMembroCpf()
    {
        return $this->membro_cpf;
    }

    public function setMembroCpf($membro_cpf)
    {
        $this->membro_cpf = $membro_cpf;
    }
}
