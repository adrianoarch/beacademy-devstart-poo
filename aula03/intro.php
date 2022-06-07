<?php

include './Aluno.php';
include './Professor.php';
include './Curso.php';

$a1 = new Aluno();
$a1->nome = 'Adriano';
$a1->cpf = '123.456.789-00';
$a1->idade = 20;
$a1->nota = [5.5, 6.5, 7.5];

$cursoPHP = new Curso();
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->cargaHoraria = 88;
$cursoPHP->codigo = '01';
$cursoPHP->descricao = 'Aprender o básico e o intermediário do PHP';

echo "<h1>Curso: {$cursoPHP->nome}</h1>";
echo "<p>Código: {$cursoPHP->codigo}</p>";
echo "<p>Descrição: {$cursoPHP->descricao}</p>";

