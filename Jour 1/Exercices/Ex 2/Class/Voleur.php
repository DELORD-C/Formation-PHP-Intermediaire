<?php

class Voleur extends Personnage {
    function volALaTire (): Void
    {
        echo "$this->nom dépouille l'ennemi !";
    }
}