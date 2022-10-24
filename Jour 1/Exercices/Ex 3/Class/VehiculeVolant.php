<?php

class VehiculeVolant extends Vehicule {
    function crash (): String
    {
        return $this->nom . " s'est crashé(e) !";
    }
}