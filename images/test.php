<?php
$source = imagecreatefromjpeg("image_miniature.jpg");
$destination = imagecreatetruecolor(150, 150);


$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);


imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);


imagejpeg($destination, "image_miniature2.jpg");
