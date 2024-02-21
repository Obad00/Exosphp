<?php

echo "Entrez la taille du tableau : ";
$taille = intval(fgets(STDIN));

// Saisir les éléments du tableau
$tab = array();
for ($i = 1; $i <= $taille; $i++) {
    echo "Entrez l'élément ", $i, " : ";
    $tab[$i] = intval(fgets(STDIN));
}

// Initialiser le tableau de présence à FAUX pour tous les éléments
$estPresent = array();
for ($i = 1; $i <= $taille; $i++) {
    $estPresent[$i] = 0;
}

// Vérifier les doublons et construire le tableauSansDoublons
echo "Le tableau sans doublons est : ";
for ($i = 1; $i <= $taille; $i++) {
    if ($estPresent[$i] == 0) {
        echo $tab[$i] . " ";
        $estPresent[$i] = 1; // Marquer l'élément comme rencontré
        
        // Comparer avec les éléments suivants pour marquer les doublons
        for ($j = $i + 1; $j <= $taille; $j++) {
            if ($tab[$i] == $tab[$j]) {
                $estPresent[$j] = 1; // Marquer le doublon
            }
        }
    }
}

