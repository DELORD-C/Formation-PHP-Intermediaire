# Exercice 1

## 1

Le code suivant doit fonctionner

```php=
<?php
$voiture = new Voiture("Ferrari", 250000, "V12", 4);
echo $voiture->getPortes();
```
et afficher le nombre de porte de $voiture

## 2

Le code suivant

```php=
<?php
$voiture = new Voiture("Ferrari", 250000, "V12", 4);
$voiture->presenter();
```

doit afficher :
Ferrari, 250000€, V12, 4 portes.