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

    function getPrix ()
    {
        return $this->prix;
    }

    function setPrix (Int $prix)
    {
        $this->prix = $prix;
    }
}

$voiture1 = new Voiture("Ferrari", 250000, "V12");
$voiture1->marque = 'Mercedes';

var_dump($voiture1->getPrix());