# Exercice 2

## 1

En partant des objets créés lors de l'exercice 1.

Le code suivant doit fonctionner :

```php
$client = new Client ('Jean', 'jean@aol.fr', 'azerty123');
$article = new Article(
    'Ceci est un super article',
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

1. Créer la classe `Commentaire`
   - date de création
   - utilisateur
   - contenu
2. Ajouter un attribut `commentaires` de type `Array` à la classe `Article`
3. Créer la méthode ajouterCommentaire(Commentaire $commentaire) dans la classe Article;
4. Créer la méthode `commentaire(Article $article, String $content)` dans la classe `Client` qui permet d'ajouter un `Commentaire` à un `Article`, qui prend en paramètre un `Article` et le contenu du commentaire
5. Créer la méthode `getCommentaires()` dans la classe `Article` qui renvoie un tableau contenant tous les commentaires de cet article


## 2

1. Ajouter un nouvel attribut protégé $categorie de type Catégorie à la classe Article;
2. Ajouter un nouvel attribut protégé $likes de type Tableau à la classe Commentaire;
3. Créer la classe Catégorie qui possède un attribut $nom;
4. Créer la classe Like qui possède un attribut protégé $utilisateur de type Utilisateur;

Lorsque l'on créé un article, on doit impérativement lui fournir un objet catégorie.
Le code suivant doit fonctionner :

```php
$client1 = new Client ('Jean', 'jean@aol.fr', 'azerty123');
$client2 = new Client ('Basil', 'basil@aol.fr', 'poimlkpoimlk');
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
```