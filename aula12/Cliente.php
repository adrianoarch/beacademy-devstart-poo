<?php

declare(strict_types=1);

class Cliente
{       private string $nome;
        private string $email;
        private string $senha;
        private string $cpf;
        private string $dataCadastro;

        public function getNome() : string
        {
            return $this->nome;
        }

        public function getEmail() : string
        {
            return $this->email;
        }

        public function getSenha() : string
        {
            return $this->senha;
        }

        public function getCpf() : string
        {
            return $this->cpf;
        }

        public function getDataCadastro() : string
        {
            return $this->dataCadastro;
        }

        public function setNome(string $nome) : void
        {
            $this->nome = $nome;
        }

        public function setEmail(string $email) : void
        {
            $this->email = $email;
        }

        public function setSenha(string $senha) : void
        {
            $this->senha = $senha;
        }

        public function setCpf(string $cpf) : void
        {
            $this->cpf = $cpf;
        }

        public function setDataCadastro(string $dataCadastro) : void
        {
            $this->dataCadastro = $dataCadastro;
        }

    }