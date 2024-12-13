<?php

$livres = [
  "titre1" => "auteur1",
  "titre2" => "auteur2",
  "titre3" => "auteur3",
];

foreach ($livres as $key => $value) { // boucle qui passe par chaque cle => valeur
  echo "Titre: $key, Auteur: $value\n"; // on echo la cle puis la valeur
}
