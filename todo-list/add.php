<?php
require_once __DIR__.'/utils.php';
const FILE_NAME = 'task.csv';
if ( empty($_POST['description']) == false ) {
  $data[] = sprintf("tache: %s", $_POST['description']);
  $data[] = sprintf("date: %s-%s-%s", $_POST['year'], $_POST['month'],$_POST['day']);
  saveTask($data);
}
header('Location: index.php');
exit;
