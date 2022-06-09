<?php

declare (strict_types = 1);

class Validar {
    public static function validarCpf(string $cpf) : bool {
        if (strlen($cpf) !== 11) {
            die("O CPF deve ter 11 dígitos");
            // return false;
        }
        return true;
    }
}