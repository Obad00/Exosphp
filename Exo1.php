<?php
// Variables
$tailleTableau = 0;
$tab = array();
$produit = 1;
$i = 1;

// Saisir la taille du tableau
echo "Saisir la taille du tableau: ";
fscanf(STDIN, "%d\n", $tailleTableau);

// Remplissage du tableau
for ($i = 1; $i <= $tailleTableau; $i++) {
    echo "Entrez l'élément ", $i, " du tableau: ";
    fscanf(STDIN, "%d\n", $tab[$i]);
}

// Calcul du produit des éléments du tableau
for ($i = 1; $i <= $tailleTableau; $i++) {
    $produit = $produit * $tab[$i];
}

// Affichage du produit des éléments du tableau
echo "Le produit de tous les éléments du tableau est : ", $produit, "\n";


