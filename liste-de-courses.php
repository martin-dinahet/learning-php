<?php

$courses = [
  "epicerie" => [
    "pates",
    "sauce roquefort",
    "vinaigre",
    "huile",
    "sucre",
  ],
  "petit dejeuner" => [
    "gateaux",
    "nutella",
    "cereales",
  ],
  "frais" => [
    "yaourt aux fruits",
    "creme dessert",
    "beurre",
  ],
  "fruits et legumes" => [
    "pommes",
    "carottes",
    "fraises",
    "radis",
    "melons",
    "tomates",
  ],
];
foreach ($courses as &$rayon) {
  sort($rayon);
}
unset($rayon);

function delete_item(&$courses, $item) {
  foreach ($courses as &$rayon) {
    $selected_item = array_search($item, $rayon);
    if ($selected_item !== false) {
      unset($rayon[$selected_item]);
      return $selected_item;
    }
  }
  return false; // Return false if item not found
}

print_r($courses);
echo("<br/>");
delete_item($courses, "carottes");
echo("<br/>");
print_r($courses);

