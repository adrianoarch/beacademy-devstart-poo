<?php

include 'vendor/autoload.php';

use Classes\Config\Usuario as UsuarioConfig;
use Classes\Categoria as Categoria;

$us1 = new Classes\Usuario();

$us2 = new UsuarioConfig();

$c1 = new Categoria();

var_dump($us1);
var_dump($us2);
var_dump($c1);