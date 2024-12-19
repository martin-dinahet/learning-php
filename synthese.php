<?php

// calcule et met à jour les prix TTC d'une liste de produits
function updatePricesWithTax(&$products, $lang) {
  $tva = $$lang;
  // pour chaque produit on applique la taxe
  foreach ($products as &$price) {
    $price = round($price * (1 + $tva), 2);
  }
}

// variables de l'enonce
$products = ['apple' => 1.5, 'orange' => 2.5, 'raspberry' => 4.5];
$fr = 0.2;
$en = 0.15;
$lang = 'fr';

// affichage du prix ht
echo "Prix HT :\n";
print_r($products);

// appel de la fonction
updatePricesWithTax($products, $lang);


// affichage du prix ttc
echo "\nPrix TTC (TVA {$lang}) :\n";
print_r($products);

$products = ['apple' => 1.5, 'orange' => 2.5, 'raspberry' => 4.5];
$lang = 'en';

updatePricesWithTax($products, $lang);
echo "\nPrix TTC (TVA {$lang}) :\n";
print_r($products);
