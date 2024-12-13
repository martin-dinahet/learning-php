<?php

$message = "Bonjour";

$salutation = function() use($message) { // la fonction peut acceder a la variable $message grace a use()
  echo $message . " tout le monde"; // concatenation
};

$salutation(); // => Bonjour tout le monde

// La bonne reponse est la 2e.

