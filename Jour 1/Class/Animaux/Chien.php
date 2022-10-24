<?php

namespace Animaux;

class Chien extends Animal {
    function seNourrir(int $quantité)
    {
        $this->faim += $quantité;    
    }

    function dormir(int $durée)
    {
        $this->fatigue -= $durée;    
    }
}