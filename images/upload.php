<?php
define('PER', 0.4);
$fileName = null;
$title = 'Aucun titre';
session_start();
if(!empty($_POST)){
  if( getimagesize($_FILES['image']['tmp_name']) == false ){
    $_SESSION['message'] = "ce n'est pas une image";
    header('Location: upload.php');
    exit;
  }
  $file = $_FILES['image'];
  $title = $_POST['title'];
  if ( filesize($file['tmp_name']) > 1000000 ){
    $_SESSION['message'] = "Le poids de l'image dépasse 1 Mo";
    header('Location: upload.php');
    exit;
  }
  $info = getimagesize($file['tmp_name']);
  $info['mime'];
  if( $info['mime'] != 'image/jpeg'){
    $_SESSION['message'] = "Le type de l'image n'est pas correcte télécharger une image JPEG/JPG uniquement";
    header('Location: upload.php');
    exit;
  }

  list($W, $H) = $info;

  $newW = $W * PER;
  $newH = $H * PER;
  $im_dest = imagecreatetruecolor($newW, $newH);
  $im_source = imagecreatefromjpeg($file['tmp_name']);
  imagecopyresampled($im_dest, $im_source, 0, 0, 0, 0, $newW, $newH, $W, $H);
  $fileName = md5(uniqid(rand(), true)) . '.jpg';
  imagejpeg($im_dest, $fileName, 100);


  if( file_exists('info.json') ){
    $info = json_decode(file_get_contents('info.json'), true);
    $fileNameOld = $info['fileName'];
    unlink($fileNameOld);
   }
  $info = [
    'title' => htmlentities($title),
    'fileName' => $fileName,
    'W' => $newH,
    'H' => $newH
  ];
  file_put_contents('info.json',json_encode($info));
  $_SESSION['message'] = "Merci pour votre image";
}

if( file_exists('info.json') ){
   $info = json_decode(file_get_contents('info.json'), true);
   $fileName = $info['fileName'];
   $title = $info['title'];
   $W = $info['W'];
}

include './upload.tpl.php';
