<?php

namespace Animaux;

class Jaguar extends Animal {
    function seNourrir(int $quantité)
    {
        $this->faim += $quantité;    
    }

    function dormir(int $durée)
    {
        $this->fatigue -= $durée;    
    }
}