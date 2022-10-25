<?php

class Like {
    protected $utilisateur;

    function __construct(Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }
}