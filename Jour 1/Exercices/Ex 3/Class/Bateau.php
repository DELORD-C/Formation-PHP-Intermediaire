<?php

class Bateau extends Vehicule {
    function coule (): String
    {
        return $this->nom . " a coulé(e) !";
    }
}