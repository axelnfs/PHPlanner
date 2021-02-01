<?php
  session_start();
  $user = $_POST['user'];
  $user = trim($user);
  $user = filter_var($user, FILTER_SANITIZE_STRING);
  //Aqui se maneja la contraseña
  $password = $_POST['password'];
  $password = trim($password);
  $password = filter_var($password, FILTER_SANITIZE_STRING);
  //asignamos la sesion a usuario
  $_SESSION['user'] = $user;
  //echo 'Hola, ' . $user . ', tu contraseña es '. $password;
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div class="new_session_wait">
       <?php echo 'Hola ' . $user. ', espere un momento por favor...'; ?>
     </div>
     <META HTTP-EQUIV="REFRESH" CONTENT="5;principal.php">
     <a href="close.php">cerrar sesion</a>
   </body>
 </html>
