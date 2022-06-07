<?php

include './Produto.php';

$p1 = new Produto();
$p1->alterarNome('Notebook');
$p1->alterarPreco(4000.00);

$p2 = new Produto();
$p2->alterarNome('Mouse');
$p2->alterarPreco(80.00);

var_dump($p1);
var_dump($p2);