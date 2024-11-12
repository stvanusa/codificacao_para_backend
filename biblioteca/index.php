<?php
include('Emprestimo.php');
include('Livro.php');
include('Membros.php');

$emprestimo = new Emprestimo(1,'2024-11-07','2024-11-10',0,'03019076331');
$emprestimo->getId();
$emprestimo ->setId("id", 4579549);

$livro = new Livro(202401,'A vida é maravilhosa','Maria Cecília');
$livro->getCodigo();
$livro ->setCodigo(202402);


$membro = new Membro('00253794421','Vanusa Santos','vanusa@gmail.com','40401000');
$membro->getCpf();
$membro ->setCpf('00553794321');

