<?php

//  recuperer les donnees
$data = require_once './clients.php';

// calculer l'age
foreach ($data as &$client) {
  $birthday = new DateTime($client['birthday']); // stockage du jour de naissance
  $today = new DateTime(); // stockage de la date actuelle
  $interval = $today->diff($birthday); // calcul de la difference
  $client['age'] = $interval->y; // on assigne
}
unset($client); // nettoyage de la ref

// afficher le tableau
echo "<h2>Première partie - Ages calculés:</h2>";
echo "<pre>";
print_r($data);
echo "</pre>";

// calculer le plus grand score
$maxScore = 0; // score max initialisation
$bestClient = null; // client avec le score max initialisation
foreach ($data as $client) { // pour chaque client
  if ($client['score'] > $maxScore) { // check si le score de ce client > score max
    $maxScore = $client['score']; // si oui on assigne ce score comme le nouveau score max
    $bestClient = $client; // si oui on assigne ce client comme le nouveau meilleur client
  }
}

// afficher le tableau
echo "<h2>Deuxième partie - Client avec le meilleur score:</h2>";
echo "<ul>";
echo "<li>Nom: " . htmlspecialchars($bestClient['name']) . "</li>";
echo "<li>Adresse: " . htmlspecialchars($bestClient['address']) . "</li>";
echo "<li>Score: " . htmlspecialchars($bestClient['score']) . "</li>";
echo "</ul>";


// traitement des codes
$results = [];
foreach ($data as $client) { // pour chaque client
  $name = $client['name'] ?? 'Anonymous'; // assignation du nom du client

  // separation prenom / nom de famille
  $firstname = ''; // initialisation
  $lastname = ''; // initialisation
  if ($client['name'] !== null) { // check si il y a un nom
    $nameParts = explode(' ', $client['name']); // separation des noms
    $lastname = array_pop($nameParts); // nom = dernier element
    $firstname = implode(' ', $nameParts); // prenom = le reste
  } else {  // si il n'y a pas de nom on lui donne anonymous
    $firstname = 'Anonymous';
    $lastname = '';
  }

  // Traitement du code
  $code_num = 'pas de code';
  if ($client['code'] !== null) {
    $code_num = substr($client['code'], -3);
  }

  $results[] = [
    'firstname' => $firstname,
    'lastname' => $lastname,
    'code_num' => $code_num
  ];
}

echo "<h2>Troisième partie - Résultats:</h2>";
echo "<pre>";
print_r($results);
echo "</pre>";
