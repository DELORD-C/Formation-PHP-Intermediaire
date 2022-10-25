# Exercice 1

En partant des objets créés lors de l'exercice 1.

Le code suivant doit fonctionner :

```php
$client = new Client ('Jean', 'jean@aol.fr', 'azerty123');
$article = new Article(
    'Ceci est un super article',
    $date,
    'Mon premier article',
    $client
);
$client2 = new Client ('Basil', 'basil@aol.fr', 'poimlkpoimlk');

$client2->commentaire($article, "C'est un super article !");
$client2->commentaire($article, "Je l'ai lu plein de fois !");

var_dump($article->getCommentaires());

// On obtient un tableau contenant les commentaires de l'article $article
// Chaque commentaire possède une date de création, un utilisateur, et un contenu
```