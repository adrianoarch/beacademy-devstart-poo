<?php

include './Usuario.php';
include './Cliente.php';
include './Gestor.php';

$c1 = new Cliente();
$c1->setNome('Adriano');

$g1 = new Gestor();
$g1->setNome('Fulano');

var_dump($c1);
var_dump($g1);