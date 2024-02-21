<?php

echo "Saisir la taille du tab1 : ";
$taille = intval(fgets(STDIN));

// Saisie des valeurs pour tab1
$tab1 = array();
for ($i = 1; $i <= $taille; $i++) {
    echo "Valeur ", $i, " : ";
    $tab1[$i] = intval(fgets(STDIN));
}

echo "Saisir la taille du tab2 : ";
$taille2 = intval(fgets(STDIN));

// Saisie des valeurs pour tab2
$tab2 = array();
for ($i = 1; $i <= $taille2; $i++) {
    echo "Valeur ", $i, " : ";
    $tab2[$i] = intval(fgets(STDIN));
}

echo "Les éléments communs sont : ";
for ($i = 1; $i <= $taille; $i++) {
    for ($j = 1; $j <= $taille2; $j++) {
        if ($tab1[$i] == $tab2[$j]) {
            echo $tab1[$i] . " ";
        }
    }
}

