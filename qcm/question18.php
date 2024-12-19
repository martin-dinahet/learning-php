<?php
function compterOccurrences($chaine) {
  $occurrences = []; // tableau vide

  $chaine = strtolower($chaine); // on met la chaine en minuscule

  for ($i = 0; $i < strlen($chaine); $i++) { // boucle pour chaque char de la chaine
    $char = $chaine[$i];
    if (ctype_alpha($char)) { // on verifie si c'est une lettre
      if (isset($occurrences[$char])) { // si la lettre est deja presente on augmente sa valeur
        $occurrences[$char]++;
      } else {
        $occurrences[$char] = 1; // sinon on la met dans le tableau avec valeur 1
      }
    }
  }

  return $occurrences;
}
