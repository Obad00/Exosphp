<?php

function compterVoyelles($phrase) {
    $nbr = 0;
    $voyelles = array('A', 'O', 'I', 'U', 'E', 'a', 'o', 'i', 'u', 'e', 'Y', 'y');
    for ($i = 0; $i < strlen($phrase); $i++) {
        $lettre = substr($phrase, $i, 1);
        if (in_array($lettre, $voyelles)) {
            $nbr++;
        }
    }
    return $nbr;
}

echo "Entrer votre phrase : ";
$phrase = trim(fgets(STDIN));

$nombreVoyelles = compterVoyelles($phrase);

if ($nombreVoyelles > 0) {
    echo "Le nombre de voyelles dans la phrase est : " . $nombreVoyelles;
}

