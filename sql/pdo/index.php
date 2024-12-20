<?php
$options = [
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
  PDO::ATTR_ERRMODE      => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
$pdo = new PDO(
  'mysql:host=localhost;dbname=school',
  'root',
  '',
  $options
);
$title = "School Home";

if(!empty($_POST)){

  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $note = (int) $_POST['note'];
  $educationId = $_POST['professor_id'];
  if(!in_array($educationId, [1,2,3,4,5,6]))
  {
    $educationId = Null;
  }
  $city = $_POST['city'];
  if(!in_array($city, ['PAR', 'LYO', 'BOR', 'MAR']))
  {
    $city = Null;
  }
  $prepare = $pdo->prepare('
    INSERT INTO `students`
    SET `name` = ? , `note` = ?, `city` = ?, `professor_id` = ?
  ');
  $prepare->bindValue(1, $name, PDO::PARAM_STR);
  $prepare->bindValue(2, $note, PDO::PARAM_INT);
  $prepare->bindValue(3, $city, PDO::PARAM_STR);
  $prepare->bindValue(4, $educationId, PDO::PARAM_INT);
  $prepare->execute();

  header('Location: index.php');
}

$stmt = $pdo->query('
  SELECT `p`. `name`, `p`. `note`, `e`. `name` as `enseignement`
  FROM
  `students` as `p`
  LEFT JOIN `professors` as `e`
  ON `p`.`professor_id` =  `e`.`id`
  ORDER BY `p`. `name`
');
include 'index.tpl.php';
