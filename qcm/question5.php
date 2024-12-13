<?php

function is_even($num) { // function qui prend un nombre $num et retourne true si il est pair, false si il est impair
  return $num % 2 == 0;
}

$result = array_filter([1, 2, 3, 4, 5], 'is_even'); // array filter permet de passer une fonction qui va decider si le nombre reste

print_r($result);

// la bonne reponse est la 2e.
