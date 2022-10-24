<?php

class Voiture {
    public $marque;
    private $prix;
    protected $moteur;

    function __construct(String $marque, Int $prix, String $moteur)
    {
        $this->marque = $marque;
        $this->prix = $prix;
        $this->moteur = $moteur;
    }

    function getPrix (): Int
    {
        return $this->prix;
    }

    function setPrix (Int $prix): Void
    {
        $this->prix = $prix;
    }

    static function vroom (): Void
    {
        echo 'VROOM !';
    }
}