<?php

function trierDecroissant($tableau) {
  $n = count($tableau);

  for ($i = 0; $i < $n - 1; $i++) { // on parcourt le tableau
    // on trouve l'indice du plus grand element dans le tableau
    $indexMax = $i;
    for ($j = $i + 1; $j < $n; $j++) {
      if ($tableau[$j] > $tableau[$indexMax]) {
        $indexMax = $j;
      }
    }
    // echanger l'element courant avec le tableau trie
    if ($indexMax != $i) {
      $temp = $tableau[$i];
      $tableau[$i] = $tableau[$indexMax];
      $tableau[$indexMax] = $temp;
    }
  }

  return $tableau;
}
