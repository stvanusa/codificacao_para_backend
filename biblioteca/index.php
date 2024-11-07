<?php
include('Emprestimo.php');

$emprestimo1 = new Emprestimo(1,'2024-11-07','2024-11-10',0,'03019076331');
$emprestimo1->getId();
$emprestimo1->setId(4);