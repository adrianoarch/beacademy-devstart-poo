<?php

include './Validar.php';
include './ValidarBR.php';

$br = new ValidarBR();
$nome = 'Adriano';


echo $br->validarNome($nome);
echo $br->validarDocumento('123456789');
echo $br->validarCodigoPostal('12345678');
echo $nome;