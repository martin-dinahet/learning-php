<?php $name = (!empty($_COOKIE['name'])) ? $_COOKIE['name'] : '';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Confirmation</title>
</head>
<body>
  Merci <?php echo $name ?>, vos données ont bien été transmises.
</body>
</html>
