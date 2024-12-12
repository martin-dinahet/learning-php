<?php

$dictionnary = [
  "cat" => "chat",
  "dog" => "chien",
  "monkey" => "singe",
  "panther" => "panthere",
  "whale" => "baleine",
];

$word = "cat";
$lang = "fr";

if ($lang === "en") {
  $translation = array_search($word, $dictionnary);
} elseif ($lang === "fr") {
  $translation = $dictionnary[$word];
}

echo("$translation\n");
