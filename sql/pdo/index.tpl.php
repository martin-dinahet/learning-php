<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Actor - Home</title>
</head>
<body>
  <h1><?php echo $title ; ?></h1>
  <!-- 1/ afficher ici tous les acteurs, dans une liste  -->
  <ul>
  <!-- On utilise htmlentities pour se prémunir des injections de script nous verrons cela dans le chapitre sur la sécurité -->
  <?php while($person = $stmt->fetch()) { ?>
    <li><?php echo htmlentities($person['name']); ?>, note : <?php echo htmlentities($person['note']); ?>, enseignement : <strong><?php echo htmlentities($person['enseignement']); ?></strong></li>
  <?php } ?>
  </ul>
  <!-- 2/ Ajouter un acteur -->
  <h1>Ajouter un acteur</h1>
  <form action="index.php" method="POST">
    <!-- champs : name, vote, compagny  -->
    <p>Nom :<input type="text" name="name"></p>
    <p>Note :<input type="text" name="note"></p>
    <p>Enseignement :
    <select name="professor_id">
      <option value="1">Php</option>
      <option value="2">MySQL</option>
      <option value="3">Javascript</option>
      <option value="4">Laravel</option>
      <option value="5">Python</option>
      <option value="6">vueJS</option>
    </select>
    </p>
    <select name="city">
      <option value="PAR">Paris</option>
      <option value="LYO">Lyon</option>
      <option value="MAR">Marseille</option>
      <option value="BOR">Bordeau</option>
    </select>
    <input type="submit" value="Créer">
  </form>
</body>
</html>
