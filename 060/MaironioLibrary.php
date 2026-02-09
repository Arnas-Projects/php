<?php

class MaironioLibrary extends Library
{
    // naudojami traitai

    use PrintIt, PrintIt2 {
        PrintIt2::kas insteadof PrintIt; // prioretizavimas traituose
        PrintIt::kas as kasKas;
    }

    // public function kas()
    // {
    //     echo '<h1>Maironis</h1>';
    // }

    public function addBook(string $title, string $author, string $isbn): void
    {
        $this->books[] = [
            'title' => $title,
            'author' => $author,
            'isbn' => $isbn,
            'available' => true,
            'new' => true // iš parsisiųstos library klasės netiko vienas metodas, todėl buvo pakeistas
        ];
    }

    function printArray($array)
    {
        foreach ($array as $index => $value) {
            echo "<div><b>$index: </b><i>$value</i></div>";
        }
    }
}
