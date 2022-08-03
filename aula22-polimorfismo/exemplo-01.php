<?php

abstract class Animal {

    public function falar()
    {
        return 'Som';
    }

    public function mover()
    {
        return 'Anda';
    }
}

class Cachorro extends Animal {

    public function falar()
    {
        return 'Late';
    }
}

class Gato extends Animal {

    public function falar()
    {
        return 'Mia';
    }
}

class Passaro extends Animal {

    public function falar()
    {
        return 'Canta';
    }

    public function mover()
    {
        return 'Voa e ' . parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto->falar() . '<br>';
echo $pluto->mover() . '<br>';

echo '<hr>';

$garfield = new Gato();
echo $garfield->falar() . '<br>';
echo $garfield->mover() . '<br>';

echo '<hr>';

$fnx = new Passaro();
echo $fnx->falar() . '<br>';
echo $fnx->mover() . '<br>';