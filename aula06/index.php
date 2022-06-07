<?php

include './Produto.php';

$p1 = new Produto();
$p1->nome = 'Notebook';
$p1->preco = 4000.00;

$p2 = new Produto();
$p2->nome = 'Mouse';
$p2->preco = -80.00;

var_dump($p1);
var_dump($p2);