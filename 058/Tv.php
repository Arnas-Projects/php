<?php

class Tv {

    private $ekranoDydis;
    private $gamintojas;
    private $savininkas;
    private static $kanalai = []; // statinis
    private $kanalasLive;

    public static function pridetiKanalus($kanalai)
    {
        self::$kanalai = $kanalai; // pasiekiame statinę savybę
        // self yra klasės vardo atitikmuo
    }

    public function __construct($brand, $screenSize)
    {
        $this->gamintojas = $brand;
        $this->ekranoDydis = $screenSize;
    }

    public function parduoti($kam)
    {
        $this->savininkas = $kam;
    }

    public function perjungti($kanalas)
    {
        $this->kanalasLive = $kanalas;
    }

    public function kaZiuri()
    {
        if (!isset(self::$kanalai[$this->kanalasLive])) {
            echo "<h3> {$this->savininkas} per televizorių mato baltą triukšmą </h3>";
        } else {
            echo "<h3> {$this->savininkas} per televizorių mato " . self::$kanalai[$this->kanalasLive] . '</h3>';
        }
    }

    // public function keistiKanalus($kanalai)
    // {
    //     $this->kanalai = $kanalai;
    // }

};