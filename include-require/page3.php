<?php
 # On inclus le fichier contenant (uniquement) les fonctions créées pour le site
 # Notez l'utilisation du require_once() qui évitera une accidentelle seconde inclusion du fichier de fonctions
require_once 'utils/functions.php';

# On inclus le model, qui contient toute la logique script
require 'utils/model.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon super site - page 3</title>
</head>

<body>

<?php include 'views/header.php'; ?>

<?php include_once 'views/menu.php'; ?>

<h2>Titre page 3</h2>

<p>
	Bonjour <em><?php echo $name; ?></em>
</p>

<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nesciunt dolore totam autem recusandae, quod saepe nemo ratione distinctio esse beatae adipisci tempora rem! Pariatur dolorum labore non animi quae.
</p>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nesciunt dolore totam autem recusandae, quod saepe nemo ratione distinctio esse beatae adipisci tempora rem! Pariatur dolorum labore non animi quae.
</p>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nesciunt dolore totam autem recusandae, quod saepe nemo ratione distinctio esse beatae adipisci tempora rem! Pariatur dolorum labore non animi quae.
</p>

<?php include 'views/footer.php'; ?>

</body>
</html>