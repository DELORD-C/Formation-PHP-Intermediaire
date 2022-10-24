<?php

class Vehicule {
    protected $nom;
    protected $acceleration;
    protected $freinage;
    protected $marque;
    protected $vitesse = 0;

    function __construct(String $nom, Int $acceleration, Int $freinage, String $marque)
    {
        $this->nom = $nom;
        $this->acceleration = $acceleration;
        $this->freinage = $freinage;
        $this->marque = $marque;
    }

    function accelerer ():Void
    {
        $this->vitesse += $this->acceleration;
    }

    function getVitesse ():Int
    {
        return $this->vitesse;
    }
}