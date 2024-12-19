<?php

function generateUniqueSortedNumbers($count, $max) {
  $drawnNumbers = [];
  while (count($drawnNumbers) < $count) {
  $randomNumber = rand(1, $max);
  if (!in_array($randomNumber, $drawnNumbers)) {
    $drawnNumbers[] = $randomNumber;
  }
  }
  sort($drawnNumbers);
  return implode(' - ', $drawnNumbers);
}

$kenoDrawing = generateUniqueSortedNumbers(20, 70);
echo "Keno Drawing: $kenoDrawing\n";

$mainLotoNumbers = generateUniqueSortedNumbers(5, 49);
$bonusLotoNumber = rand(1, 10);
echo "Loto Drawing: $mainLotoNumbers (Bonus: $bonusLotoNumber)\n";

$mainEuroMillionsNumbers = generateUniqueSortedNumbers(5, 50);
$starNumbers = generateUniqueSortedNumbers(2, 12);
echo "EuroMillions Drawing: $mainEuroMillionsNumbers (Stars: $starNumbers)\n";
