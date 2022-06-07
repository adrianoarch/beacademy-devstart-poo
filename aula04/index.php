<?php

include './Aluno.php';
include './Professor.php';
include './Curso.php';

$p1 = new Professor();
$p1->nome = 'Adriano';
$p1->cpf = '123.456.789-00';
$p1->idade = 20;
$p1->salario = 1000.00;

echo "<h1>Professor: {$p1->nome}</h1>";
echo "<p>CPF: {$p1->cpf}</p>";
echo "<p>Idade: {$p1->idade}</p>";
echo "<p>Salário: {$p1->salario}</p>";
