<?php

// Définition d'une constante pour le nom de la bibliothèque
define('LIBRARY_NAME', 'Municipal Library');

// Initialisation d'une variable avec le nom de l'utilisateur
$username = 'Alice Martin';

// Fonction anonyme qui affiche un message de bienvenue à l'utilisateur
$welcome = function($name) {
  echo "Welcome, $name, to the " . LIBRARY_NAME . "!\n"; // Affichage du message de bienvenue avec le nom de la bibliothèque
};

// Appel de la fonction de bienvenue avec le nom de l'utilisateur
$welcome($username);

// Tableau associatif représentant les livres disponibles avec leur auteur
$availableBooks = [
  "1984" => "George Orwell",
  "The Little Prince" => "Antoine de Saint-Exupéry",
  "The Alchemist" => "Paulo Coelho",
  "Harry Potter" => "J.K. Rowling"
];

// Tableau pour stocker les livres empruntés
$borrowedBooks = [];

// Affichage de la liste des livres disponibles dans la bibliothèque
echo "\nAvailable Books:\n";
foreach ($availableBooks as $title => $author) {
  echo "- $title by $author\n"; // Affichage du titre et de l'auteur de chaque livre
}

// Ajout de deux livres à la liste des livres empruntés
$borrowedBooks[] = "1984";
$borrowedBooks[] = "The Little Prince";

// Affichage des livres empruntés par l'utilisateur
echo "\nBooks borrowed by $username:\n";
foreach ($borrowedBooks as $book) {
  echo "- $book\n"; // Affichage de chaque livre emprunté
}

// Vérification du nombre maximal de livres empruntés
$maxBorrowings = 3;
if (count($borrowedBooks) > $maxBorrowings) {
  echo "You cannot borrow more than $maxBorrowings books.\n"; // Message si l'utilisateur dépasse la limite de livres empruntés
} else {
  echo "You can still borrow more books.\n"; // Message indiquant que l'utilisateur peut encore emprunter des livres
}

// Fonction pour retourner un livre emprunté
function returnBook(&$borrowings, $title) {
  // Recherche de l'index du livre dans le tableau des livres empruntés
  $index = array_search($title, $borrowings);
  if ($index !== false) {
    // Suppression du livre du tableau si trouvé
    unset($borrowings[$index]);
    echo "$title has been returned successfully.\n"; // Message de confirmation
  } else {
    // Message d'erreur si le livre n'est pas dans la liste des emprunts
    echo "$title is not in your list of borrowed books.\n";
  }
}

// Appel de la fonction pour retourner le livre "1984"
returnBook($borrowedBooks, "1984");

// Fonction pour vérifier la disponibilité d'un livre dans la bibliothèque
function checkAvailability($books, $title) {
  // Vérifie si le titre existe dans le tableau des livres disponibles
  if (array_key_exists($title, $books)) {
    echo "$title is available in the " . LIBRARY_NAME . ".\n"; // Livre disponible
  } else {
    echo "$title is not available in the " . LIBRARY_NAME . ".\n"; // Livre non disponible
  }
}

// Vérification de la disponibilité de "Harry Potter" et "Sophie's World"
checkAvailability($availableBooks, "Harry Potter");
checkAvailability($availableBooks, "Sophie's World");

// Fonction anonyme pour compter le nombre d'éléments dans un tableau
$countBooks = function($books) {
  return count($books); // Retourne le nombre d'éléments dans le tableau
};

// Appel de la fonction pour obtenir le nombre de livres disponibles
$numberOfBooks = $countBooks($availableBooks);
echo "There are $numberOfBooks books in the library.\n"; // Affichage du nombre de livres dans la bibliothèque

// Tri des livres disponibles par ordre alphabétique (selon le titre)
ksort($availableBooks);
echo "\nBooks sorted alphabetically:\n";
foreach ($availableBooks as $title => $author) {
  echo "- $title by $author\n"; // Affichage des livres triés par titre
}
