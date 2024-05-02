<?php

class Movie
{
    public $nome;
    public $regista;
    public $cast;
    public $voto;
    public $lingua;
    public $price;

    public function __construct(string $_name, string $_regista, array $_cast, float $_price)
    {
        $this->nome = $_name;
        $this->regista = $_regista;
        $this->cast = $_cast;
        $this->price = $_price;
    }

    public function getInfoPrice()
    {
        //posso inserire echo al posto di return se devo stamparlo
        echo "$this->nome &euro; $this->price";
    }
}
