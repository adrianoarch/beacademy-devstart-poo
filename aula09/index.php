<?php

include './Produto.php';

$p1 = new Produto('Notebook', 4000.00);
$p1->setDescricao('Notebook Dell 1565');
// $p1->setNome('Notebook');
// $p1->setPreco(4000.00);

$p2 = new Produto('Mouse', 80.00);
// $p2->setNome('Mouse');
// $p2->setPreco(80.00);

$p3 = new Produto('Teclado', 120.50);
// $p3->setNome('Teclado');

var_dump($p1);
var_dump($p2);
var_dump($p3);