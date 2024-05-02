<?php

class Movie
{
    public $nome;
    public $regista;
    public $cast;
    public $voto;
    public $lingua;
    public $price;

    public function __construct(string $_name, string $_regista, array $_cast, float $_voto, string $_lingua, float $_price)
    {
        $this->nome = $_name;
        $this->regista = $_regista;
        $this->cast = $_cast;
        $this->voto = $_voto;
        $this->lingua = $_lingua;
        $this->price = $_price;
    }

    public function getInfoPrice()
    {
        //posso inserire echo al posto di return se devo stamparlo
        return "$this->nome &euro; $this->price";
    }

    public function getFullInfo()
    {
        $castString = implode(', ', $this->cast);
        return "$this->nome, $this->regista, $castString, $this->voto, $this->lingua, &euro;$this->price,";
    }
}
