<?php

declare(strict_types=1);

class Produto
{
    //atributos
    private string $nome;
    private float $preco;
    private string $descricao;

    //método mágico de construção do objeto invocado //métodos necessários para o funcionamento do objeto
    public function __construct(string $novoNome, float $novoPreco)
    {
        $this->nome = $novoNome;
        $this->preco = $novoPreco;
    }

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

    public function getDescricao() : string {
        return $this->descricao;
    }

    public function setDescricao(string $novaDescricao) : void {
        $this->descricao = $novaDescricao;
    }
}