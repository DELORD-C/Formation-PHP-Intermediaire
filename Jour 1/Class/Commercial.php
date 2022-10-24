<?php

class Commercial {
    private $nom;

    function __construct(String $nom)
    {
        $this->nom = $nom;
    }

    function vendreVoiture(Voiture $voiture): Void
    {
        echo "$this->nom vend une " . $voiture->getMarque() . " pour " . $voiture->getPrix() . "€.";
    }
}