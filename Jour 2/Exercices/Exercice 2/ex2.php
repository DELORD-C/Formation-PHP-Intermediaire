<?php

include 'Class/Article.php';
include 'Class/Utilisateur.php';
include 'Class/Commentaire.php';

$utilisateur = new Utilisateur ('Jean', 'jean@aol.fr', 'azerty123');
$article = new Article(
    'Ceci est un super article',
    'Mon premier article',
    $utilisateur
);
$utilisateur2 = new Utilisateur ('Basil', 'basil@aol.fr', 'poimlkpoimlk');

$utilisateur2->commentaire($article, "C'est un super article !");
$utilisateur2->commentaire($article, "Je l'ai lu plein de fois !");

var_dump($article->getCommentaires());