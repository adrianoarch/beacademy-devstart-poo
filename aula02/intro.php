<?php

include './Aluno.php';

$aluno = new Aluno(); // instância de Aluno
$a1->nome = 'Adriano';
$a1->cpf = '123.456.789-00';
$a1->idade = 20;
$a1->nota = [5.5, 6.5, 7.5];

$aluno1 = [
    'nome' => 'João',
    'cpf' => '123.456.789-00',
    'idade' => 20,
    'nota' => [5.5, 6.5, 7.5]
];

$aluno2 = [
    'nome' => 'Maria',
    'cpf' => '987.654.321-00',
    'idade' => 21,
    'nota' => [6.5, 7.5, 8.5]
];