<?php

$character = [
  "f_name"  => "Jesse",
  "l_name"  => "Pinkman",
  "address" => "332 16th St SW",
  "city"  => "Albuquerque",
  "country" => "USA",
];
$character["job"] = "dealer";
echo(implode(", ", $character) . "<br>");
