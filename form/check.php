<?php

$name			= (!empty($_POST['name']))
					? filter_var($_POST['name'], FILTER_SANITIZE_STRING)
					: die("Votre nom n'a pas été rempli");
$email			= (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty($_POST['email']))
					? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)
					: die("Votre email n'est pas conforme");
$conferences = [];
if(!empty($_POST['conferences'])) {
	foreach ($_POST['conferences'] as $value) {
		$conferences[]	= filter_var($value, FILTER_SANITIZE_STRING);
	}
}
$alreadyCame	= (!empty($_POST['alreadyCame']))
					? filter_var($_POST['alreadyCame'], FILTER_SANITIZE_STRING)
					: '';
switch ($_FILES['avatar']['type']) {
	case 'image/gif':
		$ext = 'gif';
	break;
	case 'image/jpeg':
		$ext = 'jpg';
	break;
	case 'image/png':
		$ext = 'png';
	break;

	default:
		$ext = "forbidden";
}

if($ext != 'forbidden') {
	$origin = $_FILES['avatar']['tmp_name'];
	$filename = $_POST['email'].'_avatar.'.$ext;
	$destination = 'images/'.$filename;
	if(!file_exists('images/')) {
		mkdir('images/', 0777);
	}
	move_uploaded_file($origin, $destination);
}
setcookie('name', $name, time()+3600);
header('location: confirm.php');
exit;
