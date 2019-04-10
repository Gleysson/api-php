<?php

class User
{
    private $nome;
    private $email;
    private $senha;


    public function __construct($nome,$email,$senha)
    {
        $this->nome = $nome;
        $this->nome = $email;
        $this->nome = $senha;
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
