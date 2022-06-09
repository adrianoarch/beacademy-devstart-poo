<?php

declare(strict_types=1);

class GestorGeral extends Gestor {

    private float $bonusAnual;

    public function getbonusAnual() : float
    {
        return $this->bonusAnual;
    }

    public function setbonusAnual(float $bonusAnual) : void
    {
        $this->bonusAnual = $bonusAnual;
    }
 }