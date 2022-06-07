<?php

declare(strict_types=1);

class Gestor extends Usuario
{
        private float $salario;
        private string $horario;

    public function __construct(float $salario)
    {
        $this->salario = $salario;
    }

    public function getSalario() : float
    {
        return $this->salario;
    }

    public function getHorario() : string
    {
        return $this->horario;
    }

    public function setSalario(float $salario) : void
    {
        $this->salario = $salario;
    }

    public function setHorario(string $horario) : void
    {
        $this->horario = $horario;
    }

}