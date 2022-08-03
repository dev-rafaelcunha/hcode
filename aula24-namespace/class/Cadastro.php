<?php

class Cadastro {

    private string $nome;
    private string $email;
    private string $senha;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha)
    {
        $this->senha = $senha;
    }
    
    public function __toString()
    {
        return json_encode(array(
            $this->getNome(),
            $this->getEmail(),
            $this->getSenha()
        ));
    }
}
   