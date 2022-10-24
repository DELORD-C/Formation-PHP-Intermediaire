<?php

class Voiture extends Vehicule {
    private $prix;
    private $moteur;
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

    function getPrix() {
        return $this->prix;
    }

    function presenter() {
        echo "$this->marque, $this->prix" . "€, $this->moteur, $this->portes portes.";
    }
}