<?php

// include 'Class/Article.php';
// include 'Class/Utilisateur.php';
// include 'Class/Commentaire.php';

// $utilisateur = new Utilisateur ('Jean', 'jean@aol.fr', 'azerty123');
// $article = new Article(
//     'Ceci est un super article',
//     'Mon premier article',
//     $utilisateur
// );
// $utilisateur2 = new Utilisateur ('Basil', 'basil@aol.fr', 'poimlkpoimlk');

// $utilisateur2->commentaire($article, "C'est un super article !");
// $utilisateur2->commentaire($article, "Je l'ai lu plein de fois !");

// var_dump($article->getCommentaires());

include 'Class/Autoloader.php';

$client1 = new Utilisateur ('Jean', 'jean@aol.fr', 'azerty123');
$client2 = new Utilisateur ('Basil', 'basil@aol.fr', 'poimlkpoimlk');
$categorie1 = new Catégorie('News');
$categorie2 = new Catégorie('Sport');
$article = new Article(
    'Ceci est un super article',
    'Mon premier article',
    $client1,
    $categorie1
);

$client2->commentaire($article, "C'est un super article !");
$client2->commentaire($article, "Je l'ai lu plein de fois !");

$commentaires = $article->getCommentaires();

$client1->like($commentaires[0]);

var_dump($article->getCommentaires());