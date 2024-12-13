<?php

$students = array( // on cree un array multidimensionnel name => grade
  "Alice" => 15,
  "Bob" => 12,
  "Charlie" => 18
);

foreach ($students as $name => $grade) { // boucle qui prend chaque student de l'array et qui echo name => grade
  echo "$name => $grade\n";
}

// La bonne reponse est la 1ere.
