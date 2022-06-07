<?php

include './Usuario.php';
include './Cliente.php';
include './Gestor.php';

$c1 = new Cliente('adriano.98@email.com', '123456');
$c1->setNome('Adriano');
$c1->setDataCadastro('01/01/2020');

$g1 = new Gestor('fulano@email.com', '123456');
$g1->setNome('Fulano');
$g1->setSalario(3000);

var_dump($c1);
var_dump($g1);