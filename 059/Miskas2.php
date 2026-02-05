<?php

abstract class Miskas2 implements Flora
{

    public $plotas = 500;
    public $pavadinimas = 'Juoda Giria';
    public $dangus = 'Mėlynas';

    public static $kas = 'Kelmas';

    public function valio2()
    {
        $this->grybai('');
    }

    public function miskoKas()
    {
        echo '<h3>' . self::$kas . '</h3>'; // statinis klasės be šeimos
        echo '<h3>' . static::$kas . '</h3>'; // statinis klasės su galimu perrašymu iš vaikinės klasės
    }

    public function samanos()
    {

    }

    abstract public function grybai(string $A);
};
