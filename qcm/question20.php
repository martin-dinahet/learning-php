<?php

// def du tableau
$translations = [
    "chat" => ["fr" => "chat", "eng" => "cat", "es" => "gato"],
    "chien" => ["fr" => "chien", "eng" => "dog", "es" => "perro"],
    "oiseau" => ["fr" => "oiseau", "eng" => "bird", "es" => "pájaro"],
    "voiture" => ["fr" => "voiture", "eng" => "car", "es" => "coche"],
    "maison" => ["fr" => "maison", "eng" => "house", "es" => "casa"]
];

function translate($word, $sourceLang, $targetLang) {
    global $translations; // accede a la variable globalement

    if (isset($translations[$word])) { // verifier si le mot est dispo
        // verifier si la langue est dispo
        if (isset($translations[$word][$sourceLang]) && isset($translations[$word][$targetLang])) {
          // on renvoie la traduction
            return $translations[$word][$targetLang];
        } else {
          // erreur si la langue n'est pas dispo
            return "Erreur : Langue source ou langue cible non trouvée.";
        }
    } else {
        // erreur si le mot n'est pas dispo
        return "Erreur : Mot non trouvé.";
    }
}



// test de la fonction
echo translate("chat", "fr", "eng") . "\n";  // "cat"

echo translate("chien", "eng", "es") . "\n";  // "perro"
echo translate("chat", "fr", "de") . "\n";  // "Erreur : Langue source ou langue cible non trouvée."
echo translate("lapin", "fr", "eng") . "\n";  // "Erreur : Mot non trouvé."
