<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 6</title>
  </head>
  <body>
    <p><a href='index.php?building=12&amp;room=101'>Dis-moi bonjour !</a></p>
    <?php
    if (isset($_GET['building']) AND isset($_GET['room'])) // On a le nom et le prénom
{
    echo 'Bonjour ' . $_GET['building'] . ' ' . $_GET['room'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut savoir dans qu\'elle salle on est!';
  }
  ?>
  </body>
</html>
