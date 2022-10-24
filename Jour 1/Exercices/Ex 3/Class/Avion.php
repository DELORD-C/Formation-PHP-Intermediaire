<?php

class Avion extends VehiculeVolant {
    function accelerer(): void
    {
        if ($this->vitesse <= 0) {
            $this->vitesse += $this->acceleration;
        }
        else {
            $this->vitesse *= $this->acceleration;
        }
    }
}