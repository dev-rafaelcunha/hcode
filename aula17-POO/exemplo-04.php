<?php

class Endereco {

    private string $logradouro;
    private int $numero;
    private string $cidade;

    public function __construct($a, $b, $c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct()
    {
        unset($this->logradouro);
        unset($this->numero);
        unset($this->cidade);
    }

    public function __toString()
    {
        return $this->logradouro.', '.$this->numero.' - '.$this->cidade;
    }
}

$obEndereco = new Endereco('Rua Ademar Saraiva Leão', '123', 'Santos');
echo '<pre>';
echo $obEndereco;
echo '</pre>';
exit;