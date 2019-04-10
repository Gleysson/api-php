<?php

class User
{
    private $nome;
    private $email;
    private $senha;


    public function __construct($body)
    {
        $this->nome = $body->nome;
        $this->email = $body->email;
        $this->senha = $body->senha;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

}
