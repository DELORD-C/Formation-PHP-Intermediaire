<?php

class Voiture extends Vehicule {
    protected $nbPortes;

    function __construct(String $nom, Int $acceleration, Int $freinage, String $marque, Int $nbPortes)
    {
        $this->nom = $nom;
        $this->acceleration = $acceleration;
        $this->freinage = $freinage;
        $this->marque = $marque;
        $this->nbPortes = $nbPortes;
    }
}