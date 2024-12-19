<?php

function filtrerChainesLongues($tableau) {
  $resultat = array(); // Créer un tableau vide pour stocker les résultats

  foreach ($tableau as $chaine) {
    if (strlen($chaine) >= 5) {
      $resultat[] = $chaine; // Ajouter la chaîne au tableau résultat si elle fait 5 caractères ou plus
    }
  }

  return $resultat;
}


