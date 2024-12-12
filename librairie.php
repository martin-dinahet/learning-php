<?php

define('NOM_BIBLIOTHEQUE', 'Bibliothèque Municipale');
$nomUtilisateur = 'Alice Martin';

$bienvenue = function($nom) {
  echo "Bienvenue, $nom, dans la " . NOM_BIBLIOTHEQUE . "!\n";
};

$bienvenue($nomUtilisateur);

$livresDisponibles = [
  "1984" => "George Orwell",
  "Le Petit Prince" => "Antoine de Saint-Exupéry",
  "L'Alchimiste" => "Paulo Coelho",
  "Harry Potter" => "J.K. Rowling"
];

$livresEmpruntes = [];

echo "\nLivres disponibles :\n";

foreach ($livresDisponibles as $titre => $auteur) {
  echo "- $titre par $auteur\n";
}

$livresEmpruntes[] = "1984";
$livresEmpruntes[] = "Le Petit Prince";

echo "\nLivres empruntés par $nomUtilisateur :\n";
foreach ($livresEmpruntes as $livre) {
  echo "- $livre\n";
}

$maxEmprunts = 3;
if (count($livresEmpruntes) > $maxEmprunts) {
  echo "Vous ne pouvez pas emprunter plus de $maxEmprunts livres.\n";
} else {
  echo "Vous pouvez encore emprunter des livres.\n";
}

function retournerLivre(&$emprunts, $titre) {
  $index = array_search($titre, $emprunts);
  if ($index !== false) {
    unset($emprunts[$index]);
    echo "$titre a été retourné avec succès.\n";
  } else {
    echo "$titre n'est pas dans votre liste d'emprunts.\n";
  }
}

retournerLivre($livresEmpruntes, "1984");

function verifierDisponibilite($livres, $titre) {
  if (array_key_exists($titre, $livres)) {
    echo "$titre est disponible dans la " . NOM_BIBLIOTHEQUE . ".\n";
  } else {
    echo "$titre n'est pas disponible dans la " . NOM_BIBLIOTHEQUE . ".\n";
  }
}

verifierDisponibilite($livresDisponibles, "Harry Potter");
verifierDisponibilite($livresDisponibles, "Le Monde de Sophie");

$compterLivres = function($livres) {
  return count($livres);
};

$nombreLivres = $compterLivres($livresDisponibles);
echo "Il reste $nombreLivres livres dans la bibliothèque.\n";

ksort($livresDisponibles);
echo "\nLivres triés par ordre alphabétique :\n";
foreach ($livresDisponibles as $titre => $auteur) {
  echo "- $titre par $auteur\n";
}
