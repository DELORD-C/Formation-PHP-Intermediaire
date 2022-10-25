<?php

class Commentaire {
    protected $dateCreation;
    protected $utilisateur;
    protected $contenu;

    function __construct(Utilisateur $utilisateur, String $contenu)
    {
        $this->dateCreation = new DateTime();
        $this->utilisateur = $utilisateur;
        $this->contenu = $contenu;
    }
}