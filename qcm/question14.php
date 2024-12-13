<?php

function somme_pairs($tableau) { // function prend un tableau $tableau
  $somme = 0; // initialisation de la somme
  foreach ($tableau as $nombre) { // boucle pour chaque element du tableau
    if ($nombre % 2 == 0) { // renvoie true si le nombre est pair
      $somme += $nombre; // on ajoute le nombre a la somme
    }
  }
  return $somme; // on renvoie la somme une fois le calcul fait
}
