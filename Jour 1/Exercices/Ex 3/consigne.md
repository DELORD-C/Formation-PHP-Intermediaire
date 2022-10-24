# Exercice 6

Considérons les classes suivantes :

- Vehicule qui a pour attributs :
  - $nom protégé de type string
  - $acceleration protégé de type int
  - $freinage protégé de type int
  - $marque protégé de type string
  - $vitesse protégé de type int qui a pour valeur de base 0
- VehiculeVolant qui étend Vehicule
- Moto qui étend Vehicule
- Bateau qui étend Vehicule
- Avion qui étend VehiculeVolant
- Helicoptère qui étend VehiculeVolant
- Voiture qui étend Vehicule et qui a pour attributs :
    - $nbPortes protégé de type int

Dans des fichiers différents, créer les classes avec leurs constructeurs, setters et getters nécessaires (voir plus tard les attributs a modifier);

Ajouter une méthode accélérer() à Vehicule qui ajoute son $acceleration à sa $vitesse

Ajouter une méthode wheeling() à Moto qui retourne la phrase : "[NOM DU VEHICULE] lève sa roue avant !" seulement si la $vitesse est supérieure à 0

Ajouter une méthode crash() à VehiculeVolant qui retourne la phrase :"[NOM DU VEHICULE] s'est crashé(e) !"

Ajouter une méthode coule()à Bateauqui retourne la phrase : [NOM DU VEHICULE] à coulé(e)"

Surcharger la méthode accélérer()dans Avion afin que celle-ci multiplie la $vitesse par $acceleration (attention il faudra mettre une condition pour que la vitesse ne reste pas à 0 au départ);

Dans index.php, inclure les autres fichiers, instancier un véhicule de chaque type et tester les différentes méthodes.