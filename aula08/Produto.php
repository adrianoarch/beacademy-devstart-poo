<?php

declare(strict_types=1);

class Produto
{
    //atributos
    private string $nome;
    private float $preco;

    //métodos
    public function getNome() : string {
        return $this->nome;
    }

    public function setNome(string $novoNome) : void {
        $this->nome = $novoNome;
    }

    public function getPreco() : float {
        return $this->preco;
    }
    
    public function setPreco(float $novoPreco) : void {
        if ($novoPreco < 0) {
            throw new Exception('Preço inválido');
        }

        $this->preco = $novoPreco;
    }
}