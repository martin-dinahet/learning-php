<?php

$numbers = [2, 4, 6, 8]; // cree un array de nombres
$multiplied_numbers = array_map(function($x) { // array.map fonctionne comme une boucle et cree un nouvel array
  return $x * 2; // chaque nombre de l'array est multiplie par 2
}, $numbers);

print_r($multiplied_numbers);

// la bonne reponse est la 2e.
