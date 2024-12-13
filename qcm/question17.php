<?php

function inverserChaine($str) {
    $longueur = strlen($str); // On recupere la longueur de la chaine
    $inversee = ''; // initialisation de la chainee inversee

    // on parcourt la chaine de droite a gauche
    for ($i = $longueur - 1; $i >= 0; $i--) {
        $inversee .= $str[$i]; // on ajoute chaque caractere a la chaine inversee
    }

    return $inversee;
}
