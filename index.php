<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie6</title>
</head>
<body>
  <a href="index.php?lastname=Nemare&firstname=Jean">exercice2</a>
  <?php if (isset($_GET['age'])){ ?>
    <p><?= $_GET['age'] ?> ans.</p>
  <?php }else{ ?>
    <p>il manque l'âge</p>
  <?php } ?>
</body>
</html>
