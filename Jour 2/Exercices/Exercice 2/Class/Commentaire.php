<?php

class Commentaire {
    protected $dateCreation;
    protected $utilisateur;
    protected $contenu;
    protected $likes = [];

    function __construct(Utilisateur $utilisateur, String $contenu)
    {
        $this->dateCreation = new DateTime();
        $this->utilisateur = $utilisateur;
        $this->contenu = $contenu;
    }

    function ajouterLike(Like $like) {
        array_push($this->likes, $like);
    }
}