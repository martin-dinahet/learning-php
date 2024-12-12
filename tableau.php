<?php

$liste_de_valeurs = ["Carottes", "Miel", "Tomates", "Gateaux"];
array_push($liste_de_valeurs, "Riz");
echo(implode(", ", $liste_de_valeurs) . "<br>");
