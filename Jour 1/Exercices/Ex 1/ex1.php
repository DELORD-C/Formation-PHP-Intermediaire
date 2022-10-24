<?php

class Voiture {
    public $marque;
    public $prix;
    public $moteur;
    private $portes;

    function __construct(String $marque, Int $prix, String $moteur, Int $portes)
    {
        $this->marque = $marque;
        $this->prix = $prix;
        $this->moteur = $moteur;
        $this->portes = $portes;
    }

    function getPortes() {
        return $this->portes;
    }

    function presenter() {
        echo "$this->marque, $this->prix" . "€, $this->moteur, $this->portes portes.";
    }
}

$voiture = new Voiture("Ferrari", 250000, "V12", 4);
$voiture->presenter();