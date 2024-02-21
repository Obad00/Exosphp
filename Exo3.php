<?php

function rotationDroite($tab, $taille, $positions) {
    for ($i = 0; $i < $positions; $i++) {
        // Stocker le dernier élément du tableau
        $temp = $tab[$taille - 1];
        
        // Déplacer les éléments vers la droite
        for ($j = $taille - 1; $j >= 1; $j--) {
            $tab[$j] = $tab[$j - 1];
        }
        
        // Placer l'élément stocké au début du tableau
        $tab[0] = $temp;
    }
    return $tab;
}

// Demander à l'utilisateur la taille du tableau
echo "Entrez la taille du tableau : ";
$taille = intval(fgets(STDIN));

// Saisir les éléments du tableau
$tab = array();
for ($i = 0; $i < $taille; $i++) {
    echo "Entrez l'élément ", $i+1, " : ";
    $tab[$i] = intval(fgets(STDIN));
}

// Demander le nombre de positions pour la rotation à droite
echo "Entrez le nombre de positions pour la rotation à droite : ";
$positions = intval(fgets(STDIN));

// Appeler la fonction pour effectuer la rotation à droite
$resultat = rotationDroite($tab, $taille, $positions);

// Afficher le tableau après la rotation
echo "Tableau après la rotation à droite : ";
for ($i = 0; $i < $taille; $i++) {
    echo $resultat[$i] . " ";
}

