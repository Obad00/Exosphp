<?php

echo "Entrez la taille du tableau : ";
$taille = intval(fgets(STDIN));

$tableau = array();

// Saisie des éléments du tableau
for ($i = 1; $i <= $taille; $i++) {
    echo "Entrez l'élément $i : ";
    $tableau[$i] = trim(fgets(STDIN));
}

for ($i = 1; $i <= $taille; $i++) {
    $freq = 0;
    for ($j = 1; $j <= $i - 1; $j++) {
        if ($tableau[$j] == $tableau[$i]) {
            $freq++;
        }
    }
    if ($freq > 0) {
        echo "Le caractère '" . $tableau[$i] . "' apparaît " . $freq . " fois." . PHP_EOL;
    }
}

