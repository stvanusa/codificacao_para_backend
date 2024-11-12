<?php
// Incluir as classes
include 'livro.php';
include 'membro.php';
include 'emprestimo.php';

// Criando instâncias (objetos) das classes

$livro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954);
$membro = new Membro("João da Silva", "joao@gmail.com", "2023-11-12");
$emprestimo = new Emprestimo($livro, $membro, "2023-11-15", "2023-11-22");

// Modificando os valores usando os métodos acessores
$livro->setTitulo("O Hobbit");
$livro->setAnoPublicacao(1937);

$membro->setNome("Maria Oliveira");
$membro->setEmail("maria@gmail.com");

$emprestimo->setDataDevolucao("2023-11-25");

// Exibindo os valores
echo "Livro: " . $livro->getTitulo() . " - " . $livro->getAutor() . " (" . $livro->getAnoPublicacao() . ")<br>";
echo "Membro: " . $membro->getNome() . " - " . $membro->getEmail() . "<br>";
echo "Empréstimo: " . $emprestimo->getDataEmprestimo() . " até " . $emprestimo->getDataDevolucao() . "<br>";
?>
