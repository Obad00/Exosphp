<?php

echo "Entrez la taille du tableau : ";
$tailleTableau = intval(fgets(STDIN));

$tableau = array();

// Saisie des éléments du tableau
for ($i = 1; $i <= $tailleTableau; $i++) {
    echo "Entrez l'élément $i : ";
    $tableau[$i] = intval(fgets(STDIN));
}

// Tri du tableau (tri à bulles)
for ($i = 1; $i <= $tailleTableau; $i++) {
    for ($j = $i + 1; $j <= $tailleTableau; $j++) {
        if ($tableau[$i] > $tableau[$j]) {
            $temp = $tableau[$i];
            $tableau[$i] = $tableau[$j];
            $tableau[$j] = $temp;
        }
    }
}

// Calcul de la médiane
if ($tailleTableau % 2 == 0) {
    $mediane = ($tableau[$tailleTableau / 2] + $tableau[($tailleTableau / 2) + 1]) / 2;
} else {
    $mediane = $tableau[($tailleTableau + 1) / 2];
}

echo "La médiane est : " . $mediane;

