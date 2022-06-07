<?php

declare(strict_types=1);

class Produto
{
    //atributos
    private string $nome;
    private float $preco;

    //métodos
    public function pegarNome() : string {
        return $this->nome;
    }

    public function alterarNome(string $novoNome) : void {
        $this->nome = $novoNome;
    }

    public function pegarPreco() : float {
        return $this->preco;
    }
    
    public function alterarPreco(float $novoPreco) : void {
        if ($novoPreco < 0) {
            throw new Exception('Preço inválido');
        }

        $this->preco = $novoPreco;
    }

    // public function __construct(string $nome, float $preco)
    // {
    //     $this->nome = $nome;
    //     $this->preco = $preco;
    // }
}