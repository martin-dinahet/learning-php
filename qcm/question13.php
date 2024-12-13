<?php

$uppercase_function = function($str) { // function anonyme qui prend une string $str et qui la capitalise
  return strtoupper($str); // capitalisation grace a la function strtoupper()
};

echo $uppercase_function("php");
