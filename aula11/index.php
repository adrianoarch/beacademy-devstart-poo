<?php

include './Produto.php';
include './Categoria.php';

$c1 = new Categoria('Informática', 'Tudo sobre informática');
$c2 = new Categoria('Eletrônicos', 'Tudo sobre eletrônicos');
$c3 = new Categoria('Livros', 'Tudo sobre livros');

$p1 = new Produto('Notebook', 4000.00, $c1);
$p1->setDescricao('Notebook Dell 1565');
// $p1->setCategoria($c2); // não vai funcionar porque categoria é readonly
// $p1->setNome('Notebook');
// $p1->setPreco(4000.00);

$p2 = new Produto('TV', 1800.00, $c2);
// $p2->setNome('Mouse');
// $p2->setPreco(80.00);

$p3 = new Produto('Teclado', 120.50, $c1);
// $p3->setNome('Teclado');

var_dump($p1);
var_dump($p2);
var_dump($p3);