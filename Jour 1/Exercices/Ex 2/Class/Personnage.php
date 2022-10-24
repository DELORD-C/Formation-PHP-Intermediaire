<?php

class Personnage {
    protected $nom;
    protected $pdv;
    protected $pa;

    function __construct(String $nom, Int $pdv, Int $pa)
    {
        $this->nom = $nom;
        $this->pdv = $pdv;
        $this->pa = $pa;
    }

    function setPdv(Int $pdv): Void
    {
        $this->pdv = $pdv;
    }

    function getPdv(): Int
    {
        return $this->pdv;
    }

    function getNom(): String
    {
        return $this->nom;
    }

    function attaque (Personnage $cible): Void
    {
        $cible->setPdv($cible->getPdv() - $this->pa);
        echo "$this->nom attaque " . $cible->getNom() . " avec $this->pa points de dégâts.";

        if ($cible->getPdv() <= 0) {
            echo $cible->getNom() . " est mort.";
        }
    }
}