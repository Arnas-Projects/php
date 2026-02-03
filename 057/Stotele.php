

<?php

// klasės deklaracija

class Stotele {

    public $vardas;
    public $autobusai = [];
    private $id;
    private $paslaptis = 'Bebras';

    public function __construct($pavadinimas)
    {
        $this->id = rand(1000, 9999); // $ ženklo prieš savybę NĖRA
        $this->vardas = $pavadinimas;
    }

    public function __destruct()
    {
        echo '<h2 style="color: crimson;">Objekto nebėra</h2>';
    }

    // pasileidžia, kai mes bandome PAIMTI nematomą arba neegzistuojantį propsą (savybę)
    public function __get($prop)
    {
        if ($prop == 'auto') {
            $this->rodytiAutobusus();
            return;
        }

        // $prop ==> 'id'
        return $this->$prop; // $ ženklas yra, nes tai yra savybės vardo kintamasis
    }

    // pasileidžia kai mes bandome PAKEISTI nematomą ar neegzistuojantį propsą (savybę)
    public function __set($prop, $value)
    {
        // būtinai reikia kažkokio tikrinimo
        $this->$prop = $value;
    }

    public function rodytiAutobusus()
    {
        if (count($this->autobusai) === 0) {
            echo '<h2 style="color: dodgerblue;">Autobusų nėra</h2>';
        }
    }

};

