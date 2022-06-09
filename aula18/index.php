<?php

include './Usuario.php';
include './Cliente.php';
include './Gestor.php';
include './GestorGeral.php';

include './Validar.php';

$c1 = new Cliente('adriano.98@email.com', '123456'); // Construtor do Usuário
$c1->setNome('Adriano');
$c1->setDataCadastro('01/01/2020');

$g1 = new Gestor('fulano@email.com', '123456', 3000); // Construtor do Gestor 
$g1->setNome('Fulano');

$gg1 = new GestorGeral('maria@email.com', '123456', 5000); // Construtor do Gestor Geral

$cpf = "12345678911";

Validar::validarCpf($cpf);

$c1->setCpf($cpf);

var_dump($c1);
var_dump($g1);
var_dump($gg1);
