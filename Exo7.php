<?php

echo "Saisir la taille du tab1 : ";
$taille = intval(fgets(STDIN));

// Saisie des valeurs pour tab1
$tab1 = array();
for ($i = 1; $i <= $taille; $i++) {
    echo "Valeur ", $i, " : ";
    $tab1[$i] = trim(fgets(STDIN));
}

$chaineConcatenee = ""; 

// Concaténation des chaînes du tableau
for ($i = 1; $i <= $taille; $i++) {
    $chaineCourante = $tab1[$i];
    $chaineConcatenee .= $chaineCourante;
}

echo "La chaîne concaténée est : " . $chaineConcatenee;

