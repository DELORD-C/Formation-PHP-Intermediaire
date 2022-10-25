<?php

class Utilisateur {
    protected $nom;
    protected $email;
    protected $pass;

    function __construct(String $nom, String $email, String $pass)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->pass = $pass;
    }

    function commentaire(Article $article, String $content) {
        $commentaire = new Commentaire($this, $content);
        $article->ajouterCommentaire($commentaire);
    }
}