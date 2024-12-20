<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Téléchargement Image</title>
</head>
<body>
  <?php if(file_exists($fileName)): ?>
  <div>
  <h1><?php echo htmlentities($title); ?></h1>
  <img src="<?php echo htmlentities($fileName); ?>" alt="<?php echo htmlentities($title); ?>" width="<?php echo intval($W); ?>">
  </div>
  <?php endif ;?>
  <h1>Télécharger une image</h1>
  <?php if(isset($_SESSION['message'])): ?> <p><?php echo $_SESSION['message']; ?></p> <?php endif ;?>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <p><input type="text" name="title" ></p>
    <p><input type="file" name="image" ></p>
    <p><input type="submit" value="upload"></p>
  </form>
</body>
</html>
