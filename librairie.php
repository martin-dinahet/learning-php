<?php

define('LIBRARY_NAME', 'Municipal Library');
$username = 'Alice Martin';

$welcome = function($name) {
  echo "Welcome, $name, to the " . LIBRARY_NAME . "!\n";
};

$welcome($username);

$availableBooks = [
  "1984" => "George Orwell",
  "The Little Prince" => "Antoine de Saint-Exupéry",
  "The Alchemist" => "Paulo Coelho",
  "Harry Potter" => "J.K. Rowling"
];

$borrowedBooks = [];

echo "\nAvailable Books:\n";

foreach ($availableBooks as $title => $author) {
  echo "- $title by $author\n";
}

$borrowedBooks[] = "1984";
$borrowedBooks[] = "The Little Prince";

echo "\nBooks borrowed by $username:\n";
foreach ($borrowedBooks as $book) {
  echo "- $book\n";
}

$maxBorrowings = 3;
if (count($borrowedBooks) > $maxBorrowings) {
  echo "You cannot borrow more than $maxBorrowings books.\n";
} else {
  echo "You can still borrow more books.\n";
}

function returnBook(&$borrowings, $title) {
  $index = array_search($title, $borrowings);
  if ($index !== false) {
    unset($borrowings[$index]);
    echo "$title has been returned successfully.\n";
  } else {
    echo "$title is not in your list of borrowed books.\n";
  }
}

returnBook($borrowedBooks, "1984");

function checkAvailability($books, $title) {
  if (array_key_exists($title, $books)) {
    echo "$title is available in the " . LIBRARY_NAME . ".\n";
  } else {
    echo "$title is not available in the " . LIBRARY_NAME . ".\n";
  }
}

checkAvailability($availableBooks, "Harry Potter");
checkAvailability($availableBooks, "Sophie's World");

$countBooks = function($books) {
  return count($books);
};

$numberOfBooks = $countBooks($availableBooks);
echo "There are $numberOfBooks books in the library.\n";

ksort($availableBooks);
echo "\nBooks sorted alphabetically:\n";
foreach ($availableBooks as $title => $author) {
  echo "- $title by $author\n";
}
