<?php

class Vehicule {
    public $marque;
    const TVA = "20%";

    function __construct(String $marque)
    {
        $this->marque = $marque;
    }

    function setMarque(String $marque) {
        $this->marque = $marque;
    }

    function getMarque(): String
    {
        return $this->marque;
    }
}