<?php

function getTasks() {
  $fopen = fopen(FILE_NAME, 'a+');
  $tasks = [];
  while ($line = fgetcsv($fopen)) {
    array_push($tasks, $line);
  }
  fclose($fopen);
  return $tasks;
}

function saveTask(array $data) {
  $tasks = getTasks();
  $tasks[] = $data;
  $fopen = fopen(FILE_NAME, 'w');
  foreach ($tasks as $task) {
    fputcsv($fopen, $task);
  }

  fclose($fopen);
}
