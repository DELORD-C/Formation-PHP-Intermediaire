1. Ajouter une page pour créer un Post, l'auteur sera l'utilisateur connecté.

2. Appliquer du style bootstrap sur toutes les pages.

3. Ajouter la possibilité de laisser et voir des commentaires sur les posts.
    - Modifier le template `post.html` pour ajouter un formulaire de commentaire
    - Créer une classe `Commentaire` avec comme champs :
        - id (Int)
        - post (Int)
        - author (Int)
        - content (String)
    - Ajouter une table commentaire à la db
    - Traiter le formulaire si il est soumis sur la page post.php = `controller->post()`
        - Créer une condition, si un formulaire à été soumis, ajouter le commentaire à la database. puis afficher le post normalement.
    - Modifier le template `post.html` pour ajouter un endroit ou afficher les commentaires du post `{{COMMENTS}}`
    - Modifier la méthode `render` de la classe `Renderer` :
      - Ajouter une méthode `getComments(Post $post ou Int $postId)` à la classe `ORM` qui renvoi tous les commentaires du post
      - Ajouter une méthode `comments(Array $comments)` à la classe `HTMLGenerator` qui renvoi la liste des commentaires au format html
      - Remplacer `{{COMMENTS}}` dans le template