<?php
function supprimerDoublons($tab, $taille) {
    $tableauSansDoublons = array();
    // Vérifier les doublons
    $doublonTrouve = array();
    for ($i = 0; $i < $taille; $i++) {
        $doublonTrouve[$i] = 0;
    }
   for ($i = 0; $i < $taille; $i++) {
        if ($doublonTrouve[$i] == 0) {
            $tableauSansDoublons[] = $tab[$i];
            for ($j = 0; $j < $taille; $j++) {
                if ($tab[$i] == $tab[$j]) {
                    $doublonTrouve[$j] = 1;
                }
            }
        }
    }
    return $tableauSansDoublons;
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
// Appeler la fonction pour supprimer les doublons
$resultat = supprimerDoublons($tab, $taille);
// Afficher le tableau sans doublons
echo "Tableau sans doublons : ";
print_r($resultat);
