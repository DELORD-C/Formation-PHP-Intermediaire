# Exercice 1

Créer les objets suivants :

- Article
  - $contenu, protégé de type String
  - $dateCreation, protégé de type DateTime
  - $sujet, protégé de type String
  - $user, protégé de type User
- User
  - $nom, protégé de type String
  - $email, protégé de type String
  - $pass, protégé de type String

Le code suivant doit fonctionner :

```php
$client = new Client ('Jean', 'jean@aol.fr', 'azerty123');
$article = new Article(
    'Ceci est un super article',
    $date,
    'Mon premier article',
    $client
);
var_dump($article->getClient());
//le code doit afficher les détails de $client.
```