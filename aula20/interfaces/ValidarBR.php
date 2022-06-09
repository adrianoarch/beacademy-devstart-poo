<?php

declare(strict_types=1);

class ValidarBR implements Validar
{

    public function validarNome(string $nome) : void
    {
        if (strlen($nome) < 3) {
            throw new Exception('Nome deve ter no mínimo 3 caracteres');
        }
    }

    public function validarDocumento(string $documento) : void
    {
        if (strlen($documento) !== 11) {
            throw new Exception('Documento deve ter no mínimo 11 caracteres');
        }
    }

    public function validarCodigoPostal(string $codigoPostal) : void
    {
        if (strlen($codigoPostal) < 8) {
            throw new Exception('Código postal deve ter no mínimo 8 caracteres');
        }
    }
}