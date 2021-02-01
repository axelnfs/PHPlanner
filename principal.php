<?php
session_start();
$user = $_POST['user'];
$user = trim($user);
$user = filter_var($user, FILTER_SANITIZE_STRING);
echo $user;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina principal</title>
  </head>
  <body>
    <p>¿Que desea hacer?</p>
  </br>
  <p>Contactos: </p>
    <a href="contacts.php">Contactos</a>
  </br>
    <a href="close.php">cerrar sesion</a>
  </body>
</html>
