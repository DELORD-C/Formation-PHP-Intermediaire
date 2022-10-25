<?php

class Article {
    protected $contenu;
    protected $sujet;
    protected $dateCreation;
    protected $utilisateur;
    protected $commentaires = [];

    function __construct(String $contenu, String $sujet, Utilisateur $utilisateur)
    {
        $this->contenu = $contenu;
        $this->sujet = $sujet;
        $this->dateCreation = new DateTime();
        $this->utilisateur = $utilisateur;
    }

    function getUtilisateur(): Utilisateur
    {
        return $this->utilisateur;
    }

    function ajouterCommentaire(Commentaire $commentaire): Void
    {
        array_push($this->commentaires, $commentaire);
    }

    function getCommentaires():Array
    {
        return $this->commentaires;
    }
}