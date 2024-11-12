<?php

include('Emprestimo.php');

$id = $_POST['id'];
$data_retirada = $_POST['data_retirada'];
$data_devolucao = $_POST['data_devolucao'];
$multa = $_POST['multa'];
$membro_cpf = $_POST['membro_cpf'];

// Criar o objeto Emprestimo
$emprestimo = new Emprestimo($id, $data_retirada, $data_devolucao, $multa, $membro_cpf);

// Exibir as informações do empréstimo
echo "<h2>Informações do Empréstimo:</h2>";
$emprestimo->exibirInformacoes();