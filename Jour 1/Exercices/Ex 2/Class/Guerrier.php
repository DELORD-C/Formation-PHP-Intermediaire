<?php

class Guerrier extends Personnage {
    function charge (): Void
    {
        echo "$this->nom charge l'ennemi !";
    }
}