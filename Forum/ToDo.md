1. Ajouter la possibilité de laisser et voir des likes sur les commentaires.
    - Modifier le template `post.html` pour ajouter un bouton (formulaire avec champ input hidden) de like sur les commentaires
    - Créer une classe `Like` avec comme champs :
        - id (Int)
        - comment (Int)
        - author (Int)
    - Ajouter une table like à la db
    - Traiter le formulaire si il est soumis sur la page post.php = `controller->post()`
        - Créer une condition, si un formulaire à été soumis, ajouter le like à la database. puis afficher le post normalement.

2. Le nombre de like doit s'afficher à coté de chaque commentaire
   - Modifier la méthode html generator pour ajouter le nombre de like. 
     - (Nous allons avoir besoin de récupérer cette donnée)

3. Un utilisateur ne peut liker un commentaire qu'une seule fois
   - Condition lors de l'ajout (ORM) si existe déjà, alors on ajoute pas
   

4. Le bouton like doit changer si l'utilisateur a déjà liké le commentaire
   - Le bouton pour dislike doit être fonctionnel
     - Condition dans htmlGenerator pour afficher "like" si pas déjà liké, et "dislike" si déjà liké,
     - Modifier méthode newLike dans l'orm pour supprimer si déjà existant